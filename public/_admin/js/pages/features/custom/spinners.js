/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************************************************!*\
  !*** ./resources/metronic/js/pages/features/custom/spinners.js ***!
  \*****************************************************************/
 // Class definition

var KTSpinnersDemo = function () {
  // Private functions
  // Demos
  var demo1 = function demo1() {
    // Demo 1
    var btn = KTUtil.getById("kt_btn_1");
    KTUtil.addEvent(btn, "click", function () {
      KTUtil.btnWait(btn, "spinner spinner-right spinner-white pr-15", "Please wait");
      setTimeout(function () {
        KTUtil.btnRelease(btn);
      }, 1000);
    });
  };

  var demo2 = function demo2() {
    // Demo 2
    var btn = KTUtil.getById("kt_btn_2");
    KTUtil.addEvent(btn, "click", function () {
      KTUtil.btnWait(btn, "spinner spinner-dark spinner-right pr-15", "Loading");
      setTimeout(function () {
        KTUtil.btnRelease(btn);
      }, 1000);
    });
  };

  var demo3 = function demo3() {
    // Demo 3
    var btn = KTUtil.getById("kt_btn_3");
    KTUtil.addEvent(btn, "click", function () {
      KTUtil.btnWait(btn, "spinner spinner-left spinner-darker-success pl-15", "Disabled...");
      setTimeout(function () {
        KTUtil.btnRelease(btn);
      }, 1000);
    });
  };

  var demo4 = function demo4() {
    // Demo 4
    var btn = KTUtil.getById("kt_btn_4");
    KTUtil.addEvent(btn, "click", function () {
      KTUtil.btnWait(btn, "spinner spinner-left spinner-darker-danger pl-15", "Please wait");
      setTimeout(function () {
        KTUtil.btnRelease(btn);
      }, 1000);
    });
  };

  return {
    // public functions
    init: function init() {
      demo1();
      demo2();
      demo3();
      demo4();
    }
  };
}();

jQuery(document).ready(function () {
  KTSpinnersDemo.init();
});
/******/ })()
;