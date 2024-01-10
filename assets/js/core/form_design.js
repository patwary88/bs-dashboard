

// Function to apply the input-group-sm class to all elements with class "input-group" based on screen width
function updateInputGroupClass() {
    var inputGroups = document.querySelectorAll('.input-group');
    
    inputGroups.forEach(function(inputGroup) {
    if (isMobile()) {
        inputGroup.classList.add('input-group-sm');
    } else {
        inputGroup.classList.remove('input-group-sm');
    }
    });
}

// Initial check on page load
updateInputGroupClass();
// Update the class when the window is resized
window.addEventListener('resize', updateInputGroupClass);

// end apply input-group-sm for mobile screen;