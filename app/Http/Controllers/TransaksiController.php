<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\produks;
use App\Models\order;
use App\Models\user;
use Validator;
use PDF;

class TransaksiController extends Controller
{
    // public function _contruct()
        // {
        //     $this->middleware('transaksi');
        // }

        public function index(Request $request)
        {
            $transaksi = Transaksi::with('order','produk')->latest()->paginate(3);
            $filterKeyword = $request->get('keyword');
            if ($filterKeyword)
            {
                $transaksi = Transaksi::where('name','LIKE',"%$filterKeyword%")->paginate(1);
            }

            return view('transaksi.index', compact('transaksi'));
        }//end method

        public function create()
        {
            $transaksi = Transaksi::all();
            $produk = Produks::all();
            $order = User::
            join('orders', 'orders.id_user', '=', 'users.id')->get();
            return view('transaksi.create', compact('transaksi','produk', 'order'));
        }//end method

        public function store(Request $request)
        {
            $data = $request->all();
            $model = new Transaksi;
            $model->id = $request->id;
            $model->id_orders = $request->id_orders;
            $model->tanggal = $request->tanggal;
            $model->total_bayar = $request->total_bayar;
            $model->jenis_pembayaran = $request->jenis_pembayaran;

            // $validasi = Validator::make($data,[
            //     'id'=>'required',
            //     'id_pembayaran'=>'required',
            //     'id_produk'=>'required',
            //     'total_bayar'=>'required|max:255',
            //     'tanggal'=>'required|max:20',
            //     'jenis_pembayaran'=>'required|max:20',

            // ]);
            // if($validasi->fails())
            // {
            //     return redirect()->route('transaksi.create')->withInput()->withErrors($validasi);
            // }

            Transaksi::create($data);
            //toast('berhasil di tambah', 'success');
            return redirect()->route('transaksi.index');
        }//end method

        public function destroy($id_transaksi)
        {
            $data = Transaksi::findOrFail($id_transaksi);
            $data->delete();
            return redirect()->route('transaksi.index');
        }//end method


        public function show($idt)
        {
            $transaksi = Transaksi::findOrFail($idt);
            return view('transaksi.show',compact('transaksi'));
        }//end method


        public function edit($idt)
        {
            $transaksi = Transaksi::findOrFail($idt);
            return view('transaksi.edit',compact('transaksi'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $idt
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $idt)
        {
        $transaksi = Transaksi::findOrFail($idt);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'id'=>'required',
                'id_pembayaran'=>'required',
                'id_produk'=>'required',
                'total_bayar'=>'required|max:255',
                'tanggal'=>'required|max:20',
                'jenis_pembayaran'=>'required|max:20',

            ]);
            if($validasi->fails())
            {
                return redirect()->route('transaksi.create',[$idt])->withErrors($validasi);
            }

              $transaksi->update($data);
              return redirect()->route('transaksi.index');
           }

           public function pdf()
           {
            $transaksi = Transaksi::with('order','produk')->latest()->paginate(3);

               $pdf = PDF::loadview('laporan.pdf',compact('transaksi'));
               return $pdf->download('laporan.pdf');
           }

}
