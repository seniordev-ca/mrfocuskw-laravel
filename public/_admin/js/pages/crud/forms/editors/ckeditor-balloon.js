/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/editors/ckeditor-balloon.js ***!
  \****************************************************************************/
 // Class definition

var KTCkeditorBalloon = function () {
  // Private functions
  var demos = function demos() {
    BalloonEditor.create(document.querySelector('#kt-ckeditor-1')).then(function (editor) {
      console.log(editor);
    })["catch"](function (error) {
      console.error(error);
    });
    BalloonEditor.create(document.querySelector('#kt-ckeditor-2')).then(function (editor) {
      console.log(editor);
    })["catch"](function (error) {
      console.error(error);
    });
    BalloonEditor.create(document.querySelector('#kt-ckeditor-3')).then(function (editor) {
      console.log(editor);
    })["catch"](function (error) {
      console.error(error);
    });
    BalloonEditor.create(document.querySelector('#kt-ckeditor-4')).then(function (editor) {
      console.log(editor);
    })["catch"](function (error) {
      console.error(error);
    });
    BalloonEditor.create(document.querySelector('#kt-ckeditor-5')).then(function (editor) {
      console.log(editor);
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
  KTCkeditorBalloon.init();
});
/******/ })()
;