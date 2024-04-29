@extends('admin.layout.master')

@section('content')
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 mb-3 align-items-center">
            <div class="col">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a class="text-secondary" href="{{route('admin.dashboard')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                </ol>
            </div>
        </div>
    </div>

    @if (Session::has('error'))
    <div class="alert alert-success alert-dismissible fade show pt-2" role="alert">
        <strong>{{session::get('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>


<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">
                <div class="d-flex mb-3 justify-content-end"> <button type="button"
                        class="btn btn-success float-start addButton mx-1" data-bs-toggle="modal"
                        data-bs-target="#createModal" model-title="Add Banner"
                        model-route="{{route('sliders.create')}}" title="Add">
                        <i class="fa fa-plus-circle"></i> Add Banner
                    </button>
                </div>
                {{-- <div id="dataTableObject" class="dataTables dt-bootstrap5 no-footer"> --}}
                    {{ $dataTable->table() }}
                {{-- </div> --}}
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLgLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">Add Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom_scroll">
                <form class="row g-3 from-submit-global has-validation-callback" method="post"
                    action="{{url('admin/sliders')}}" enctype="multipart/form-data" id="bannerform">

                    <div class="col-6">
                        <label for="TextInput" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" data-validation="required">
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">Description </label>
                        <textarea class="form-control" rows="2" name="description"></textarea>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">Link </label>
                        <input type="text" value="#" name="link" class="form-control" data-validation="required">
                    </div>
                    <div class="col-6">
                        <label for="TextInput" class="form-label">Type </label>
                        <select name="type" class="form-control" data-validation="required">
                            <option value="">Choose </option>
                            <option value="app">App</option>
                            <option value="web">Web</option>
                            <option value="all">All </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">Position </label>
                        <select name="position" class="form-control" data-validation="required">
                            <option value="">Choose </option>
                            <option value="main">Main</option>
                            <option value="top_right">Top Right</option>
                            <option value="bottom_right">Bottom Right </option>
                            <option value="left">Left </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">Image </label>
                        <div class="dropify-wrapper">
                            <div class="dropify-message"><span class="file-icon">
                                    <p>Drag and drop a file here or click</p>
                                </span>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div><input type="file" data-default-file="" name="image" id="image" class="dropify"><button
                                type="button" class="dropify-clear">Remove</button>
                            <div class="dropify-preview"><span class="dropify-render"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span
                                                class="dropify-filename-inner"></span></p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@push('js')

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
        $(document).ready(function () {
            let columns = [
                {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {"data": "title", orderable: false, searchable: false},
                {"data": "type", orderable: false, searchable: false},
                {"data": "position", orderable: false, searchable: false},
                {"data": "image", orderable: false, searchable: false},
                {"data": "action", orderable: false, searchable: false}
            ];
            showDataTable("{{url('admin/sliders/getAll')}}", columns);
        });

        function showDataTable(url, columns) {
            //console.log("showDataTable")
           var myTable = $("#dataTableObject").DataTable({
                // dom: 'Bfrtip',
                responsive: 1,
                // "lengthChange": false,
                "ordering": true,
                "searching": true,
                'iDisplayLength': 10,
                "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
                "processing": true,
                "serverSide": true,
                "sort": false,
                "ajax": {
                    "url": ""+url,
                        'type': "GET",
                        "data":function (d) {
                        d.filter = $('.filter_search').val();
                    }
                },

                "columns": columns,
                order: [
                    [2, "desc"]
                ]
            })

            $(".filter_search").change(function(){
                myTable.draw();
            });
        }

        function handleErrorResponce(errorObj) {
            console.log('handleErrorResponce');
            console.log(errorObj.status);
            if (errorObj.status == 422) {
                let errorsObj = $.parseJSON(errorObj.responseText);
                let listObject = errorsObj.data;
                let testArr = [];
                $.each(listObject, function (errorKey, errorArr) {
                    $.each(errorArr, function (key, value) {
                        testArr.push(value);
                    });
                });
                validToster('Erorr', testArr)
            } else {
                errorToster('Erorr', "you don't have the permison");
            }
        }

        function handleSuccessResponce(result) {
            if (result.code == 200) {
                successToster('Success', result.message);
            } else if (result.code == 201) {
                successToster(' Success', result.message);
                location.reload();
                //location.href = result.data.url;
            } else if (result.code == 401) {
                warningToster('error', result.message)
            } else {
                warningToster('error', result.message)
            }
        }

        function loadOptionsOnAjax() {
            if ($('.select2').length > 0) {
                $('.select2').select2({
                    dropdownParent: $('#createModal .modal-body'),
                });
            }
            $.validate({
                ignore: 'input[type=hidden]',
                modules: 'date, security',
                lang: 'ar',
                validateOnEvent: true
            });
            if ($('.dropify').length > 0) {
                $('.dropify').dropify();
            }
            if ($('#json_array').length > 0) {
                $('#json_array').multifield();
            }
            if ($('#json_array2').length > 0) {
                $('#json_array2').multifield();
            }
        }

        function reloadDataTable() {
            if ($('#sliders-table').length > 0 ) {
                $('#sliders-table').DataTable().ajax.reload();
            }
        }

        $(document).on('click', '.addButton', function (e) {
            e.preventDefault()
            let buttonObj = $(this);
            let modelRoute = buttonObj.attr("model-route");
            let modelTitle = buttonObj.attr("model-title");
            let modalResult = $("#createModal");
            $(".modal-body", modalResult).html();
            $.ajax({
                url: modelRoute,
                type: 'GET',
                beforeSend: function () {
                },
                complete: function () {
                },
                success: function (result) {
                    $("#exampleModalLgLabel").text(modelTitle);
                    $(".modal-body", modalResult).html(result.data.html)
                    loadOptionsOnAjax();
                },
                error: function (errorObj, errorText, errorThrown) {
                    handleErrorResponce(errorObj);
                }
            });
        });

        $(document).on('click','.editButton',function (e) {
            e.preventDefault()
            let buttonObj = $(this);
            let modelRoute = buttonObj.attr("model-route");
            let modelTitle = buttonObj.attr("model-title");
            let modalResult = $("#createModal");
            $(".modal-body", modalResult).html();
            $.ajax({
                url: modelRoute,
                type: 'GET',
                success: function (result) {
                    console.log(result);
                    $("#exampleModalLgLabel").text(modelTitle);
                    $(".modal-body", modalResult).html(result.data.html)
                    loadOptionsOnAjax();
                },
                error: function (errorObj, errorText, errorThrown) {
                    handleErrorResponce(errorObj);
                }
            });
        });

        $(document).on('click', '.deleteButton', function (e) {
            e.preventDefault()
            let buttonObj = $(this);
            let deleteRoute = buttonObj.attr("delete-route");
            swal({
                title: "Are you sure to complete this procedure?",
                text: "Once deleted, you will not be able to recover this Item!",
                icon: "warning",
                showCancelButton: true,
                buttons: ["Cancel", "Delete"],
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                     $.ajax({
                        url: deleteRoute,
                        type: 'DELETE',
                        beforeSend: function () {
                        },
                        complete: function () {
                        },
                        success: function (data) {
                            swal("Poof! Your Item has been deleted!", {
                                icon: "success",
                            });
                            reloadDataTable();
                        },
                        error: function (errorObj, errorText, errorThrown) {
                            handleErrorResponce(errorObj);
                        }
                    });

                }
            });
        });

        $(document).on('submit', '.from-submit-global', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = $(this).attr('action');
            let submitButton = $(e.originalEvent.submitter);
            let buttonText = submitButton.text();
            let modalResult = $("#createModal");
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ' + buttonText)
                },
                complete: function () {
                },
                success: function (result) {
                    handleSuccessResponce(result);
                    reloadDataTable();
                    submitButton.html(buttonText)
                    if(modalResult.is(":visible")) {
                        modalResult.modal('toggle');
                    }
                },
                error: function (errorObj, errorText, errorThrown) {
                    console.log(500)
                    console.log(errorObj)
                    handleErrorResponce(errorObj);
                }
            });

        });

        $(document).on('submit', '.from-submit-update-global', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = $(this).attr('action');
            let submitButton = $(e.originalEvent.submitter);
            let buttonText = submitButton.text();
            let modalResult = $("#createModal");
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ' + buttonText)
                },
                complete: function () {
                },
                success: function (result) {
                    handleSuccessResponce(result);
                    reloadDataTable();
                    submitButton.html(buttonText)
                    if(modalResult.is(":visible")) {
                        modalResult.modal('toggle');
                    }
                },
                error: function (errorObj, errorText, errorThrown) {
                    handleErrorResponce(errorObj);
                }
            });

        });


        $(document).on('click', '.remove-tr', function (e) {
            e.preventDefault()
            let obj = $(this)
            let totalTr = $(".remove-tr").length;
            if (totalTr == 1) {
                return false;
            }
            let parentTr = obj.closest("tr");
            parentTr.remove();
        });

        $(document).ajaxComplete(function () {
            $(".trim_items").each(function () {
                var text = $(this).text();
                if (text.length > 20) {
                    var truncatedText =
                        $.trim(text).substring(0, 20).split(" ").slice(0, -1).join(" ") + ".";
                    var readMoreLink = '...';
                    $(this).text(truncatedText).append(readMoreLink);
                }
            });
        });
    </script>

@endpush