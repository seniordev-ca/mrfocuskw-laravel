/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*************************************************************************!*\
  !*** ./resources/metronic/js/pages/custom/education/student/profile.js ***!
  \*************************************************************************/
 // Class definition

var KTAppsEducationStudentProfile = function () {
  // Base elements
  var avatar;

  var initAvatar = function initAvatar() {
    avatar = new KTImageInput('kt_user_avatar');
  };

  return {
    // public functions
    init: function init() {
      initAvatar();
    }
  };
}();

jQuery(document).ready(function () {
  KTAppsEducationStudentProfile.init();
});
/******/ })()
;