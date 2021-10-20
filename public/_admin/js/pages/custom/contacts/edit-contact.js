/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*********************************************************************!*\
  !*** ./resources/metronic/js/pages/custom/contacts/edit-contact.js ***!
  \*********************************************************************/
 // Class definition

var KTContactsEdit = function () {
  // Base elements
  var avatar;

  var initAvatar = function initAvatar() {
    avatar = new KTImageInput('kt_contacts_edit_avatar');
  };

  return {
    // public functions
    init: function init() {
      initAvatar();
    }
  };
}();

jQuery(document).ready(function () {
  KTContactsEdit.init();
});
/******/ })()
;