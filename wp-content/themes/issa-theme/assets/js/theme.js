
/* Accordion JS */

var accordion = jQuery('body').find('[data-behavior="accordion"]');
var expandedClass = 'is-expanded';

jQuery.each(accordion, function () { // loop through all accordions on the page

  var accordionItems = jQuery(this).find('[data-binding="expand-accordion-item"]');

  jQuery.each(accordionItems, function () { // loop through all accordion items of each accordion
    var jQuerythis = jQuery(this);
    var triggerBtn = jQuerythis.find('[data-binding="expand-accordion-trigger"]');
    
    var setHeight = function (nV) {
      // set height of inner content for smooth animation
      var innerContent = nV.find('.accordion__content-inner')[0],
          maxHeight = jQuery(innerContent).outerHeight(),
          content = nV.find('.accordion__content')[0];

      if (!content.style.height || content.style.height === '0px') {
        jQuery(content).css('height', maxHeight);
      } else {
        jQuery(content).css('height', '0px');
      }
    };
    
    var toggleClasses = function (event) {
      var clickedItem = event.currentTarget;
      var currentItem = jQuery(clickedItem).parent();
      var clickedContent = jQuery(currentItem).find('.accordion__content')
      jQuery(currentItem).toggleClass(expandedClass);
      setHeight(currentItem);
      
      if (jQuery(currentItem).hasClass('is-expanded')) {
        jQuery(clickedItem).attr('aria-selected', 'true');
        jQuery(clickedItem).attr('aria-expanded', 'true');
        jQuery(clickedContent).attr('aria-hidden', 'false');

      } else {
        jQuery(clickedItem).attr('aria-selected', 'false');
        jQuery(clickedItem).attr('aria-expanded', 'false');
        jQuery(clickedContent).attr('aria-hidden', 'true');
      }
    }
    
    triggerBtn.on('click', event, function (e) {
      e.preventDefault();
      toggleClasses(event);
    });

    // open tabs if the spacebar or enter button is clicked whilst they are in focus
    jQuery(triggerBtn).on('keydown', event, function (e) {
      if (e.keyCode === 13 || e.keyCode === 32) {
        e.preventDefault();
        toggleClasses(event);
      }
    });
  });

});


// Previous Page function 

function goBack() {
  window.history.back();
}

// Js for select library

jQuery(document).ready(function() {
  $('.wpcf7-select').select2();
});


