@extends('admin.layout.master')

@section('title', 'Stores')

@section('content')

    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body" style="min-height: calc(100vh - 196px);">
                    <div class="d-flex mb-3 justify-content-end">
                        <button type="button" class="btn btn-success float-start addButton mx-1" data-bs-toggle="modal"
                            data-bs-target="#createModal" model-title="Add Store" model-route="{{route('stores.create')}}"
                            title="Add">
                            <i class="fa fa-plus-circle"></i> Add Store
                        </button>
                    </div>
                    <table id="dataTableObject" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Offer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Data will be populated by Datatables --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('#dataTableObject').DataTable({
                processing: true,
                serverSide: true, // Enable server-side processing (optional)
                ajax: '{{ route('stores.data') }}', // Route for server-side processing
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'image' },
                    { data: 'offer_status' },
                    { data: 'action' },
                ]
            });
        });


        $(document).ajaxComplete(function () {
            $('.update-status').on('click', function () {
                var aspectId = $(this).data('id');
                var url = "{{url('admin/stores/changeOfferStatus')}}" + "/" +  aspectId;
                console.log(url);
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (data) {
                        if (data.success) {
                            $.toast({
                                heading: 'Success',
                                text: 'Status Chenge Successfully!',
                                showHideTransition: 'slide',
                                icon: 'success',
                                hideAfter: 2000,
                                position: 'top-right',
                                stack: 1
                            });

                            setTimeout(function(){
                                reloadDataTable();
                            }, 1500);
                        } else {
                            alert('Faild to change status!.');
                        }
                    },
                    error: function () {
                        alert('Error On updating !');
                    }
                });
            });
        });

    </script>
@endpush