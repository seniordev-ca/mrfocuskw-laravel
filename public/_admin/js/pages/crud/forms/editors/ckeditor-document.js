/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/editors/ckeditor-document.js ***!
  \*****************************************************************************/
 // Class definition

var KTCkeditorDocument = function () {
  // Private functions
  var demos = function demos() {
    DecoupledEditor.create(document.querySelector('#kt-ckeditor-1')).then(function (editor) {
      var toolbarContainer = document.querySelector('#kt-ckeditor-1-toolbar');
      toolbarContainer.appendChild(editor.ui.view.toolbar.element);
    })["catch"](function (error) {
      console.error(error);
    });
    DecoupledEditor.create(document.querySelector('#kt-ckeditor-2')).then(function (editor) {
      var toolbarContainer = document.querySelector('#kt-ckeditor-2-toolbar');
      toolbarContainer.appendChild(editor.ui.view.toolbar.element);
    })["catch"](function (error) {
      console.error(error);
    });
    DecoupledEditor.create(document.querySelector('#kt-ckeditor-3')).then(function (editor) {
      var toolbarContainer = document.querySelector('#kt-ckeditor-3-toolbar');
      toolbarContainer.appendChild(editor.ui.view.toolbar.element);
    })["catch"](function (error) {
      console.error(error);
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
  KTCkeditorDocument.init();
});
/******/ })()
;