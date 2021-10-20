/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************************************************!*\
  !*** ./resources/metronic/js/pages/features/cards/draggable.js ***!
  \*****************************************************************/


var KTCardDraggable = function () {
  return {
    //main function to initiate the module
    init: function init() {
      var containers = document.querySelectorAll('.draggable-zone');

      if (containers.length === 0) {
        return false;
      }

      var swappable = new Sortable["default"](containers, {
        draggable: '.draggable',
        handle: '.draggable .draggable-handle',
        mirror: {
          //appendTo: selector,
          appendTo: 'body',
          constrainDimensions: true
        }
      });
    }
  };
}();

jQuery(document).ready(function () {
  KTCardDraggable.init();
});
/******/ })()
;