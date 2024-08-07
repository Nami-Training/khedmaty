@extends('admin.layout.master')

@section('title', 'Departments')

@section('content')

    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body" style="min-height: calc(100vh - 196px);">
                    <div class="d-flex mb-3 justify-content-end">
                        <button type="button" class="btn btn-success float-start addButton mx-1" data-bs-toggle="modal"
                            data-bs-target="#createModal" model-title="Add Department" model-route="{{route('departments.create')}}"
                            title="Add">
                            <i class="fa fa-plus-circle"></i> Add Department
                        </button>
                    </div>
                    <table id="dataTableObject" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
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
                ajax: '{{ route('departments.data') }}', // Route for server-side processing
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'image' },
                    { data: 'action' },
                ]
            });
        });
    </script>
@endpush