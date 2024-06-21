@extends('admin.layout.master')

@section('title', 'Stores')

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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Show</th>
                            <th>Total Sales</th>
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
            ajax: "{{ route('stores.moreSalesGetAll')}}", // Route for server-side processing
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'phone' },
                { data: 'image' },
                { data: 'offer_status' },
                { data: 'totalSales' },
            ],
            "order": [],
        });
    });
</script>
@endpush