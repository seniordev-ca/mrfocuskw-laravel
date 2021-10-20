/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/widgets/autosize.js ***!
  \********************************************************************/
// Class definition
var KTAutosize = function () {
  // Private functions
  var demos = function demos() {
    // basic demo
    var demo1 = $('#kt_autosize_1');
    var demo2 = $('#kt_autosize_2');
    autosize(demo1);
    autosize(demo2);
    autosize.update(demo2);
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

jQuery(document).ready(function () {
  KTAutosize.init();
});
/******/ })()
;