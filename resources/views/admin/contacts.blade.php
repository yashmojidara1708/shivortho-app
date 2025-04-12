@extends('admin.layouts.index')
@section('admin-title', 'Contacts')
@section('page-title', 'List Of Contacts')
@section('admin-content')

    <style>
        .dataTables_filter {
            margin-bottom: 12px;
        }
    </style>

    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4">Contacts</h4> --}}
        <div class="card p-2">
            <div class="row gy-3">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="contactsTable" class="mb-3">
                                <thead class="table-light">
                                    <tr class="text-nowrap">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Topic</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        @section('admin-js')
            <script>
                contactsList()

                function contactsList() {
                    $("#contactsTable").DataTable({
                        processing: true,
                        bDestroy: true,
                        bAutoWidth: false,
                        ajax: {
                            type: "GET",
                            url: BASE_URL + '/admin/data/contacts',
                        },
                        columns: [{
                                data: "id",
                                name: "id"
                            },
                            {
                                data: "name",
                                name: "name"
                            },
                            {
                                data: "email",
                                name: "email"
                            },
                            {
                                data: "topic",
                                name: "topic"
                            },
                            {
                                data: "phone_number",
                                name: "phone_number"
                            },
                            {
                                data: "message",
                                name: "message",
                            }
                        ],
                        columnDefs: [{
                            targets: [],
                            orderable: false,
                        }, ],

                    });
                }
            </script>
        @endsection
