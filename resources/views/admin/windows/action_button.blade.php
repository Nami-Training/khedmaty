<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal"
    model-route="{{$editRoute}}" model-title=" "> <i class="fa fa-pencil"></i> </button>
@if (!isset($AdminId) || Auth::guard('admin')->user()->id != $AdminId)
<button type="button" class="btn btn-danger deleteButton" delete-route="{{$destroyRoute}}"> <i class="fa fa-trash-o"></i> </button>
@endif