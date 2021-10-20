/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!***************************************************************!*\
  !*** ./resources/metronic/js/pages/custom/profile/profile.js ***!
  \***************************************************************/
 // Class definition

var KTProfile = function () {
  // Elements
  var avatar;
  var offcanvas; // Private functions

  var _initAside = function _initAside() {
    // Mobile offcanvas for mobile mode
    offcanvas = new KTOffcanvas('kt_profile_aside', {
      overlay: true,
      baseClass: 'offcanvas-mobile',
      //closeBy: 'kt_user_profile_aside_close',
      toggleBy: 'kt_subheader_mobile_toggle'
    });
  };

  var _initForm = function _initForm() {
    avatar = new KTImageInput('kt_profile_avatar');
  };

  return {
    // public functions
    init: function init() {
      _initAside();

      _initForm();
    }
  };
}();

jQuery(document).ready(function () {
  KTProfile.init();
});
/******/ })()
;