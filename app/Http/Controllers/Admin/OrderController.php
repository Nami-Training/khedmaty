<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\OrderService;
use App\Services\ProductService;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderService $orderService)
    {
        $orders = $orderService->all();
        return view('admin.orders', get_defined_vars());
    }

    public function filter($id)
    {
        $productService = new ProductService;
        $product = $productService->findById($id);
        return view('admin.productOrders', get_defined_vars());
    }

    public function getProduct(Request $request)
    {
        $id = $request->product_id;
        $orders = Order::with(['orderProducts'])
        ->whereHas('orderProducts', function ($query) use($id) {
            $query->where('product_id', $id);
        })->get();

        return DataTables::of($orders)
        ->addColumn('id', function ($order) {
            return $order->id;
        })
        ->addColumn('total', function ($order) {
            return $order->total;
        })
        ->addColumn('address', function ($order) {
            return $order->address;
        })
        ->addColumn('order', function ($order) {
            return  "<button type='button' class='btn btn-primary addButton mx-1' data-bs-toggle='modal'
                        data-bs-target='#createModal'
                        model-route='".route('orders.show', $order->id)."'>
                        Order  <i class='fa fa-eye'></i>
                    </button>";
        })
        ->addColumn('action', function($order){
            $destroyRoute = route('orders.destroy', $order->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['order', 'action'])
        ->make(true);
    }

    public function getAll(OrderService $orderService)
    {
        $orders = $orderService->all();
        return DataTables::of($orders)
        ->addColumn('id', function ($order) {
            return $order->id;
        })
        ->addColumn('total', function ($order) {
            return $order->total;
        })
        ->addColumn('address', function ($order) {
            return $order->address;
        })
        ->addColumn('order', function ($order) {
            return  "<button type='button' class='btn btn-primary addButton mx-1' data-bs-toggle='modal'
                        data-bs-target='#createModal'
                        model-route='".route('orders.show', $order->id)."'>
                        Order  <i class='fa fa-eye'></i>
                    </button>";
        })
        ->addColumn('action', function($order){
            $destroyRoute = route('orders.destroy', $order->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['order', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, OrderService $orderService, ProductService $productService, UserService $userService)
    {
        $order = $orderService->findById($id);
        $user = $userService->findById($order->user_id);
        $orderProducts = $order->orderProducts;
        $products = [];
        foreach($orderProducts as $orderProduct){
            $product = $productService->findById($orderProduct->product_id);
            $products[] = [
                'product' => $product,
                'qty' => $orderProduct->qty,
                'total' => $orderProduct->qty * $product->price
            ];
        }
        $html = view('admin.windows.order', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, OrderService $orderService,)
    {
        $orderService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
