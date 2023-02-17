// When clicking on element with id #pull-menu, change element with id #main-menu which is hidden by default to display: block

// Select the element with id #pull-menu
var pullMenu = document.querySelector('#pull-menu');

// Add an event listener to the element with id #pull-menu
pullMenu.addEventListener('click', function(event) {
    event.preventDefault();
    console.log('clicked');
    var mainMenu = document.querySelector('#main-menu');
    // if mainMenu.style.display is 'none' or 'block', change it to the opposite
    mainMenu.style.display = (mainMenu.style.display == 'block') ? 'none' : 'block';
    //mainMenu.style.display = 'block';
    }
);

