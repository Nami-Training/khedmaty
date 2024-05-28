<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\ClientService;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.clients');
    }

    public function getAll(ClientService $clientService)
    {
        $clients = $clientService->all();
        return DataTables::of($clients)
        ->addColumn('id', function ($client) {
            return $client->id;
        })
        ->addColumn('name', function ($client) {
            return $client->name;
        })
        ->addColumn('email', function ($client) {
            return $client->email;
        })
        ->addColumn('phone', function ($client) {
            return $client->phone;
        })
        ->addColumn('image', function ($client) {
            return '<img src="' .asset($client->image) . '" width="70" height="50">';
        })
        ->addColumn('offer_status', function ($client) {
            $color = $client->offer_status == '1' ? 'success' : 'danger';
            $status = $client->offer_status == '1' ? 'active' : 'Not Active';
            $ID = $client->id;
            return view('admin.components.changableBtn', get_defined_vars())->render();
        })
        ->addColumn('action', function($client){
            $editRoute = route('clients.edit', $client->id);
            $destroyRoute = route('clients.destroy', $client->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action', 'offer_status'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.client')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request, ClientService $clientService)
    {
        $client = $clientService->createClient($request->validated(), $request->image);

        if ($client) {
            return Response()->json(['code' => 200, 'data' => ['client' => $client], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
        }
    }

    public function changeOfferStatus($id, ClientService $clientService)
    {
        if ($clientService->changeOfferStatus($id)) {
            return Response()->json(['code' => 200, 'success' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'faild' =>  'Cant update this item']);
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
    public function edit(string $id, ClientService $clientService)
    {
        $client = $clientService->findById($id);
        $html = view('admin.windows.client', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, ClientService $clientService)
    {
        if ($clientService->updateClient($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, ClientService $clientService)
    {
        $clientService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}