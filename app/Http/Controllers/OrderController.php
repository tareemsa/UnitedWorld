<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    private $model_instance;
    private $success_message;
    private $error_message;
    private $update_success_message;
    private $update_error_message;

    public function __construct()
    {
        $this->success_message = trans('admin.created_successfully');
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = trans('admin.fail_while_create');
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = Order::class;
    }

    private function StoreValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'town' => 'required|string|max:100',
            'rooms' => 'required|string|max:100',
            'sea_view' => 'required|integer',
            'location' => 'required|string|max:100',
            'status' => 'required|in:sold,ready,under_construction',
            'uwestate_url' => 'required|string|max:100',
            'starting_price_usd' => 'required|integer',
        ];
    }

    private function UpdateValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'town' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'status' => 'required|in:sold,ready,under_construction',
            'uwestate_url' => 'required|string|max:100',
            'starting_price_usd' => 'required|integer', 
        ];
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->model_instance::paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->StoreValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());
            return redirect('/dashboard/orders/add')
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $validated_data = $validator->validated();
            $validated_data['user_id'] = get_Current_user_id();
            //$validated_data['user_id'] = A;
            $object = $this->model_instance::create($validated_data);

            $log_message = 'orders.create_log' . '#' . $object->id;
            Log::info($log_message);
           return redirect('/dashboard/orders')->with('success', 'order Added Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/orders/add')->with('errors', 'Something went wrong');
        }

    }     

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = $this->model_instance::findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit($id)
    {
        $order = $this->model_instance::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());
            return redirect('/dashboard/orders/add')->withErrors($validator)->withInput();
        }

        try {
            $validated_data = $validator->validated();
            $order = $this->model_instance::findOrFail($id);
            $order->update($validated_data);

            Log::info('Order updated: ' . $order->id);

            return redirect('/dashboard/orders')->with('Success', 'Order Updated Successfully');
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect('/dashboard/orders')->with('errors', 'Something went wrong');
        }
    }*/
    public function edit($id)
    {
        try {

                $order = Order::findOrFail($id);
                return view('admin.orders.edit', compact('order'));
            
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect('/dashboard/orders')->with('errors', 'Order not found');
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
    
        if ($validator->fails()) {
            Log::error($validator->errors());
            return redirect()->route('orders.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }
    
        try {
            $validated_data = array_filter($validator->validated(), function ($value) {
                return $value !== null;
            });
            $order = Order::findOrFail($id); // Fetch the order or throw 404
            $order->update($validated_data);
    
            Log::info('Order updated: ' . $order->id);
    
            return redirect()->route('orders.index')->with('success', 'Order Updated Successfully');
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('orders.edit', $id)->with('error', 'Something went wrong');
        }
    }
    
    
    
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        /*try {
            $order = $this->model_instance::findOrFail($id);
            $order->delete();

            Log::info('Order deleted: ' . $order->id);

            return redirect('/dashboard/orders')->with('info', 'Order #'.$id.' Deleted Successfully');
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect('/dashboard/orders')->with('errors', 'Something went wrong');
        }*/

    try {
        $order = Order::findOrFail($id); // Fetch the order or throw 404
        $order->delete(); // Soft delete

        return redirect()->route('orders.index')->with('success', 'Order Soft Deleted Successfully');
    } catch (\Exception $ex) {
        return redirect()->route('orders.index')->with('error', 'Something went wrong: ' . $ex->getMessage());
    }


    }
    public function restore($id)
{
    try {
        $order = Order::withTrashed()->findOrFail($id); // Fetch the soft-deleted order
        $order->restore(); // Restore the order

        return redirect()->route('orders.index')->with('success', 'Order Restored Successfully');
    } catch (\Exception $ex) {
        return redirect()->route('orders.index')->with('error', 'Something went wrong: ' . $ex->getMessage());
    }
}
public function forceDelete($id)
{
    try {
        $order = Order::withTrashed()->findOrFail($id); // Fetch the soft-deleted order
        $order->forceDelete(); // Permanently delete

        return redirect()->route('orders.index')->with('success', 'Order Permanently Deleted');
    } catch (\Exception $ex) {
        return redirect()->route('orders.index')->with('error', 'Something went wrong: ' . $ex->getMessage());
    }
}


    /**
     * Search orders by term.
     */
    public function search($term)
    {
        $orders = $this->model_instance::where('title', 'like', '%' . $term . '%')->get();
        return response()->json(['status' => 'success', 'data' => $orders], 200);
    }
}
