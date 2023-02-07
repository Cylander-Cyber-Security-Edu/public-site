/* ScrollMagic
========================================================================== */
jQuery(document).ready(function ($) {
  var controller = new ScrollMagic.Controller();

  jQuery(".animate").each(function () {

    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.7,
        // duration: $(this).height()
      })
      .setClassToggle(this, 'is-animate')
      .reverse(false)
      // .addIndicators()
      .addTo(controller);
  })

  jQuery(".onscreen").each(function () {

    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.7,
        duration: '100%'
      })
      .setClassToggle(this, 'is-onscreen')
      .reverse(true)
      // .addIndicators()
      .addTo(controller);
  })
})