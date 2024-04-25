<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <title>Dashboard</title>

    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/cssbundle/daterangepicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/luno-style.css')}}">


    <link rel="stylesheet" href="{{asset('assets/cssbundle/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/toster/css/jquery.toast.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/luno-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/cssbundle/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/cssbundle/dataTables.min.css')}}">


    @stack('style')


</head>

<body class="layout-1" data-luno="theme-blue">

    @include('admin.layout.sideBar')

    <div class="wrapper">

        <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <nav class="navbar">

                    <div class="d-flex">
                        <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
                            <span class="hamburger-icon">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </span>
                        </button>
                        <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
                            <span class="hamburger-icon">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </span>
                        </button>
                        <a href="{{route('admin.dashboard')}}"
                            class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
                            <img src="{{asset('assets/img/logo.svg')}}" alt="Khedmaty Logo" style="height: 30px;">
                        </a>
                    </div>

                    <div class="header-left flex-grow-1 d-none d-md-block">
                        <div class="main-search px-3 flex-fill">
                            <input class="form-control" type="text" placeholder="Enter your search key word">
                        </div>
                    </div>

                    <ul class="header-right justify-content-end d-flex align-items-center mb-0">

                        <li class="d-none d-xl-inline-block">
                            <a class="nav-link fullscreen" href="javascript:void(0);"
                                onclick="toggleFullScreen(documentElement)">
                                <svg viewBox="0 0 16 16" width="18px" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.8279 10.172C5.73414 10.0783 5.60698 10.0256 5.4744 10.0256C5.34182 10.0256 5.21467 10.0783 5.1209 10.172L1.0249 14.268V11.5C1.0249 11.3674 0.972224 11.2402 0.878456 11.1464C0.784688 11.0527 0.657511 11 0.524902 11C0.392294 11 0.265117 11.0527 0.171349 11.1464C0.0775808 11.2402 0.0249023 11.3674 0.0249023 11.5V15.475C0.0249023 15.6076 0.0775808 15.7348 0.171349 15.8285C0.265117 15.9223 0.392294 15.975 0.524902 15.975H4.4999C4.63251 15.975 4.75969 15.9223 4.85346 15.8285C4.94722 15.7348 4.9999 15.6076 4.9999 15.475C4.9999 15.3424 4.94722 15.2152 4.85346 15.1214C4.75969 15.0277 4.63251 14.975 4.4999 14.975H1.7319L5.8279 10.879C5.92164 10.7852 5.9743 10.6581 5.9743 10.5255C5.9743 10.3929 5.92164 10.2658 5.8279 10.172ZM10.1719 10.172C10.2657 10.0783 10.3928 10.0256 10.5254 10.0256C10.658 10.0256 10.7851 10.0783 10.8789 10.172L14.9749 14.268V11.5C14.9749 11.3674 15.0276 11.2402 15.1213 11.1464C15.2151 11.0527 15.3423 11 15.4749 11C15.6075 11 15.7347 11.0527 15.8285 11.1464C15.9222 11.2402 15.9749 11.3674 15.9749 11.5V15.475C15.9749 15.6076 15.9222 15.7348 15.8285 15.8285C15.7347 15.9223 15.6075 15.975 15.4749 15.975H11.4999C11.3673 15.975 11.2401 15.9223 11.1463 15.8285C11.0526 15.7348 10.9999 15.6076 10.9999 15.475C10.9999 15.3424 11.0526 15.2152 11.1463 15.1214C11.2401 15.0277 11.3673 14.975 11.4999 14.975H14.2679L10.1719 10.879C10.0782 10.7852 10.0255 10.6581 10.0255 10.5255C10.0255 10.3929 10.0782 10.2658 10.1719 10.172ZM5.8279 5.82799C5.73414 5.92173 5.60698 5.97439 5.4744 5.97439C5.34182 5.97439 5.21467 5.92173 5.1209 5.82799L1.0249 1.73199V4.49999C1.0249 4.6326 0.972224 4.75978 0.878456 4.85355C0.784688 4.94732 0.657511 4.99999 0.524902 4.99999C0.392294 4.99999 0.265117 4.94732 0.171349 4.85355C0.0775808 4.75978 0.0249023 4.6326 0.0249023 4.49999V0.524994C0.0249023 0.392386 0.0775808 0.265209 0.171349 0.17144C0.265117 0.0776723 0.392294 0.0249939 0.524902 0.0249939H4.4999C4.63251 0.0249939 4.75969 0.0776723 4.85346 0.17144C4.94722 0.265209 4.9999 0.392386 4.9999 0.524994C4.9999 0.657602 4.94722 0.784779 4.85346 0.878547C4.75969 0.972315 4.63251 1.02499 4.4999 1.02499H1.7319L5.8279 5.12099C5.92164 5.21476 5.9743 5.34191 5.9743 5.47449C5.9743 5.60708 5.92164 5.73423 5.8279 5.82799Z" />
                                    <path class="fill-secondary"
                                        d="M10.5253 5.97439C10.3927 5.97439 10.2655 5.92173 10.1718 5.82799C10.078 5.73423 10.0254 5.60708 10.0254 5.47449C10.0254 5.34191 10.078 5.21476 10.1718 5.12099L14.2678 1.02499H11.4998C11.3672 1.02499 11.24 0.972315 11.1462 0.878547C11.0525 0.784779 10.9998 0.657602 10.9998 0.524994C10.9998 0.392386 11.0525 0.265209 11.1462 0.17144C11.24 0.0776723 11.3672 0.0249939 11.4998 0.0249939H15.4748C15.6074 0.0249939 15.7346 0.0776723 15.8283 0.17144C15.9221 0.265209 15.9748 0.392386 15.9748 0.524994V4.49999C15.9748 4.6326 15.9221 4.75978 15.8283 4.85355C15.7346 4.94732 15.6074 4.99999 15.4748 4.99999C15.3422 4.99999 15.215 4.94732 15.1212 4.85355C15.0275 4.75978 14.9748 4.6326 14.9748 4.49999V1.73199L10.8788 5.82799C10.785 5.92173 10.6579 5.97439 10.5253 5.97439Z" />
                                </svg>
                            </a>
                        </li>

                        <li class="d-none d-xl-inline-block">
                            <div class="dropdown morphing scale-left Language mx-sm-2">
                                <a class="nav-link dropdown-toggle after-none" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg viewBox="0 0 16 16" width="18px" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-secondary"
                                            d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                                        <path
                                            d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                                    </svg>
                                </a>
                                <div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
                                    <div class="card">
                                        <div class="list-group list-group-custom" style="width: 200px;">
                                            <a href="#" class="list-group-item"><span
                                                    class="flag-icon flag-icon-gb me-2"></span>UK English</a>
                                            <a href="#" class="list-group-item"><span
                                                    class="flag-icon flag-icon-us me-2"></span>US English</a>
                                            <a href="#" class="list-group-item"><span
                                                    class="flag-icon flag-icon-de me-2"></span>Germany</a>
                                            <a href="#" class="list-group-item"><span
                                                    class="flag-icon flag-icon-in me-2"></span>Hindi</a>
                                            <a href="#" class="list-group-item"><span
                                                    class="flag-icon flag-icon-sa me-2"></span>Saudi Arabia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a class="nav-link quick-light-dark" href="#">
                                <i class="bi bi-globe"></i>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                                <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    <img class="avatar img-thumbnail rounded-circle shadow"
                                        src="{{asset('assets/img/profile_av.png')}}" alt="">
                                </a>
                                <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                                    <div class="card border-0 w240">
                                        <div class="card-body border-bottom d-flex">
                                            <img class="avatar rounded-circle"
                                                src="{{asset('assets/img/profile_av.png')}}" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="card-title mb-0">{{Auth::guard('admin')->user()->name}}</h6>
                                                <span class="text-muted"><a href="/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="a7c6cbcbcec2c0d5c6d3c2d5e7cbd2c9c889c4c8ca">{{Auth::guard('admin')->user()->email}}</a></span>
                                            </div>
                                        </div>
                                        <div class="list-group m-2 mb-3">
                                            <a class="list-group-item list-group-item-action border-0"
                                                href="page-profile.html"><i class="w30 fa fa-user"></i>My Profile</a>
                                            <a class="list-group-item list-group-item-action border-0"
                                                href="account-settings.html"><i class="w30 fa fa-gear"></i>Settings</a>
                                            <a class="list-group-item list-group-item-action border-0"
                                                href="../page-teamsboard.html"><i class="w30 fa fa-users"></i>Users</a>
                                        </div>
                                        <a href="{{route('admin.logout')}}"
                                            class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')


        @include('admin.layout.footer')
    </div>

    <!------------------------ main -------------------------------------------------->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <!------------------------ bundle -------------------------------------------------->
    <script src="{{asset('assets/js/bundle/apexcharts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/bundle/apexcharts.bundle.js')}}"></script>
    <!------------------------ vendor -------------------------------------------------->
    <script src="{{asset('assets/vendor/toster/js/jquery.toast.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery_validator/form_validator/jquery.form-validator.min.js')}}"></script>
    <!------------------------ custom -------------------------------------------------->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!------------------------ dropify -------------------------------------------------->
    <script src="{{asset('assets/js/bundle/dropify.bundle.js')}}"></script>
    <script src="{{asset('assets/js/jquery.multifield.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.multifield.js?v=1')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{asset('assets/js/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/js/bundle/dataTables.bundle.js')}}"></script>
    <script type="text/javascript" src="https://www.codehim.com/demo/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.js"></script>

    {{-- <script>
        $(function() {
        // Outbound Calls & Contact Rate per weekday
        var options = {
            series: [{
            name: 'Outbound Calls',
            type: 'column',
            data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
            }, {
            name: 'Contact Rate',
            type: 'line',
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }],
            colors: ['var(--chart-color1)', 'var(--chart-color5)'],
            chart: {
            height: 320,
            type: 'line',
            toolbar: {
                show: false,
            },
            },
            stroke: {
            width: [0, 4]
            },
            dataLabels: {
            enabled: true,
            enabledOnSeries: [1]
            },
            labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
            xaxis: {
            type: 'datetime'
            },
            yaxis: [{
            title: {
                text: 'Outbound Calls',
            },
            }, {
            opposite: true,
            title: {
                text: 'Contact Rate'
            }
            }]
        };
        var chart = new ApexCharts(document.querySelector("#apex-OutboundCalls"), options);
        chart.render();
        // Sales Statistics
        var options = {
            series: [{
            name: 'Revenue',
            data: [13, 23, 20, 8, 13, 27, 33, 12, 67, 22, 43, 21, 49, 13, 23]
            }, {
            name: 'Cost',
            data: [44, 55, 41, 67, 22, 43, 21, 49, 13, 23, 20, 8, 13, 27, 33]
            }],
            chart: {
            type: 'bar',
            height: 240,
            stacked: true,
            //stackType: '100%',
            toolbar: {
                show: false,
            },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color5)'],
            responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
                }
            }
            }],
            xaxis: {
            categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ],
            },
            fill: {
            opacity: 1
            },
            dataLabels: {
            enabled: false,
            },
            legend: {
            position: 'bottom',
            },
            tooltip: {
            y: [{
                title: {
                formatter: function(val) {
                    return val + " (K)"
                }
                }
            }, {
                title: {
                formatter: function(val) {
                    return val + " (K)"
                }
                }
            }]
            },
        };
        var chart = new ApexCharts(document.querySelector("#apex-SalesStatistics"), options);
        chart.render();
        // Top Selling Plans
        var options = {
            series: [32, 56, 12],
            chart: {
            type: 'donut',
            width: 340,
            toolbar: {
                show: false,
            },
            },
            responsive: [{
            breakpoint: 1200,
            options: {
                chart: {
                width: 260
                },
                legend: {
                position: 'bottom'
                }
            }
            }],
            labels: ['Plan 1', 'Plan 2', 'Plan 3'],
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            dataLabels: {
            enabled: false
            },
            legend: {
            position: 'bottom', // top, bottom
            enabled: false
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-TopSellingPlans"), options);
        chart.render();
        })
    </script>

    <script>
        /*$(document).ready(function(){
            $.fn.modal.Constructor.prototype.enforceFocus = function() {};
        });*/


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
                "language": {
                    "sProcessing": "loading",
                    "sLengthMenu": "Show _MENU_ row",
                    "sZeroRecords": "ther's is no searchable data",
                    "sInfo": "Show From_START_TO_END_TOTAL",
                    "sInfoEmpty": "Empty Informations",
                    "sInfoFiltered": "معلومات منتقاه",
                    "sInfoPostFix": "",
                    "sSearch": "search:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "first",
                        "sPrevious": "previous",
                        "sNext": "next",
                        "sLast": "last"
                    }
                },
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
            console.log("handleSuccessResponce" + result.code)
            console.log(result)
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
            if ($('#dataTableObject').length > 0 ) {
                $('#dataTableObject').DataTable().ajax.reload();
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

        $(document).on('click', '.editButton', function (e) {
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

        $(document).on('click', '.deleteButton', function (e) {
            e.preventDefault()
            let buttonObj = $(this);
            let deleteRoute = buttonObj.attr("delete-route");
            swal.fire({
                title: "هل أنت متأكد من إتمام  هذا الإجراء؟",
                text: "لا يمكنك التراجع بعد ذلك؟",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "موافق",
                cancelButtonText: "الغاء",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteRoute,
                        type: 'DELETE',
                        beforeSend: function () {
                        },
                        complete: function () {
                        },
                        success: function (data) {
                            Swal.fire({
                                icon: 'success',
                                title: "تم الحذف بنجاح",
                                confirmButtonText: "إغلاق",
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
                    console.log(200)
                    handleSuccessResponce(result);
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
                    modalResult.modal('toggle');
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


        // $(document).ajaxComplete(function () {
        //     $(".trim_items").each(function () {
        //         var text = $(this).text();
        //         if (text.length > 20) {
        //             var truncatedText =
        //                 $.trim(text).substring(0, 20).split(" ").slice(0, -1).join(" ") + ".";
        //             var readMoreLink = '...';
        //             $(this).text(truncatedText).append(readMoreLink);
        //         }
        //     });
        // });
    </script> --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function () {
            $('.dropify').dropify();
            var drEvent = $('#dropify-event').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
            });
            $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
            });
        });
    </script>
    <script>
        $(document).ajaxComplete(function () {
            tinymce.init({
                selector: '.mytextarea',
                plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        });
    </script>

    @stack('js')




</body>

</html>