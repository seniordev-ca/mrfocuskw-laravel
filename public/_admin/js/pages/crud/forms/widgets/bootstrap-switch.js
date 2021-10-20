/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/widgets/bootstrap-switch.js ***!
  \****************************************************************************/
// Class definition
var KTBootstrapSwitch = function () {
  // Private functions
  var demos = function demos() {
    // minimum setup
    $('[data-switch=true]').bootstrapSwitch();
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

jQuery(document).ready(function () {
  KTBootstrapSwitch.init();
});
/******/ })()
;