/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*******************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/datatables/extensions/fixedheader.js ***!
  \*******************************************************************************/


var KTDatatablesExtensionsFixedheader = function () {
  var initTable1 = function initTable1() {
    var table = $('#kt_table_1'); // begin first table

    table.DataTable({
      responsive: true,
      fixedHeader: {
        header: true,
        headerOffset: $('#kt_header').height()
      },
      paging: false,
      columnDefs: [{
        targets: -1,
        title: 'Actions',
        orderable: false,
        render: function render(data, type, full, meta) {
          return "\n                        <span class=\"dropdown\">\n                            <a href=\"#\" class=\"btn btn-sm btn-clean btn-icon btn-icon-md\" data-toggle=\"dropdown\" aria-expanded=\"true\">\n                              <i class=\"la la-ellipsis-h\"></i>\n                            </a>\n                            <div class=\"dropdown-menu dropdown-menu-right\">\n                                <a class=\"dropdown-item\" href=\"#\"><i class=\"la la-edit\"></i> Edit Details</a>\n                                <a class=\"dropdown-item\" href=\"#\"><i class=\"la la-leaf\"></i> Update Status</a>\n                                <a class=\"dropdown-item\" href=\"#\"><i class=\"la la-print\"></i> Generate Report</a>\n                            </div>\n                        </span>\n                        <a href=\"#\" class=\"btn btn-sm btn-clean btn-icon btn-icon-md\" title=\"View\">\n                          <i class=\"la la-edit\"></i>\n                        </a>";
        }
      }, {
        width: '75px',
        targets: 8,
        render: function render(data, type, full, meta) {
          var status = {
            1: {
              'title': 'Pending',
              'class': 'label-primary'
            },
            2: {
              'title': 'Delivered',
              'class': ' label-danger'
            },
            3: {
              'title': 'Canceled',
              'class': ' label-primary'
            },
            4: {
              'title': 'Success',
              'class': ' label-success'
            },
            5: {
              'title': 'Info',
              'class': ' label-info'
            },
            6: {
              'title': 'Danger',
              'class': ' label-danger'
            },
            7: {
              'title': 'Warning',
              'class': ' label-warning'
            }
          };

          if (typeof status[data] === 'undefined') {
            return data;
          }

          return '<span class="label ' + status[data]["class"] + ' label-inline label-pill">' + status[data].title + '</span>';
        }
      }, {
        width: '75px',
        targets: 9,
        render: function render(data, type, full, meta) {
          var status = {
            1: {
              'title': 'Online',
              'state': 'danger'
            },
            2: {
              'title': 'Retail',
              'state': 'primary'
            },
            3: {
              'title': 'Direct',
              'state': 'success'
            }
          };

          if (typeof status[data] === 'undefined') {
            return data;
          }

          return '<span class="label label-' + status[data].state + ' label-dot"></span>&nbsp;' + '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
        }
      }]
    });
  };

  return {
    //main function to initiate the module
    init: function init() {
      initTable1();
    }
  };
}();

jQuery(document).ready(function () {
  KTDatatablesExtensionsFixedheader.init();
});
/******/ })()
;