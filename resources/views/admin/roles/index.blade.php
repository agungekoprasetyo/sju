@extends('layouts.backend')

@section('custom-css')
<!-- DataTables -->
<link href="{{ asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /><!-- Responsive datatable -->
<link href="{{ asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('title-page')
Roles
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4 class="card-title mt-0">Data Roles</h4>
                    <p class="card-text">Write your description here.</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="act-button float-right">
                        <button type="button" onclick="add()" class="btn btn-primary waves-effect waves-light">
                            <i class="bx bx-plus font-size-16 align-middle mr-2"></i> Add Data
                        </button>
                    </div>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="tabel" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th width="5%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="cb-head" class="custom-control-input">
                                        <label class="custom-control-label" for="cb-head">&nbsp;</label>
                                    </div>
                                </th>
                                <th width="5%">#</th>
                                <th>Name</th>
                                <th class="text-center" width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade modal-center" tabindex="-1" role="dialog" id="frmbox" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-image:url('/assets/images/bgtf.png');background-size:cover">
                <h5 class="modal-title mt-0 text-light"><a id="form-act-name"></a> Roles</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group row mb-4">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9"><input type="text" class="form-control" name="name" id="name"><small id="name_message" class="form-text text-danger text-error"></small>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md float-right">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- End Modal --}}
@endsection

@section('custom-js')
<!-- Required datatable js -->
<script src="{{ asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script><!-- Responsive -->
<script src="{{ asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/assets/js/defaultdatatables.js')}}"></script>
<script>
    var form_state = "add";
    var dTable;
    $(function() {
        dTable = $('#tabel').DataTable({
            ajax: {
                url: '{{ url("admin/roles/dt") }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: 'text-right'
                }, {
                    data: 'name',
                    name: 'name',
                    orderable: true
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                }
            ],
            order: [
                ['0', 'desc']
            ],
            columnDefs: [{
                    targets: '_all',
                    visible: true
                },
                {
                    targets: 0,
                    class: 'text-nowrap',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return "<div class='custom-control custom-checkbox'><input type='checkbox' name='multiple' class='custom-control-input cb-child' id='" + data + "-child' value='" + data + "'><label class='custom-control-label' for='" + data + "-child'>&nbsp;</label></div>";
                    }
                }
            ],
        });
        $('.extra_btn').append('<button class="btn btn-sm btn-danger" onclick="deletebulk()"><i class="bx bx-trash"></i> Delete Selected</button>');
    });

    function add() {
        resetform("#frm");
        $("#form-act-name").html("Add Data");
        form_state = "insert";
        $('#frmbox').modal({
            keyboard: false,
            backdrop: 'static'
        });
    }

    $("#frm").submit(function(e) {
        e.preventDefault();
        $("#frmbox").modal('hide');
        var formData = new FormData($('#frm')[0]);
        $.ajax({
            url: '{{ url("admin/roles") }}' + '/' + form_state,
            type: 'post',
            data: formData,
            contentType: false, //for upload image
            processData: false, //for upload image
            timeout: 300000, // sets timeout to 3 seconds
            dataType: 'json',
            success: function(e) {
                if (e.status == 'ok;') {
                    toastr.success('Success!');
                    $("#frmbox").trigger("reset");
                    dTable.draw();
                } else {
                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Please check your inputs',
                        onClose: () => {
                            console.log(e.errors);
                            $.each(e.errors, function(i, item) {
                                $("#" + i + "_message").html(item);
                                $("input#" + i).addClass("border-danger");
                            });

                            $("#frmbox").modal('show');
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: "Something Wrong, Problem Code " + xhr.status + " Please contact developer",
                    onClose: () => {
                        $("#frmbox").modal('show');
                    }
                });
                $("#frmbox").modal('show');
            }

        });
        return false;
    });


    function edit(id) {
        resetform("#frm");
        form_state = "update";
        $.ajax({
            url: '{{ url("admin/roles/edit") }}',
            type: 'post',
            dataType: 'json',
            data: ({
                id: id
            }),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(e) {
                $("#form-act-name").html("Edit Data");
                $('#id').val(id);
                $.each(e, function(key, value) {
                    if ($('#' + key).hasClass("select2")) {
                        $('#' + key).val(value).trigger('change');
                    } else if ($('input[type=radio]').hasClass(key)) {
                        if (value != "") {
                            $("input[name='" + key + "'][value='" + value + "']").prop('checked', true);
                            $.uniform.update();
                        }
                    } else if ($('input[type=checkbox]').hasClass(key)) {
                        if (value != null) {
                            var temp = value.split('; ');
                            for (var i = 0; i < temp.length; i++) {
                                $("input[name='" + key + "[]'][value='" + temp[i] + "']").prop('checked', true);
                            }
                            $.uniform.update();
                        }
                    } else $('#' + key).val(value);
                });
                $('#frmbox').modal({
                    keyboard: false,
                    backdrop: 'static'
                });
            }
        });
    }

    function del(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '{{ url("admin/roles/delete") }}',
                    type: 'delete',
                    dataType: 'json',
                    data: ({
                        id: id
                    }),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(e) {
                        if (e.status == 'ok;') {
                            toastr.options.onShown = function() {
                                dTable.draw();
                            }
                            toastr.success('Success Deleting Data!');
                        } else {
                            alert(e.text);
                        }
                    }
                });
            }
        });

    }

    $("#cb-head").on('click', function() {
        var isChecked = $('#cb-head').prop('checked');
        $('.cb-child').prop('checked', isChecked);
    });

    $("#tabel tbody").on('click', '.cb-child', function() {
        if ($(this).prop('checked') != true) {
            $("#cb-head").prop('checked', false);
        }
    });

    function deletebulk() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete all checked!'
        }).then((result) => {
            if (result.value) {
                var datamultiple = [];
                $("input:checkbox[name=multiple]:checked").each(function() {
                    datamultiple.push($(this).val());
                });
                $.ajax({
                    url: '{{ url("admin/roles/delete") }}',
                    type: 'delete',
                    dataType: 'json',
                    data: ({
                        id: datamultiple
                    }),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(e) {
                        if (e.status == 'ok;') {
                            toastr.options.onShown = function() {
                                dTable.draw();
                            }
                            toastr.success('Success Deleting Data!');
                        } else {
                            alert(e.text);
                        }
                    }
                });
            }
        });

    }
</script>
@endsection