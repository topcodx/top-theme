'use strict';

let jsrender = require('jsrender');

window.handleSearchDatatable = (tbl) => {
    const filterSearch = document.querySelector('[data-datatable-filter="search"]');
    filterSearch.addEventListener('keyup', function (e) {
        tbl.search(e.target.value).draw();
    });
    filterSearch.addEventListener('search', function (e) {
        tbl.search(e.target.value).draw();
    });
}

$.extend($.fn.dataTable.defaults, {
    'paging': true,
    'info': true,
    'ordering': true,
    'autoWidth': false,
    'dom': '<"top"i>rt<"bottom"flp><"clear">',
    'language': {
        'search': '',
        'sSearch': 'Search',
        'lengthMenu': '_MENU_'
    },
    "preDrawCallback": function () {
        customSearch()
    }
});

/* Default class modification */
$.extend( $.fn.dataTable.ext.classes, {
    sLengthSelect: "form-select",
} );

function customSearch() {
    $('.dataTables_filter input').addClass("form-control");
    $('.dataTables_filter input').attr("placeholder", "Search");
}

window.prepareTemplateRender = function (templateSelector, data) {
    let template = jsrender.templates(templateSelector);
    return template.render(data);
};
