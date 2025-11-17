$(window).on("load", function () {
   // The overlay is initially visible, we need to hide it
   $("#loaderOverlay").addClass("hide-overlay"); // CSS3 will animate it nicely
});

$(document).on("click", "a", function (evt) {
   var href = $(this).attr("href"); // grab the href

   // Check if href is a valid link and not an anchor or hash link
   if (href && href.indexOf('#') === -1) {
       evt.preventDefault(); // Don't navigate!

       // Animate-In our overlay
       $("#loaderOverlay").removeClass("hide-overlay");

       // wait for CSS3 to animate-in the overlay and then navigate to our next page
       setTimeout(function () {
           window.location = href; // Navigate finally
       }, 300); // Match this to your CSS transition timing
   }
});

// Handle the back/forward button navigation issue
window.addEventListener("popstate", function () {
   // Animate-In our overlay when user clicks the back/forward button
   $("#loaderOverlay").removeClass("hide-overlay");

   // Wait for CSS3 to animate-in the overlay and then reload the page
   setTimeout(function () {
       window.location.reload(); // Reload the page
   }, 300); // Match this to your CSS transition timing
});

// Hide the overlay after a page load caused by back/forward navigation
$(window).on("pageshow", function (event) {
   if (event.originalEvent.persisted) {
       // When using bfcache (back-forward cache), ensure the overlay is hidden after navigation
       $("#loaderOverlay").addClass("hide-overlay");
   } else {
       $("#loaderOverlay").addClass("hide-overlay");
   }
});

// Manually handle the popstate event to navigate without reloading
function handleNavigation(href) {
   // Animate-In our overlay
   $("#loaderOverlay").removeClass("hide-overlay");

   // Wait for CSS3 to animate-in the overlay and then navigate to our next page
   setTimeout(function () {
       history.pushState(null, '', href); // Update the history state
       $("#loaderOverlay").addClass("hide-overlay"); // Hide the overlay again
   }, 300); // Match this to your CSS transition timing
}
