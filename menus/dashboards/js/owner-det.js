// Import the functions you need from the SDKs
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
import { getAuth, onAuthStateChanged, signOut, updatePassword, updateEmail, sendEmailVerification } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js";
import { getFirestore, collection, addDoc, doc, updateDoc, getDoc, where, getDocs, query, onSnapshot } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-firestore.js";

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

// Authenticate user and set up passcode functionality
onAuthStateChanged(auth, (user) => {
    if (user) {
        console.log("User is authenticated:", user);
        populateBranches(user);
        
        // Get the user email from Firebase Authentication
        const userEmail = user.email;
        const passcodeInput = document.getElementById("passcode");

        // Handle passcode cancel button click
        document.getElementById("passcode-cancel").addEventListener("click", function() {
            passcodeInput.value = ""; // Clear the input field
        });

        // Handle passcode submit button click
        document.getElementById("passcode-submit").addEventListener("click", function() {
            const passcode = passcodeInput.value.trim(); // Get the passcode entered

            if (passcode) {
                // Hash the original passcode for storage (for security)
                hashPasscode(passcode).then(hashedPasscode => {
                    // Query Firestore to find the document based on the user's email
                    const usersRef = collection(db, "users");
                    const q = query(usersRef, where("email", "==", userEmail));

                    // Get the user document by email
                    getDocs(q).then((querySnapshot) => {
                        if (querySnapshot.empty) {
                            console.log("No user found with that email.");
                            return;
                        }

                        // Assuming only one document with the email exists
                        querySnapshot.forEach((doc) => {
                            // Store the hashed passcode in Firestore
                            updateDoc(doc.ref, {
                                passcode: hashedPasscode
                            })
                            .then(() => {
                                console.log("Passcode updated successfully!");
                                // Call the verifyPasscode function to verify after storing the passcode
                                verifyPasscode(userEmail);
                            })
                            .catch((error) => {
                                console.error("Error updating passcode: ", error);
                            });
                        });
                    }).catch((error) => {
                        console.error("Error querying user by email: ", error);
                    });
                });
            } else {
                console.log("Please enter a passcode.");
            }
        });
    } else {
        console.log("User is not authenticated.");
    }
});


// Function to populate branches from Firestore and show/hide elements based on auth state
function populateBranches(user) {
    const branchSelect = document.getElementById("branchSelect");
    const roleSelect = document.getElementById("role");  // Role dropdown
    const loginEmp = document.querySelector(".login-emp"); // The 'login-emp' class element
    const emailInput = document.getElementById("branch-email"); // Email input for Staff and Manager
    const allowRadio = document.getElementById("allow-access");
    const declineRadio = document.getElementById("decline-access");
    loginEmp.style.display = 'none';

    // Fetch branches from Firestore
    const branchCollection = collection(db, "branches");

    onSnapshot(branchCollection, (branchesSnapshot) => {
        // Clear any existing options in the select dropdown
        branchSelect.innerHTML = '<option value="" disabled selected>Select a branch</option>';

        // Iterate through each document in the snapshot
        branchesSnapshot.forEach((doc) => {
            const location = doc.data().location; // Get the location field from the document
            const option = document.createElement("option");
            option.value = doc.id; // Use the document ID as the value
            option.textContent = location; // Use the location as the option text
            branchSelect.appendChild(option);
        });

        console.log("Branches populated successfully.");

        // Add event listener to branch select to enable Role dropdown
        branchSelect.addEventListener("change", function() {
            // Enable the role dropdown when a branch is selected
            roleSelect.disabled = false;
            // Reset the role to default (this ensures 'Staff' is not selected)
            roleSelect.value = "";  // Reset role dropdown to default value
            // Reset the email field and hide the login-emp and pass-emp classes
            emailInput.value = '';
            loginEmp.style.display = 'none';
        });

        // Add event listener to role select to show or hide 'login-emp' for staff
        roleSelect.addEventListener("change", async function() {
            if (roleSelect.value === "Staff" || roleSelect.value === "Manager") {
                // Show login-emp if the role is Staff or Manager
                loginEmp.style.display = 'block';

                const branchId = branchSelect.value;

                // Fetch the email based on the role selected (Staff or Manager)
                const branchDoc = await getDoc(doc(db, "branches", branchId));
                let email = "";

                if (branchDoc.exists()) {
                    if (roleSelect.value === "Staff") {
                        email = branchDoc.data().staff_email; // Get the staff email field
                    } else if (roleSelect.value === "Manager") {
                        email = branchDoc.data().manager_email; // Get the manager email field
                    }

                    emailInput.value = email; // Set the email in the email input field

                    // Query Firestore to get the hasAccess field based on the email
                    const usersRef = collection(db, "users");
                    const q = query(usersRef, where("email", "==", email));

                    // Listen to changes in the user document and update the radio button
                    onSnapshot(q, (querySnapshot) => {
                        if (!querySnapshot.empty) {
                            querySnapshot.forEach((doc) => {
                                const hasAccess = doc.data().hasAccess; // Get the hasAccess field

                                // Toggle radio buttons based on the hasAccess field
                                if (hasAccess === true) {
                                    allowRadio.checked = true;
                                    declineRadio.checked = false;
                                } else {
                                    allowRadio.checked = false;
                                    declineRadio.checked = true;
                                }
                            });
                        }
                    });
                }

            } else {
                // Hide login-emp and pass-emp if the role is not Staff or Manager
                loginEmp.style.display = 'none';
            }
        });
    }, (error) => {
        console.error("Error listening to branches: ", error);
    });
}
