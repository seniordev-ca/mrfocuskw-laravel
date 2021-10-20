/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/widgets/bootstrap-select.js ***!
  \****************************************************************************/
// Class definition
var KTBootstrapSelect = function () {
  // Private functions
  var demos = function demos() {
    // minimum setup
    $('.kt-selectpicker').selectpicker();
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

jQuery(document).ready(function () {
  KTBootstrapSelect.init();
});
/******/ })()
;