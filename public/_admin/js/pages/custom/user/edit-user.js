/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**************************************************************!*\
  !*** ./resources/metronic/js/pages/custom/user/edit-user.js ***!
  \**************************************************************/
 // Class definition

var KTUserEdit = function () {
  // Base elements
  var avatar;

  var initUserForm = function initUserForm() {
    avatar = new KTImageInput('kt_user_edit_avatar');
  };

  return {
    // public functions
    init: function init() {
      initUserForm();
    }
  };
}();

jQuery(document).ready(function () {
  KTUserEdit.init();
});
/******/ })()
;