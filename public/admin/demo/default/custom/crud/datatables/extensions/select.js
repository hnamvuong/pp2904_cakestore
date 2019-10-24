var DatatablesExtensionsKeytable = {
    init: function() {
        var e, f, g, h;
        $("#m_table_1").DataTable({
            responsive: !0,
            select: !0,
            columnDefs: [{
                targets: -1,
                title: "Actions",
                orderable: !1,
                render: function(e, a, t, n) {
                    return '\n                        <span class="dropdown">\n                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">\n                              <i class="la la-ellipsis-h"></i>\n                            </a>\n                            <div class="dropdown-menu dropdown-menu-right">\n                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\n                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\n                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\n                            </div>\n                        </span>\n                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">\n                          <i class="la la-edit"></i>\n                        </a>'
                }
            }, {
                targets: 8,
                render: function(e, a, t, n) {
                    var s = {
                        1: {
                            title: "Pending",
                            class: "m-badge--brand"
                        },
                        2: {
                            title: "Delivered",
                            class: " m-badge--metal"
                        },
                        3: {
                            title: "Canceled",
                            class: " m-badge--primary"
                        },
                        4: {
                            title: "Success",
                            class: " m-badge--success"
                        },
                        5: {
                            title: "Info",
                            class: " m-badge--info"
                        },
                        6: {
                            title: "Danger",
                            class: " m-badge--danger"
                        },
                        7: {
                            title: "Warning",
                            class: " m-badge--warning"
                        }
                    };
                    return void 0 === s[e] ? e : '<span class="m-badge ' + s[e].class + ' m-badge--wide">' + s[e].title + "</span>"
                }
            }, {
                targets: 9,
                render: function(e, a, t, n) {
                    var s = {
                        1: {
                            title: "Online",
                            state: "danger"
                        },
                        2: {
                            title: "Retail",
                            state: "primary"
                        },
                        3: {
                            title: "Direct",
                            state: "accent"
                        }
                    };
                    return void 0 === s[e] ? e : '<span class="m-badge m-badge--' + s[e].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + s[e].state + '">' + s[e].title + "</span>"
                }
            }]
        }), (e = $("#m_table_2").DataTable({
            responsive: !0,
            select: {
                style: "multi",
                selector: "td:first-child .m-checkable"
            },
            columnDefs: [{
                targets: -1,
                title: "Actions",
                orderable: !1,
            }]
        })), (f = $("#m_table_report").DataTable({
            responsive: !0,
            order: [[ 4, 'desc']],
            bAutoWidth: false,
            aoColumns: [
                { "sWidth": "15%" },
                { "sWidth": "20%" },
                { "sWidth": "40%" },
                { "sWidth": "20%" },
                { "sWidth": "5%" }
            ]
        })), (g = $("#m_table_author").DataTable({
            responsive: !0,
            bAutoWidth: false,
            aoColumns: [
                { "sWidth": "15%" },
                { "sWidth": "15%" },
                { "sWidth": "40%" },
                { "sWidth": "10%" },
                { "sWidth": "15%" },
                { "sWidth": "5%" }
            ]
        })), (h = $("#m_table_report_2").DataTable({
            responsive: !0,
            bAutoWidth: false,
            aoColumns: [
                { "sWidth": "50%" },
                { "sWidth": "50%" }
            ]
        }))
    }
};
jQuery(document).ready(function() {
    DatatablesExtensionsKeytable.init()
});
