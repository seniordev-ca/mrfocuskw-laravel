/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************************************************************!*\
  !*** ./resources/metronic/js/pages/features/miscellaneous/sticky-panels.js ***!
  \*****************************************************************************/
 // Class definition
// Based on:  https://github.com/rgalus/sticky-js

var KTStickyPanelsDemo = function () {
  // Private functions
  // Basic demo
  var demo1 = function demo1() {
    if (KTLayoutAsideToggle && KTLayoutAsideToggle.onToggle) {
      var sticky = new Sticky('.sticky');
      KTLayoutAsideToggle.onToggle(function () {
        setTimeout(function () {
          sticky.update(); // update sticky positions on aside toggle
        }, 500);
      });
    }
  };

  return {
    // public functions
    init: function init() {
      demo1();
    }
  };
}();

jQuery(document).ready(function () {
  KTStickyPanelsDemo.init();
});
/******/ })()
;