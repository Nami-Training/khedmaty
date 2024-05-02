<?php

namespace App\Http\Controllers\Admin;

use App\Services\CarService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cars');
    }

    public function getAll(CarService $carService)
    {
        $cars = $carService->all();
        return DataTables::of($cars)
        ->addColumn('id', function ($car) {
            return $car->id;
        })
        ->addColumn('name', function ($car) {
            return $car->name;
        })
        ->addColumn('image', function ($car) {
            return '<img src="' .asset($car->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($car){
            return '<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal" model-route="'.route('cars.edit', $car->id).'" model-title=" "> <i class="fa fa-pencil"></i> </button>
            <button type="button" class="btn btn-danger deleteButton"  delete-route="'.route('cars.destroy', $car->id).'"> <i class="fa fa-trash-o"></i> </button>';
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('cars.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
            <div class="col-6">
                <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file"  name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request, CarService $carService)
    {
        $car = $carService->createCar($request->validated(), $request->image);

        if ($car) {
            return Response()->json(['code' => 200, 'data' => ['car' => $car], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, CarService $carService)
    {
        $car = $carService->findById($id);
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('cars.update', $car->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-6">
                <label for="TextInput" class="form-label">Title</label>
                <input type="text" value="'.$car->name.'" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" data-default-file="'.asset($car->image).'"  name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, CarService $carService)
    {
        if ($carService->updateCar($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, CarService $carService)
    {
        $carService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
