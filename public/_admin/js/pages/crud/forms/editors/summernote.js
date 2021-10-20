/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**********************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/editors/summernote.js ***!
  \**********************************************************************/
 // Class definition

var KTSummernoteDemo = function () {
  // Private functions
  var demos = function demos() {
    $('.summernote').summernote({
      height: 400,
      tabsize: 2
    });
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}(); // Initialization


jQuery(document).ready(function () {
  KTSummernoteDemo.init();
});
/******/ })()
;