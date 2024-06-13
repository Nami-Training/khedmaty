@extends('admin.layout.master')

@section('title', 'Orders')

@section('content')

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">
                <div class="row mb-3">
                    <div class="col-1">
                        <label for="adjective" class="alert bg-light-info ">Orders</label>
                    </div>
                </div>
                <input type="hidden" id="product_id" value="{{$product->id}}">
                <table id="dataTableObject" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Total</th>
                            <th>Address</th>
                            <th>Show</th>
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
        var product_id = $('#product_id').val();
        console.log(product_id);
        var myTable = $('#dataTableObject').DataTable({
            processing: true,
            serverSide: true, // Enable server-side processing (optional)
            ajax: {
                url: '{{ route("orders.getProduct") }}',
                data: function(d) {
                    d.product_id = product_id; // Pass the variable here
                }
            },
            columns: [
                { data: 'id' },
                { data: 'total' },
                { data: 'address' },
                { data: 'order' },
                { data: 'action' },
            ]
        });
    });
</script>
@endpush