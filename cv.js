 // Visa/dölj 1
function showEducation() {
    var education = document.getElementById("education");
    var toggleButton = document.getElementById("toggleEducation");
    if (education.style.display === "block") {
        toggleButton.innerHTML = "Visa mer...";
        education.style.display = "none";
    }
    else {
        toggleButton.innerHTML = "Dölj...";
        education.style.display = "block";
    }
}

 // Visa/dölj 2
function showInternship() {
    var internship = document.getElementById("internship");
    var toggleButton = document.getElementById("toggleInternship");
    if (internship.style.display === "block") {
        toggleButton.innerHTML = "Visa mer...";
        internship.style.display = "none";
    }
    else {
        toggleButton.innerHTML = "Dölj...";
        internship.style.display = "block";
    }
}

 // Visa/dölj 3
function showExperience() {
    var experience = document.getElementById("workExperience");
    var toggleButton = document.getElementById("toggleWorkExperience");
    if (experience.style.display === "block") {
        toggleButton.innerHTML = "Visa mer...";
        experience.style.display = "none";
    }
    else {
        toggleButton.innerHTML = "Dölj...";
        experience.style.display = "block";
    }
}
