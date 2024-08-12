var tabla = new DataTable('#mitabla', {
    columns: [
        { orderSequence: [] },
        { orderSequence: ['asc', 'desc'] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },

    ],
    order: [8, 'asc'],
    info: false,
    columnDefs: [
        {
            target: [0, 1, 2, 6, 7, 8, 9],
            searchable: false,
        },
        {
            target: [0, 2],
            visible: false
        }
    ],
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
        "paginate": {
            "first": "<<",
            "last": ">>",
            "next": ">",
            "previous": "<"
        }
    },
    layout: {
        topStart: {
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: [1,3,4,5,6,7,8,9],
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    exportOptions: {
                        columns: [1,3,4,5,6,7,8,9]
                    }
                },
            ]
        }
    },
});