<?php

namespace App\Http\Controllers\Admin;

use App\Orders;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::paginate(25);

        dd($orders);

        return view('admin.orders.index', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'word_length' =>'required',
                'subject' =>'required',
                'academic_level'=>'required',
                'deadline'=>'required',
                'total'=>'required',
                'style'=>'required',
                'attachment'=>'required',
                'number_of_sources'=>'required',
                'suggested_sources'=>'required',
                'essential_sources'=>'required',

            ]);

        Orders::create($request->all());


        return redirect('admin/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::findOrFail($id);

        dd($order);

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Orders::findOrFail($id);

        return view('admin.orders.edit', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'word_length' =>'required',
                'subject' =>'required',
                'academic_level'=>'required',
                'deadline'=>'required',
                'total'=>'required',
                'style'=>'required',
                'attachment'=>'required',
                'no_of_sources'=>'required',
                'suggested_sources'=>'required',
                'essential_sources'=>'required',

            ]);

        $order = Orders::findOrFail($id);
        $order->update($request->all());


        return redirect('admin/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return redirect('admin/orders');
    }
}
