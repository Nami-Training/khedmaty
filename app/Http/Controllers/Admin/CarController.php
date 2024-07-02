<?php

namespace App\Http\Controllers\Admin;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use Yajra\DataTables\DataTables;
use App\Http\Requests\CarRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorizeForUser(Auth::guard('admin')->user(), 'viewCar');

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
            $editRoute = route('cars.edit', $car->id);
            $destroyRoute = route('cars.destroy', $car->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorizeForUser(Auth::guard('admin')->user(), 'createCar');

        $html = view('admin.windows.car')->render();
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
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
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
        $this->authorizeForUser(Auth::guard('admin')->user(), 'updateCar');

        $car = $carService->findById($id);
        $html = view('admin.windows.car', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, CarService $carService)
    {
        if ($carService->updateCar($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, CarService $carService)
    {
        $this->authorizeForUser(Auth::guard('admin')->user(), 'deleteCar');

        $car = $carService->findById($id);
        $this->deleteFile($car->image);
        $carService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
