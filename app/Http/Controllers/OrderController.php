<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\produks;
use Validator;

class OrderController extends Controller
{
    Public function _contruct()
    {
        $this->middleware('order');
    }

    public function index(Request $request)
    {

        $order = Order::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $order = Order::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('order.index', compact('order'));
    }//end method

    public function create()
    {
        $produk = Order::all();
        return view('order.create', compact('produk'));
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Order;
        $model->id_user = $request->user;
        $model->jumlah_produk = $request->jumlah_produk;
        $model->total_bayar = $request->total_bayar;


        Order::create($data);

        return redirect()->route('order.index');
    }//end method

    public function destroy($id_order)
    {
        $data = Order::findOrFail($id_order);
        $data->delete();
        return redirect()->route('order.index');
    }//end method


    public function show($id_order)
    {
        $order = Order::findOrFail($id_order);
        return view('order.show',compact('order'));
    }//end method


    public function edit($id_order)
    {
        $order = Order::all();
        $order = Order::findOrFail($id_order);
        return view('order.edit',compact('order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_order)
    {
    $order = Order::findOrFail($id_order);
    $data = $request->all();
    $validasi = Validator::make($data,[
        'id'=>'required',
        'jumlah_produk'=>'required|max:255',
        'total_bayar'=>'required|max:255',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('order.create',[$id_order])->withErrors($validasi);
            alert()->error('Error','Errors to edit');
        }

          $order->update($data);
          alert()->success('success to edit','success');
          return redirect()->route('order.index');
       }
}
?>
