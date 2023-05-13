let tableName = '#usersTable';

$(document).ready(function () {
    let tbl = $(tableName).DataTable({
        processing: true,
        serverSide: true,
        'info': false,
        'pageLength': 10,
        'order': [[1, 'desc']],
        ajax: {
            url: recordsURL,
        },
        columnDefs: [
            {
                'targets': [0],
                'width': '20%',
            },
            {
                'targets': [1],
                'className': 'text-start',
            },
            {
                'targets': [2],
                'className': 'text-start',
            },
            {
                'targets': [3],
                'orderable': false,
                'className': 'text-start',
                'width': '10%',
            },
        ],
        columns: [
            {
                data: function (row) {
                    return row.name;
                },
                name: 'name',
            },
            {
                data: function (row) {
                    return row.email;
                },
                name: 'email',
            },
            {
                data: function (row) {
                    return row.created_at;
                },
                name: 'created_at',
            },
            {
                data: function (row) {
                    let data = [
                        {
                            'id': row.id,
                            'editUrl': row.id,
                        },
                    ];

                    return prepareTemplateRender('#actionsTemplates',
                        data);
                },
                name: 'id',
            },
        ],
    });
    handleSearchDatatable(tbl);
});
