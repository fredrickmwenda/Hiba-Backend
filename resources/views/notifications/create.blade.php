@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<!-- <div class="card-body"> -->
            
            <div class="section-body">
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <h6 class="card-title mt-3 mx-3">Send Notifications</h6>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="card-body">
                                        <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                            @csrf
                                            <textarea id="selected_list" name="selected_list" style='display:none'></textarea>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Select Users</label>
                                                    <select name='users' id='users' class='form-control' >
                                                        <option value='all'>All</option>
                                                        <option value='selected'>Selected only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Sender Type</label>
                                                    <select name="sender_type" id="type" class="form-control" required>
                                                        <option value="">Set the Sender Type</option>
                                                        <option value="company">Company</option>
                                                        <option value="app">App</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Sender Type</label>
                                                    @if(auth()->user()->hasRole('employee') || auth()->user()->hasRole('company_admin'))
                                                        <input type="hidden" name="sender_type" value="company">
                                                        <input type="hidden" name="company_id" value="{{ auth()->user()->companyUser->company_id }}">
                                                        <p><em>Default: Company (Hidden)</em></p>
                                                    @else
                                                        <select name="sender_type" id="type" class="form-control" required>
                                                            <option value="">Set the Sender Type</option>
                                                            <option value="company">Company</option>
                                                            <option value="app">App</option>
                                                        </select>
 
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div id="companySelect" style="display: none;" class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Select Company</label>
                                                    <select name="company_id" id="company_id" class="form-control">
                                                        <option value="">Select a Company</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                <label class="control-label">Title</label>
                                                <input type="text" name="title" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Message</label>
                                                    <textarea id="message" name="message" required class="form-control" cols="10" row="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input name="include_image" id="include_image"  type="checkbox" > Include image
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <input type="file" name="file" id="file" accept="image/*" style='display:none;' class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row float-right">
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="submit" name="btnadd" class="btn btn-primary submit" value="Submit"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card-body">
                                        <button type='button' id='get_selections' class='btn btn-primary mb-2'>Get Selected Users</button>
                                        <div id="toolbar">
                                            <select name="filter_status" id="filter_status" class="form-control mb-2">
                                                <option value=""> Select User Types to receive notification </option>
                                                <option value="All">All</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->name}}"> {{$role->name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <table  class='table table-striped' id='users_list' >                                              
                                            <thead>
                                                <tr>
                                                    <th>
                                                    <!-- custom-control-label -->
                                                        <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="form-check-input" id="checkbox-all">
                                                        <label for="checkbox-all" class="form-check-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th> Role </th>
                                                </tr>
                                            </thead>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup" class="form-check-input" id="notificationcheckbox{{ $user->id }}">
                                                                <label for="notificationcheckbox{{ $user->id }}" class="form-check-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->phone }}</td>
                                                        <td>            
                                                            @if ($user->roles->isNotEmpty())
                                                                {{ $user->roles->first()->name }}
                                                            @else
                                                                No role
                                                            @endif
                                                        </td>
                                                        <!-- Add more cells for additional columns -->
                                                    </tr>
                                                @endforeach
                                        </table>  
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Notifications <small>View / Update / Delete</small></h4>
                            </div>
                            <div class="card-body">  
                                <div id="toolbar1">
                                    <button class="btn btn-danger" id="delete_multiple_notifications" title="Delete Selected Notifications">
                                        <em class='fa fa-trash'></em>
                                    </button
                          
                                </div> 
                                <table aria-describedby="mydesc" class='table-striped' id='notification_list' 
                                        data-toggle="table" 
                                        data-url=""
                                        data-click-to-select="true" 
                                        data-side-pagination="server" 
                                        data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200, All]" 
                                        data-search="true" data-toolbar="#toolbar1" 
                                        data-show-columns="true" data-show-refresh="true" 
                                        data-fixed-columns="true" data-fixed-number="2" data-fixed-right-number="1"
                                        data-trim-on-search="false" 
                                        data-sort-name="id" data-sort-order="desc" 
                                        data-mobile-responsive="true" data-maintain-selected="true"
                                        data-show-export="true" data-export-types='["csv","excel","pdf"]'
                                        data-export-options='{ "fileName": "notification-list-<?= date('d-m-y') ?>" }'
                                        data-query-params="queryParams">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-field="state" data-checkbox="true"></th>
                                            <th scope="col" data-field="id" data-sortable="true">ID</th>
                                            <th scope="col" data-field="title" data-sortable="true">Title</th>
                                            <th scope="col" data-field="message" data-sortable="true">Message</th>
                                            <th scope="col" data-field="image" data-sortable="false">Image</th>
                                            <th scope="col" data-field="users" data-sortable="true" data-visible="false" >Users</th>
                                            <th scope="col" data-field="type" data-sortable="true">Type</th>
                                            <th scope="col" data-field="type_id" data-sortable="true">Main Category ID</th>
                                            <th scope="col" data-field="date_sent" data-sortable="true">Date Sent</th>
                                            <th scope="col" data-field="operate" data-sortable="false" data-events="actionEvents">Operate</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
									
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- <link href="{{ asset('assets/backend/admin/assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> -->
  <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>



<script type="text/javascript">
    $(document).ready(function () {
        var $table = $('#users_list');
        var dataTable;

        // Initialize the DataTable without data
        dataTable = $table.DataTable({
            select: {
                style: 'multi'
            },
            columns: [
                {
                    data: null,
                    render: function (data) {
                        return '<div class="custom-checkbox custom-control">' +
                            '<input type="checkbox" data-checkboxes="mygroup" class="form-check-input" id="notificationcheckbox' + data.id + '">' +
                            '<label for="notificationcheckbox' + data.id + '" class="form-check-label"></label>' +
                            '</div>';
                    }
                },
                { data: "id" },
                { data: "name" },
                { data: "email" },
                { data: "phone" },
                { data: "roles" } // Assuming there's a 'roles' property
                // Add more columns as needed
            ]
        });

        // Fetch data through AJAX and populate DataTable


        // Handle "Select All" checkbox in header
        $('#checkbox-all').on('change', function () {
            var isChecked = $(this).prop('checked');
            dataTable.rows({ search: 'applied' }).every(function () {
                var rowData = this.data();
                var checkbox = $(rowData[0]).find('.form-check-input');
                checkbox.prop('checked', isChecked);
                dataTable.row(this).invalidate();
            });
        });

  

        // Handle filter status change
        $('#filter_status').on('change', function () {
            var role = $(this).val();

            if (role === 'All') {
                // Show all rows
                // dataTable.clear().destroy();
                // dataTable = $table.DataTable({
                //     select: {
                //         style: 'multi'
                //     },
                //     columns: [
                //         {
                //             data: null,
                //             render: function (data) {
                //                 return '<div class="custom-checkbox custom-control">' +
                //                     '<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-' + data.id + '">' +
                //                     '<label for="checkbox-' + data.id + '" class="custom-control-label">&nbsp;</label>' +
                //                     '</div>';
                //             }
                //         },
                //         { data: "id" },
                //         { data: "name" },
                //         { data: "email" },
                //         { data: "phone" },
                //         { data: "roles" } // Assuming there's a 'roles' property
                //         // Add more columns as needed
                //     ]
                // });
                dataTable.ajax.url("{{ route('user.index') }}").load();
            } else {
                // Filter rows by role and reload
                $.ajax({
                    url: "{{ route('user.index') }}?role=" + role,
                    method: "GET",
                    dataType: "json",
                    success: function (data) {
                        // Clear the table body
                        $table.find('tbody').empty();

                        // Populate table body with filtered data
                        $.each(data, function (index, user) {
                            $.each(user, function (index, userl) {
                                $table.find('tbody').append('<tr>' +
                                    '<td>' +
                                    '<div class="custom-checkbox custom-control">' +
                                    '<input type="checkbox" data-checkboxes="mygroup" class="form-check-input" id="notificationcheckbox' + userl.id + '">' +
                                    '<label for="notificationcheckbox' + userl.id + '" class="form-check-label"></label>' +
                                    '</div>' +
                                    '</td>' +
                                    '<td>' + userl.id + '</td>' +
                                    '<td>' + userl.name + '</td>' +
                                    '<td>' + userl.email + '</td>' +
                                    '<td>' + userl.phone + '</td>' +
                                    '<td>' + userl.roles + '</td>' +
                                    // Add more cells for additional columns
                                    '</tr>'
                                );
                            });

                        });
                    }
                });

            }
        });

        $('#type').change(function() {
            if ($(this).val() === 'company') {
                $('#companySelect').show();
            } else {
                $('#companySelect').hide();
            }
        });
    });
</script>


<script type="text/javascript">

    $("#include_image").change(function () {
        if (this.checked) {
            $('#file').show('fast');
        } else {
            $('#file').val('');
            $('#file').hide('fast');
        }
    });
</script>

<!-- <script type="text/javascript">
    function queryParams_1(p) {
        return {
            "status": $('#filter_status').val(),
            sort: p.sort,
            order: p.order,
            offset: p.offset,
            limit: p.limit,
            search: p.search
        };
    }
    function queryParams(p) {
        return {
            sort: p.sort,
            order: p.order,
            offset: p.offset,
            limit: p.limit,
            search: p.search
        };
    }
</script> -->

        <!-- <script type="text/javascript">
            $table = $('#users_list');
            var checkedID= [];
            window.inputEvent = {
                    'change :checkbox': function (e, value, row, index) {
                        row.state = $(e.target).prop('checked')
                        if($(e.target).is(":checked")){
                            checkedID.push(row.fcm_id);
                        }else{
                            checkedID = checkedID.filter(function(data){
                                return data !== row.fcm_id;
                            });
                        }
                    }
                }
            $(function () {
                $('#get_selections').click(function () {
                    selected = $table.bootstrapTable('getSelections');
                    var arr = Object.values(selected);
                    var i;
                    var final_selection = [];
                    for (i = 0; i < arr.length; ++i) {
                        final_selection.push(arr[i]['fcm_id']);
                    }
                    let mArray = [...final_selection, ...checkedID];
                    let mergedArr = [...new Set(mArray)]
                    $('textarea#selected_list').val(final_selection);
                });
                
                
                $('#users_list').on('load-success.bs.table', function (e,data,status) {
                    $.each(checkedID,function(element,ID){
                        let row = data.rows.find(function(row){
                            return ID==row.fcm_id;
                        });
                        let index = data.rows.indexOf(row);
                        if(index > -1){
                            row.state = true;
                              $('#users_list').bootstrapTable('updateRow', {
                                index: index,
                                row: row
                            })
                        }
                    });
                })
            });
        </script> -->



        <!-- <script type="text/javascript">
            window.actionEvents = {
            };
        </script> -->
        <!-- if the ids arent set check on the filter_status if its all tell the user using toastr that they have made any checkbox selection or filtered data -->
<script>
    $('#get_selections').click(function (e) {

    e.preventDefault()

    var ids = [];

    $('input[type="checkbox"][class="form-check-input"]:checked').each(function() {
        ids.push($(this).attr('id').replace('notificationcheckbox', ''));
    });
    console.log('ids');
    console.log(ids);

    var filterStatus = $('#filter_status').val();
    console.log(filterStatus);

    if (!ids.length && filterStatus === '' || filterStatus === 'All') {
        toastr.warning('No checkbox selection or filter applied.');
    }
    });

   

    

</script>


@endpush