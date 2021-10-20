/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*********************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/widgets/clipboard.js ***!
  \*********************************************************************/
 // Class definition

var KTClipboardDemo = function () {
  // Private functions
  var demos = function demos() {
    // basic example
    new ClipboardJS('[data-clipboard=true]').on('success', function (e) {
      e.clearSelection();
      alert('Copied!');
    });
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

jQuery(document).ready(function () {
  KTClipboardDemo.init();
});
/******/ })()
;