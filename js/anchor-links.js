// Select all anchor links on the page
var anchorLinks = document.querySelectorAll('a[href^="#"]');

//console.log(anchorLinks);

// Add an event listener to each anchor link
anchorLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    var headerHeight = document.querySelector('#main-nav').offsetHeight;
    headerHeight += 32;
    var targetId = link.getAttribute('href').substring(1);
    var targetElement = document.getElementById(targetId);
    var targetOffset = targetElement.offsetTop;
    window.scrollTo(0, targetOffset - headerHeight);
  });
});
