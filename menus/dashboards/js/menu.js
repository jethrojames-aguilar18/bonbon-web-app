// Import the functions you need from the SDKs
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
import { getAuth, onAuthStateChanged, signOut, updatePassword, updateEmail, sendEmailVerification } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js";
import { getFirestore, setDoc, collection, deleteDoc, orderBy, addDoc, doc, updateDoc, getDoc, where, getDocs, query, onSnapshot } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-firestore.js";

// Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyB2ACxlgsaO0_E2zA1zsPEntCXOIHaG21I",
    authDomain: "bonbon-8a34a.firebaseapp.com",
    projectId: "bonbon-8a34a",
    storageBucket: "bonbon-8a34a.firebasestorage.app",
    messagingSenderId: "276254510771",
    appId: "1:276254510771:web:b936bce5f45ed255b56ac6",
    measurementId: "G-85BQTNL30R"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);
auth.languageCode = 'en';

const nameMapping = {
    "Ham & Cheese": "hamcheese",
    "Oreo Creamcheese": "oreocream",
    "Classic Choco": "choco",
    "Dulce De Leche": "dulce",
    "Chocold (12oz)": "chocold",
    "Hot Coffee (12oz)": "hot_coffee",
    "Iced Coffee (12oz)": "iced_coffee"
};

const categoryMapping = {
    "Dorayaki Bites": "dorabite",
    "Boncoin": "boncoin",
    "drinks": "drinks"
};

const sizeMapping = {
    "BONBON Box (16pcs)": "bonbon",
    "SUGOI (12pcs)": "sugoi",
    "OISHI (8pcs)": "oishi",
};


const itemModal = document.getElementById("menuModal");
const editItemModal = document.getElementById("editMenuModal");

function closeEditMenuModal() {
    editItemModal.style.display = "none";
}

function closeMenuModal() {
    itemModal.style.display = "none";
}

// Store the items and rows globally for later search reference
let menuItems = [];

// Function to fetch and display items
async function fetchItems() {
    console.log("Fetching items...");
    const itemsCollection = collection(db, "items");
    const itemsSnapshot = await getDocs(itemsCollection);
    const menuTableBody = document.getElementById("menu-table-body");

    menuTableBody.innerHTML = ""; // Clear existing table rows
    let index = 1; // Product numbering

    // Clear the global menuItems array
    menuItems = [];

    // Convert Firestore snapshot to an array
    let itemsArray = [];
    itemsSnapshot.forEach((docSnap) => {
        const data = docSnap.data();
        if (data.item_price !== undefined && data.item_price !== null) {
            itemsArray.push({ id: docSnap.id, data });
        }
    });

    // Sort items based on category priority
    itemsArray.sort((a, b) => {
        const categoryA = a.data.category || "";
        const categoryB = b.data.category || "";

        if (categoryA === "Dorayaki Bites" && categoryB !== "Dorayaki Bites") {
            return -1; // Dorayaki Bites first
        } 
        if (categoryA !== "Dorayaki Bites" && categoryB === "Dorayaki Bites") {
            return 1;
        } 
        if (categoryA === "Boncoin the Drinks" && categoryB !== "Boncoin the Drinks") {
            return -1; // Boncoin the Drinks second
        } 
        if (categoryA !== "Boncoin the Drinks" && categoryB === "Boncoin the Drinks") {
            return 1;
        }

        return 0; // Keep other items in original order
    });

    // Populate the table
    itemsArray.forEach(({ id, data }) => {
        const row = document.createElement("tr");
        row.setAttribute("data-menu-id", id);

        row.innerHTML = `
            <td>${index}</td>
            <td>${data.item_name}</td>
            <td>${data.category}</td>
            <td>${data.size !== undefined ? data.size : '-'}</td>
            <td>₱${data.item_price.toFixed(2)}</td>
            <td>
                <button class="action-btn edit" onclick="editMenu(this)"><i class="fas fa-edit"></i></button>
                <button class="action-btn delete"><i class="fa-solid fa-trash"></i></button>
            </td>
        `;

        menuTableBody.appendChild(row);
        menuItems.push({ row, data });
        index++;
    });

    // Attach delete event listeners
    document.querySelectorAll('.delete').forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopImmediatePropagation();
            deleteMenu(e.target);
        });
    });
}

// Search functionality for filtering the table based on user input
document.getElementById("search-product").addEventListener("input", function () {
    const searchQuery = this.value.toLowerCase(); // Convert input to lowercase for case-insensitive comparison

    // Loop through all items in the menuItems array
    menuItems.forEach(item => {
        const { row, data } = item;
        const { item_name, category, size, item_price } = data;

        // Check if any part of the row matches the search query
        const matchesSearch =
            item_name.toLowerCase().includes(searchQuery) ||
            category.toLowerCase().includes(searchQuery) ||
            (size && size.toLowerCase().includes(searchQuery)) ||
            item_price.toString().includes(searchQuery);

        // Show or hide the row based on the match
        row.style.display = matchesSearch ? "" : "none";
    });
});


async function addItems() {
    // Get values from the form
    const itemName = document.getElementById("menu_name").value;
    const menuCategory = document.getElementById("menu-category").value;
    const price = parseFloat(document.getElementById('menu_price').value);

    let nameDisplay = itemName;

    if(menuCategory === "Boncoin") {
        nameDisplay = menuCategory + " " + itemName;
    }
    
    // Validate input
    if (!itemName || !menuCategory || (menuCategory === "Dorayaki Bites" && (!document.getElementById("price-bonbon") || !document.getElementById("price-oishi") || !document.getElementById("price-sugoi")))) {
        /*alert("Please fill out all required fields.");*/
        showModal("Please fill out all required fields.", false);
        return;
    }

    showConfirmation("Are you sure you want to delete this menu?", async function () { 
        // Handle adding sizes and prices for Dorayaki Bites category
        if (menuCategory === "Dorayaki Bites") {
            // Get prices entered for each size
            const priceBonbon = parseFloat(document.getElementById("price-bonbon").value);
            const priceOishi = parseFloat(document.getElementById("price-oishi").value);
            const priceSugoi = parseFloat(document.getElementById("price-sugoi").value);
        
            const sizes = [
                { name: "BONBON Box (16pcs)", price: priceBonbon },
                { name: "OISHI (8pcs)", price: priceOishi },
                { name: "SUGOI (12pcs)", price: priceSugoi }
            ];
        
            try {
                // Iterate over each size and add it with the correct price
                for (let i = 0; i < sizes.length; i++) {
                    const currentSize = sizes[i].name;
                    const itemPrice = sizes[i].price;
                    const docId = getFormattedId(menuCategory, itemName, currentSize);
                    console.log("DOC ID: " + docId);
        
                    // Prepare item data to add to Firestore
                    const itemData = {
                        item_name: itemName,
                        category: menuCategory,
                        item_price: itemPrice, // Use the user-inputted price
                        name_to_show: itemName + " " + currentSize, // Update display name for each size
                        size: currentSize, // Add the size specific to this iteration
                        created_at: new Date()  // Adding a timestamp for creation
                    };
        
                    // Add the item to Firestore
                    await setDoc(doc(db, "items", docId), itemData);
                    console.log("Document added with ID: ", docId);
        
                    // Get all branches
                    const branchesSnapshot = await getDocs(collection(db, "branches"));
        
                    // Iterate over all branches
                    for (const branchDoc of branchesSnapshot.docs) {
                        const branchId = branchDoc.id;
        
                        const branchItemData = {
                            item_name: itemName,
                            isSoldOut: false,
                            categ: menuCategory,
                        };
        
                        // Add the item to the branch's "items" subcollection
                        const branchItemRef = doc(db, "branches", branchId, "items", docId);
                        await setDoc(branchItemRef, branchItemData);
                        console.log(`Item added to branch ${branchId}`);
                    }
                }
        
                // Show success message ONCE after all items are added
                document.getElementById("addMenuForm").reset();
                closeMenuModal();
                showModal(`All sizes of ${itemName} added successfully!`, true);
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } catch (e) {
                console.error("Error adding document: ", e);
                showModal("Error adding item. Please try again.", false);
            }
        } else {
            // If category is not "Dorayaki Bites", proceed as usual for a single item
            const docId = getFormattedId(menuCategory, itemName);
            console.log("DOC ID: " + docId);

            // Prepare item data to add to Firestore
            const itemData = {
                item_name: itemName,
                category: menuCategory,
                item_price: price,
                name_to_show: nameDisplay,
                created_at: new Date()  // Adding a timestamp for creation
            };

            try {
                // Add the item to the Firestore collection using the generated docId
                await setDoc(doc(db, "items", docId), itemData);

                console.log("Document added with ID: ", docId); // Log the custom docId

                // Get all branches
                const branchesSnapshot = await getDocs(collection(db, "branches"));

                // Iterate over all branches with a proper asynchronous loop
                for (const branchDoc of branchesSnapshot.docs) {
                    const branchId = branchDoc.id;

                    // Define a simpler item data for each branch (with just item_name, isSoldOut, and category)
                    const branchItemData = {
                        item_name: itemName,
                        isSoldOut: false,  // Default status for items
                        categ: menuCategory
                    };

                    // Create a document reference for the specific branch's "items" subcollection
                    const branchItemRef = doc(db, "branches", branchId, "items", docId);

                    // Add the item to the branch's "items" subcollection using the document reference
                    await setDoc(branchItemRef, branchItemData);
                    console.log(`Item added to branch ${branchId} with simplified data`);
                }

                // Show success message
                /*alert("Item added to all branches successfully!");*/
                showModal("Item added to all branches successfully!", true);

                // Reset the form after adding
                document.getElementById("addMenuForm").reset();
                closeMenuModal();
                
            } catch (e) {
                console.error("Error adding document: ", e);
                alert("Error adding item. Please try again.");
                showModal("Error adding item. Please try again.", false);
            }
        }
    });
}

async function editItems() {
    console.log("ITEM EDITED");
    // Get the updated values from the input fields
    const updatedItemName = document.getElementById("edit-menu_name").value;
    const updatedPrice = parseFloat(document.getElementById("edit-menu_price").value);

    // Get the document ID from the hidden input field
    const itemId = document.getElementById("edit-doc-menu-id").value;
    
    console.log("ITEM ID:: " + itemId);

    // Validate the input
    if (!updatedItemName || isNaN(updatedPrice)) {
        /*alert("Please provide a valid item name and price.");*/
        showModal("Please provide a valid item name and price.", false);
        return;
    }

    try {
        // Update the item in Firestore
        const itemRef = doc(db, "items", itemId); // Reference to the item document
        await updateDoc(itemRef, {
            item_name: updatedItemName,
            item_price: updatedPrice
        });

        console.log("Item successfully updated in Firestore!");
        
        // Get all branches
        const branchesSnapshot = await getDocs(collection(db, "branches"));

        // Iterate over all branches and update the item in each branch's "items" subcollection
        for (const branchDoc of branchesSnapshot.docs) {
            const branchId = branchDoc.id;

            // Reference to the specific branch's item document in the "items" subcollection
            const branchItemRef = doc(db, "branches", branchId, "items", itemId);

            // Update the item for the branch
            await updateDoc(branchItemRef, {
                item_name: updatedItemName
            });

            console.log(`Item updated in branch ${branchId}`);
        }
             
        /*alert("Item updated successfully!");*/
        showModal("Item updated successfully!", true);

        // Optionally, close the modal after the update
        closeEditMenuModal();
    } catch (e) {
        console.error("Error updating item: ", e);
        /*alert("Error updating item. Please try again.");*/
        showModal("Error updating item. Please try again.", false);
    }
}

async function deleteMenu(button) {
    console.log("delete menu");

    // Get the row where the button was clicked
    const row = button.closest("tr");

    if (!row) {
        console.error("Could not find the row or details card.");
        return;
    }

    // Get the document ID (menu item ID) from the data-menu-id attribute
    const itemId = row.getAttribute("data-menu-id");
    console.log("ITEMM ID: " + itemId);

    if (!itemId) {
        console.error("Menu item ID not found.");
        return;
    }

    // Confirm deletion with the user
    showConfirmation("Are you sure you want to delete this menu?", async function () {
        try {
            // Get reference to the item document in Firestore
            const menuRef = doc(db, "items", itemId);

            // Delete the item document from Firestore
            await deleteDoc(menuRef);

            console.log("Menu deleted successfully!");

            // Get all branches
            const branchesSnapshot = await getDocs(collection(db, "branches"));

            // Iterate over all branches and delete the item from each branch's "items" subcollection
            for (const branchDoc of branchesSnapshot.docs) {
                const branchId = branchDoc.id;

                // Reference to the specific branch's item document in the "items" subcollection
                const branchItemRef = doc(db, "branches", branchId, "items", itemId);

                // Delete the item for the branch
                await deleteDoc(branchItemRef);

                console.log(`Item deleted in branch ${branchId}`);
            }

            // Remove the row from the UI
            row.remove();

            // Show success message
            showModal("Menu deleted successfully!", true);

        } catch (error) {
            console.error("Error deleting menu item:", error.message);
            showModal("Failed to delete menu item.", false);
            console.error(error.stack);
        }
    });
}


  function capitalizeFirstLetter(str) {
    return str
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
        .join(' ');
}

function getFormattedId(category, name, size) {
    console.log("Name: " + name);
    console.log("Cate " + category);

    // Capitalize and format the name, category, and size
    const formattedName = nameMapping[capitalizeFirstLetter(name)] || name.trim().toLowerCase().replace(/\s+/g, '');
    const formattedCategory = categoryMapping[category.trim()] || category.trim().toLowerCase();
    const formattedSize = size ? (sizeMapping[size.trim()] || size.trim().replace(/\s+/g, '').toLowerCase()) : '';

    // Handle different categories and formats
    if (category === "Drinks") {
        return formattedName;
    }

    if (category === "Boncoin") {
        // Include size only if it exists
        return size ? `${formattedCategory}_${formattedName}_${formattedSize}` : `${formattedCategory}_${formattedName}`;
    }

    if (name.trim().toLowerCase() === "walnutella") {
        return `${formattedCategory}_${formattedName}_${formattedSize}`;
    }

    // Return with or without size depending on its existence
    return size ? `${formattedCategory}_${formattedSize}_${formattedName}` : `${formattedCategory}_${formattedName}`;
}

function showConfirmation(message, callback) {
    const modalElement = document.getElementById('confirmationModal');
    const modalInstance = new bootstrap.Modal(modalElement);
    const modalMessage = document.getElementById('confirmationMessage');
    const confirmButton = document.getElementById('confirmActionBtn');
  
    // Set the confirmation message
    modalMessage.textContent = message;
  
    // Remove any previous event listeners to prevent duplicate triggers
    confirmButton.replaceWith(confirmButton.cloneNode(true));
    const newConfirmButton = document.getElementById('confirmActionBtn');
  
    // Attach the new event listener
    newConfirmButton.addEventListener("click", function () {
        callback(); // Execute the callback function
        modalInstance.hide();
    });
  
    // Show the modal
    modalInstance.show();
}

function showModal(message, isSuccess) {
    const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
    const modalMessage = document.getElementById('modalMessage');
  
    modalMessage.textContent = message;
  
    // Change color based on success or error
    if (isSuccess) {
        document.querySelector('#loadingModal .modal-content').style.backgroundColor = '#d4edda';
    } else {
        document.querySelector('#loadingModal .modal-content').style.backgroundColor = '#f8d7da';
    }
  
    loadingModal.show();
}



// Event listener for the save button
document.getElementById("save-menu").addEventListener("click", addItems);
document.getElementById("save-edit-menu").addEventListener("click", editItems);

// Fetch items on page load
window.onload = fetchItems;

