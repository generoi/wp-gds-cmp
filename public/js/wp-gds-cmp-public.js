(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
// Get the popup element
var consentBox = document.getElementById("genero-consent");
if(consentBox) {
  // Get the configs data from the attribute
  var configs = JSON.parse(consentBox.getAttribute("configs"));

console.log(configs['FI'].consents);
  // Get the list element
  var list = consentBox.querySelector(".consent-list");
  var ul = document.createElement("ul");

  // Iterate over the configs data and add a list item for each object
  configs['FI'].consents.forEach(function(consent) {
    var li = document.createElement("li");
    var checkBox = document.createElement("input");
    checkBox.setAttribute("type", "checkbox");
    var h2 = document.createElement("h2");
    var p = document.createElement("p");
    h2.textContent = consent.label;
    p.textContent = consent.description;
    li.appendChild(checkBox);
    li.appendChild(h2);
    li.appendChild(p);
    ul.appendChild(li);
  });

  list.appendChild(ul);

  const consentsList = consentBox.querySelectorAll("li");
  consentsList.forEach((item) => {
    console.log(item);
    const h2 = item.querySelector('h2');
    const p = item.querySelector('p');

    h2.addEventListener('click', () => {
      p.classList.toggle('expanded');
    });
  });
}
