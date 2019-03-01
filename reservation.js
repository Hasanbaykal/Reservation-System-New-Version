/* Slideshow -------------------------------------------------------------------------------------------------------- */

let i = 0; 			// Start Point
let images = [];	// Images Array
let time = 2000;	// Time Between Switch

// Image List
images[0] = "https://i.imgur.com/qIMdK8h.jpg";
images[1] = "https://i.imgur.com/Lw0aomQ.jpg";
images[2] = "https://i.imgur.com/55P6LZy.jpg";
images[3] = "https://i.imgur.com/B4vBLMV.jpg";
images[4] = "https://i.imgur.com/xN5oqxZ.jpg";
images[5] = "https://i.imgur.com/JqmFiKm.png";
images[6] = "https://i.imgur.com/COz1eht.png";
images[7] = "https://i.imgur.com/hrM0axs.png";
images[8] = "https://i.imgur.com/WJ9077O.png";
images[9] = "https://i.imgur.com/i0dhFyM.png";



// Change Image
function changeImg(){
    document.slide.src = images[i];

    // Check If Index Is Under Max
    if(i < images.length - 1){
        // Add 1 to Index
        i++;
    } else {
        // Reset Back To O
        i = 0;
    }

    // Run function every x seconds
    setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;


/* Responsive Hamburger Navbar -------------------------------------------------------------------------------------- */
function jsNav() {
    let x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


/* Form Validation -------------------------------------------------------------------------------------------------- */

// Signup Page
document.getElementById("email").className = document.getElementById("email").className + " error";
document.getElementById("email").className = document.getElementById("email").className.replace(" error", "");

document.getElementById("gebruikersnaam").className = document.getElementById("gebruikersnaam").className + " error";
document.getElementById("gebruikersnaam").className = document.getElementById("gebruikersnaam").className.replace(" error", "");

document.getElementById("wachtwoord").className = document.getElementById("wachtwoord").className + " error";
document.getElementById("wachtwoord").className = document.getElementById("wachtwoord").className.replace(" error", "");

function validateFormS() {
    let x = document.forms["signupForm"]["email"].value;
    if (x === "") {
        document.getElementById("email").className = document.getElementById("email").className + " error";
        return false;
    } else {
        document.getElementById("email").className = document.getElementById("email").className.replace(" error", "");
    }

    x = document.forms["signupForm"]["gebruikersnaam"].value;
    if (x === "") {
        document.getElementById("gebruikersnaam").className = document.getElementById("gebruikersnaam").className + " error";
        return false;
    } else {
        document.getElementById("gebruikersnaam").className = document.getElementById("gebruikersnaam").className.replace(" error", "");
    }

    x = document.forms["signupForm"]["wachtwoord"].value;
    if (x === "") {
        document.getElementById("wachtwoord").className = document.getElementById("wachtwoord").className + " error";
        return false;
    } else {
        document.getElementById("wachtwoord").className = document.getElementById("wachtwoord").className.replace(" error", "");
    }
}


// Appointment Page
document.getElementById("gender").className = document.getElementById("gender").className + " error";
document.getElementById("gender").className = document.getElementById("gender").className.replace(" error", "");

document.getElementById("type_of_work").className = document.getElementById("type_of_work").className + " error";
document.getElementById("type_of_work").className = document.getElementById("type_of_work").className.replace(" error", "");

document.getElementById("about_work").className = document.getElementById("about_work").className + " error";
document.getElementById("about_work").className = document.getElementById("about_work").className.replace(" error", "");

document.getElementById("photos").className = document.getElementById("photos").className + " error";
document.getElementById("photos").className = document.getElementById("photos").className.replace(" error", "");

document.getElementById("info_photos").className = document.getElementById("info_photos").className + " error";
document.getElementById("info_photos").className = document.getElementById("info_photos").className.replace(" error", "");

document.getElementById("datum").className = document.getElementById("datum").className + " error";
document.getElementById("datum").className = document.getElementById("datum").className.replace(" error", "");

function validateFormA() {
    let x = document.forms["appointmentForm"]["gender"].value;
    if (x === "") {
        document.getElementById("gender").className = document.getElementById("gender").className + " error";
        return false;
    } else {
        document.getElementById("gender").className = document.getElementById("gender").className.replace(" error", "");
    }

    x = document.forms["appointmentForm"]["type_of_work"].value;
    if (x === "") {
        document.getElementById("type_of_work").className = document.getElementById("type_of_work").className + " error";
        return false;
    } else {
        document.getElementById("type_of_work").className = document.getElementById("type_of_work").className.replace(" error", "");
    }

    x = document.forms["appointmentForm"]["about_work"].value;
    if (x === "") {
        document.getElementById("about_work").className = document.getElementById("about_work").className + " error";
        return false;
    } else {
        document.getElementById("about_work").className = document.getElementById("about_work").className.replace(" error", "");
    }

    x = document.forms["appointmentForm"]["photos"].value;
    if (x === "") {
        document.getElementById("photos").className = document.getElementById("photos").className + " error";
        return false;
    } else {
        document.getElementById("photos").className = document.getElementById("photos").className.replace(" error", "");
    }

    x = document.forms["appointmentForm"]["info_photos"].value;
    if (x === "") {
        document.getElementById("info_photos").className = document.getElementById("info_photos").className + " error";
        return false;
    } else {
        document.getElementById("info_photos").className = document.getElementById("info_photos").className.replace(" error", "");
    }

    x = document.forms["appointmentForm"]["datum"].value;
    if (x === "") {
        document.getElementById("datum").className = document.getElementById("datum").className + " error";
        return false;
    } else {
        document.getElementById("datum").className = document.getElementById("datum").className.replace(" error", "");
    }
}

// Manage Page
document.getElementById("available_time").className = document.getElementById("available_time").className + " error";
document.getElementById("available_time").className = document.getElementById("available_time").className.replace(" error", "");

function validateFormM() {
    let x = document.forms["manageForm"]["available_time"].value;
    if (x === "") {
        document.getElementById("available_time").className = document.getElementById("available_time").className + " error";
        return false;
    } else {
        document.getElementById("available_time").className = document.getElementById("available_time").className.replace(" error", "");
    }
}


// Contact Page
document.getElementById("name_contact").className = document.getElementById("name_contact").className + " error";
document.getElementById("name_contact").className = document.getElementById("name_contact").className.replace(" error", "");

document.getElementById("contact_email").className = document.getElementById("contact_email").className + " error";
document.getElementById("contact_email").className = document.getElementById("contact_email").className.replace(" error", "");

document.getElementById("contact_subject").className = document.getElementById("contact_subject").className + " error";
document.getElementById("contact_subject").className = document.getElementById("contact_subject").className.replace(" error", "");

document.getElementById("contact_about").className = document.getElementById("contact_about").className + " error";
document.getElementById("contact_about").className = document.getElementById("contact_about").className.replace(" error", "");

function validateFormC() {
    // Contact Page
    let x = document.forms["contactForm"]["name_contact"].value;
    if (x === "") {
        document.getElementById("name_contact").className = document.getElementById("name_contact").className + " error";
        return false;
    } else {
        document.getElementById("name_contact").className = document.getElementById("name_contact").className.replace(" error", "");
    }

    x = document.forms["contactForm"]["contact_email"].value;
    if (x === "") {
        document.getElementById("contact_email").className = document.getElementById("contact_email").className + " error";
        return false;
    } else {
        document.getElementById("contact_email").className = document.getElementById("contact_email").className.replace(" error", "");
    }

    x = document.forms["contactForm"]["contact_subject"].value;
    if (x === "") {
        document.getElementById("contact_subject").className = document.getElementById("contact_subject").className + " error";
        return false;
    } else {
        document.getElementById("contact_subject").className = document.getElementById("contact_subject").className.replace(" error", "");
    }

    x = document.forms["contactForm"]["contact_about"].value;
    if (x === "") {
        document.getElementById("contact_about").className = document.getElementById("contact_about").className + " error";
        return false;
    } else {
        document.getElementById("contact_about").className = document.getElementById("contact_about").className.replace(" error", "");
    }

}


// Admin Page
document.getElementById("gebruikersnaam1").className = document.getElementById("gebruikersnaam1").className + " error";
document.getElementById("gebruikersnaam1").className = document.getElementById("gebruikersnaam1").className.replace(" error", "");

document.getElementById("wachtwoord1").className = document.getElementById("wachtwoord1").className + " error";
document.getElementById("wachtwoord1").className = document.getElementById("wachtwoord1").className.replace(" error", "");

function validateFormAD() {
    // Admin Page
    let x = document.forms["adminForm"]["gebruikersnaam1"].value;
    if (x === "") {
        document.getElementById("gebruikersnaam1").className = document.getElementById("gebruikersnaam1").className + " error";
        return false;
    } else {
        document.getElementById("gebruikersnaam1").className = document.getElementById("gebruikersnaam1").className.replace(" error", "");
    }

    x = document.forms["adminForm"]["wachtwoord1"].value;
    if (x === "") {
        document.getElementById("wachtwoord1").className = document.getElementById("wachtwoord1").className + " error";
        return false;
    } else {
        document.getElementById("wachtwoord1").className = document.getElementById("wachtwoord1").className.replace(" error", "");
    }
}

