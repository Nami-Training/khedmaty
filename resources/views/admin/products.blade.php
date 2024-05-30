@extends('admin.layout.master')

@section('title', 'Products')

@section('content')

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">
                <div class="row mb-3">
                    <div class="col-1">
                        <label for="adjective" class="alert bg-light-info ">Stores</label>
                    </div>
                    <div class="col-6">
                        <select name="store_id" class="form-control filter_search" id="store_id">
                            <option value="">All</option>
                            @foreach ($stores as $store)
                                <option value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-end">
                    <button type="button" class="btn btn-success float-start addButton mx-1" data-bs-toggle="modal"
                        data-bs-target="#createModal" model-title="Add Product"
                        model-route="{{route('products.create')}}" title="Add">
                        <i class="fa fa-plus-circle"></i> Add Product
                    </button>
                </div>
                <table id="dataTableObject" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Department</th>
                            <th>Store</th>
                            <th>Offer</th>
                            <th>Image</th>
                            <th>Rate</th>
                            <th>Orders</th>
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
            var myTable = $('#dataTableObject').DataTable({
                processing: true,
                serverSide: true, // Enable server-side processing (optional)
                ajax: '{{ route('products.data') }}', // Route for server-side processing
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'price' },
                    { data: 'department' },
                    { data: 'store' },
                    { data: 'offer' },
                    { data: 'image' },
                    { data: 'rate' },
                    { data: 'orders' },
                    { data: 'action' },
                ]
            });

            $('#store_id').on('change', function () {
                myTable.column(4).search($('#store_id').val()).draw();
            });
        });

            $(document).ajaxComplete(function() {
                $('#toggleCheckbox').change(function() {
                    $('.have_offer_div').toggle(this.checked);
                });
        });




</script>
@endpush