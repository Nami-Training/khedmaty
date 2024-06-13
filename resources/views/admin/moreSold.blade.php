@extends('admin.layout.master')

@section('title', 'Products')

@section('content')

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">
                <table id="dataTableObject" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Rate</th>
                            <th>Orders</th>
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
            ajax: '{{ route('products.moreSoldGetAll') }}', // Route for server-side processing
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'price' },
                { data: 'type' },
                { data: 'image' },
                { data: 'rate' },
                { data: 'orders' },
            ],
            "order": [],
        });
    });
</script>
@endpush