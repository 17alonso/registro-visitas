// tabla inicio
var tabla = new DataTable('#mitabla', {
    columns: [
        { orderSequence: []},
        { orderSequence: ['asc','desc'] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
        { orderSequence: [] },
    ],
    order: [1, 'desc'],
    info:false,
    columnDefs: [
        {
            target: [0,1,2,6,7,8,9,10,11],
            searchable: false,
        },
        {
            target: [0,2,8],
            visible: false,
        }
    ],
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
        "paginate": {
            "first": "",
            "last": "",
            "next": ">",
            "previous": "<"
        }
    }
});