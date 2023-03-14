// Select all expand sections on the page by querying for class 'js-expand-container'
var expandContainers = document.querySelectorAll('.js-expand-container');

// For each expand container, search for the expand button (.js-expand-trigger) and add an event listener
expandContainers.forEach(function(container) {
    var expandButton = container.querySelector('.js-expand-trigger');
    // Get expand section labeled (.js-expand-section)
    var expandSection = container.querySelector('.js-expand-section');
    expandButton.addEventListener('click', function() {
        // Toggle the 'expanded' class on the container
        expandSection.classList.toggle('expanded');

        // Get the text of the expand button
        var buttonText = expandButton.textContent;
        // Get the attribute value primary_text from expandButton
        var primaryText = expandButton.getAttribute('primary_text');
        // Get the attribute value alt_text from expandButton
        var altText = expandButton.getAttribute('alt_text');
        // If the text of the expand button is equal to the primary text
        if (buttonText != altText) {
            // Set the text of the expand button to the alt text
            expandButton.textContent = altText;
        }else{
            // Set the text of the expand button to the primary text
            expandButton.textContent = primaryText;
        }
    });
});