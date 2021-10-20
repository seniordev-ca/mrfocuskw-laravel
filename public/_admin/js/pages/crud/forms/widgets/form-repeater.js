/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/forms/widgets/form-repeater.js ***!
  \*************************************************************************/
// Class definition
var KTFormRepeater = function () {
  // Private functions
  var demo1 = function demo1() {
    $('#kt_repeater_1').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        $(this).slideUp(deleteElement);
      }
    });
  };

  var demo2 = function demo2() {
    $('#kt_repeater_2').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        if (confirm('Are you sure you want to delete this element?')) {
          $(this).slideUp(deleteElement);
        }
      }
    });
  };

  var demo3 = function demo3() {
    $('#kt_repeater_3').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        if (confirm('Are you sure you want to delete this element?')) {
          $(this).slideUp(deleteElement);
        }
      }
    });
  };

  var demo4 = function demo4() {
    $('#kt_repeater_4').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        $(this).slideUp(deleteElement);
      }
    });
  };

  var demo5 = function demo5() {
    $('#kt_repeater_5').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        $(this).slideUp(deleteElement);
      }
    });
  };

  var demo6 = function demo6() {
    $('#kt_repeater_6').repeater({
      initEmpty: false,
      defaultValues: {
        'text-input': 'foo'
      },
      show: function show() {
        $(this).slideDown();
      },
      hide: function hide(deleteElement) {
        $(this).slideUp(deleteElement);
      }
    });
  };

  return {
    // public functions
    init: function init() {
      demo1();
      demo2();
      demo3();
      demo4();
      demo5();
      demo6();
    }
  };
}();

jQuery(document).ready(function () {
  KTFormRepeater.init();
});
/******/ })()
;