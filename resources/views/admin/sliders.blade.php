@extends('admin.layout.master')

@section('content')
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">
                <div class="d-flex mb-3 justify-content-end"> <button type="button"
                        class="btn btn-success float-start addButton mx-1" data-bs-toggle="modal"
                        data-bs-target="#createModal" model-title="Add Banner"
                        model-route="https://khidmty.com/ar/admin/sliders/create" title="Add">
                        <i class="fa fa-plus-circle"></i> Add Banner
                    </button> </div>
                <div id="dataTableObject_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    {{-- <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTableObject_length"><label>Show <select
                                        name="dataTableObject_length" aria-controls="dataTableObject"
                                        class="form-select form-select-sm">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="-1">All</option>
                                    </select> Row</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTableObject_filter" class="dataTables_filter"><label>Search:<input
                                        type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="dataTableObject"></label></div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dataTableObject" class="table display dataTable table-hover no-footer dtr-inline"
                                style="width: 100%;" aria-describedby="dataTableObject_info">
                                <thead>
                                    <tr>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 27px;"
                                            aria-label="#">#</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 346px;"
                                            aria-label="title">Title</th>
                                        <th class="sorting_disabled sorting_desc" rowspan="1" colspan="1"
                                            style="width: 93px;" aria-label="type">Type</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 139px;"
                                            aria-label="place">Place</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 121px;"
                                            aria-label="image">Image</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136px;"
                                            aria-label="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- <tr class="odd">
                                        <td class="dtr-control">1</td>
                                        <td>استكشف قطع غيار وإكسسواراتنا</td>
                                        <td class="sorting_1">الكل </td>
                                        <td>رئيسي</td>
                                        <td><img src="https://khidmty.com/storage/images/admins/sliders/nJSL2UMSd41701001096.jpg"
                                                alt="Girl in a jacket" width="70 px"></td>
                                        <td><button type="button" class="btn btn-primary editButton"
                                                data-bs-toggle="modal" data-bs-target="#createModal"
                                                model-route="https://khidmty.com/ar/admin/sliders/1/edit"
                                                model-title=" ">
                                                <i class="fa fa-pencil"></i>
                                            </button> <button type="button" class="btn btn-danger deleteButton"
                                                delete-route="https://khidmty.com/ar/admin/sliders/1">
                                                <i class="fa fa-trash-o"></i>
                                            </button></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div id="dataTableObject_processing" class="dataTables_processing card"
                                style="display: none;">Loading<div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTableObject_info" role="status" aria-live="polite">
                                Show 1 to 6 from 6</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTableObject_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="dataTableObject_previous"><a href="#" aria-controls="dataTableObject"
                                            data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="dataTableObject" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="dataTableObject_next"><a
                                            href="#" aria-controls="dataTableObject" data-dt-idx="2" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLgLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">أضف بنر</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom_scroll">
                <form class="row g-3 from-submit-global has-validation-callback" method="post"
                    action="{{url('admin/sliders')}}" enctype="multipart/form-data" id="bannerform">

                    <div class="col-6">
                        <label for="TextInput" class="form-label">العنوان</label>
                        <input type="text" name="title" class="form-control" data-validation="required">
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">الوصف </label>
                        <textarea class="form-control" rows="2" name="description"></textarea>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">اللينك </label>
                        <input type="text" value="#" name="link" class="form-control" data-validation="required">
                    </div>
                    <div class="col-6">
                        <label for="TextInput" class="form-label">النوع </label>
                        <select name="type" class="form-control" data-validation="required">
                            <option value="">اختر </option>
                            <option value="app">التطبيق</option>
                            <option value="web">الويب</option>
                            <option value="all">الكل </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">المكان </label>
                        <select name="position" class="form-control" data-validation="required">
                            <option value="">اختر </option>
                            <option value="main">رئيسي</option>
                            <option value="top_right">اعلي اليمين</option>
                            <option value="bottom_right">أسفل اليمين </option>
                            <option value="left">اليسار </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="TextInput" class="form-label">الصوره </label>
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
                        <button class="btn btn-primary" type="submit">حفظ</button>
                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">إغلاق</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            let columns = [
                {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {"data": "title", orderable: false, searchable: false},
                {"data": "type", orderable: false, searchable: false},
                {"data": "position", orderable: false, searchable: false},
                {"data": "image", orderable: false, searchable: false},
                {"data": "actions", orderable: false, searchable: false}
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

        function handleSuccessResponce(result, code) {
            if (code == 200) {
                successToster('Success', result.message);
            } else if (code == 201) {
                successToster(' Success', result.message);
                location.reload();
                //location.href = result.data.url;
            } else if (code == 401) {
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
            if ($('#dataTableObject').length > 0 ) {
                $('#dataTableObject').DataTable().ajax.reload();
            }
        }

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
                success: function (result, textStatus, jqXHR) {
                    console.log("Success! Status Code:", jqXHR.status);
                    handleSuccessResponce(result, jqXHR.status);
                    reloadDataTable();
                    submitButton.html(buttonText)
                    if(modalResult.is(":visible")) {
                        modalResult.modal('toggle');
                    }
                    // modalResult.modal('toggle');
                    console.log(modalResult.is(':visible'));
                },
                error: function (errorObj, errorText, errorThrown) {
                    console.log(500)
                    console.log(errorObj)
                    handleErrorResponce(errorObj);
                }
            });

        });

    </script>

@endpush