/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*********************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/datatables/advanced/footer-callback.js ***!
  \*********************************************************************************/


var KTDatatablesAdvancedFooterCalllback = function () {
  var _init = function init() {
    var table = $('#kt_datatable'); // begin first table

    table.DataTable({
      responsive: true,
      pageLength: 5,
      lengthMenu: [[2, 5, 10, 15, -1], [2, 5, 10, 15, 'All']],
      footerCallback: function footerCallback(row, data, start, end, display) {
        var column = 6;
        var api = this.api(),
            data; // Remove the formatting to get integer data for summation

        var intVal = function intVal(i) {
          return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
        }; // Total over all pages


        var total = api.column(column).data().reduce(function (a, b) {
          return intVal(a) + intVal(b);
        }, 0); // Total over this page

        var pageTotal = api.column(column, {
          page: 'current'
        }).data().reduce(function (a, b) {
          return intVal(a) + intVal(b);
        }, 0); // Update footer

        $(api.column(column).footer()).html('$' + KTUtil.numberString(pageTotal.toFixed(2)) + '<br/> ( $' + KTUtil.numberString(total.toFixed(2)) + ' total)');
      }
    });
  };

  return {
    //main function to initiate the module
    init: function init() {
      _init();
    }
  };
}();

jQuery(document).ready(function () {
  KTDatatablesAdvancedFooterCalllback.init();
});
/******/ })()
;