/* Modal
========================================================================== */
jQuery(document).ready(function ($) {

  jQuery(document).on('click', '.modal-opener', function (event) {
    event.preventDefault();
    jQuery.openModal(jQuery(this).data("modal"));
  });


  jQuery(document).on('click', '.modal .close', function (event) {
    close_modal()
  });

  jQuery('.modal').on('click', function (e) {
    if (e.target !== this) return;
    close_modal()
  });

  jQuery("body").keydown(function (e) {
    if (e.keyCode == 27) {
      close_modal()
    }
  });

  function close_modal() {
    $modal = jQuery(".modal.open");
    $modal.removeClass("open");
    //bodyScrollLock.unlock($modal); //prevent scrolling on iOS
    jQuery("body").removeClass("modal-open");
  }

  if(jQuery(".modal.openinit").length){
    jQuery(".modal.openinit").open()
  }
})

jQuery(function () {
  jQuery.gbl_generate_modal = function(modalContent, open, modal_class) {
    if(!modal_class){
      modal_class ="";
    }
    jQuery.ajax({
      url: frontendajax.ajaxurl,
      type: "POST",
      data: {
        'action': 'get_modal_ajax',
        'content': encodeURI(modalContent),
        'modal_class': modal_class
      }
    }).done(function (response) {
      jQuery('body').append(response.modal); // Afficher le HTML
      if (open) {
        jQuery("#" + response.id).open();
      }
      return response.id;
    });
  }

  jQuery.openModal = function (modalID, disableLock) {
    $modal = jQuery("#" + modalID);
    if($modal){
      $modal.addClass("open");

      if (!disableLock) {
        // console.log('lock modal');
        // bodyScrollLock.lock($modal); //prevent scrolling on iOS
      }
      else {
        console.log('do not lock modal');

      }

      jQuery("body").addClass("modal-open");
    }
  }
})

jQuery.fn.open = function () {
  var $el = jQuery(this[0]) // This is the element
  if ($el.hasClass("modal")) {
    $el.addClass("open");
    jQuery("body").addClass('modal-open');
  }
  return this; // This is needed so other functions can keep chaining off of this
};
jQuery.fn.close = function () {
  jQuery(".modal").removeClass('open');
  jQuery("body").removeClass('modal-open');
  return this; // This is needed so other functions can keep chaining off of this
};
