<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produks;
use Validator;

class ProdukController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = produks::paginate(5);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $produk = Produk::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new produks;
        $model->nama_produk = $request->nama_produk;
        $model->kategori = $request->kategori;
        $model->harga = $request->harga;
        $model->stok= $request->stok;


        $validasi = Validator::make($data,[
            'nama_produk'=>'required|max:255',
            'kategori'=>'required|max:255',
            'harga'=>'required|max:255',
            'stok'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('produk.create')->withInput()->withErrors($validasi);
        }

       // $data['password'] = bcrypt($data['password']);
        // Produk::create($data);
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produks::findOrFail($id);
        return view('produk.show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $produk = produks::findOrFail($id);
        return view('produk.edit',compact('produk'));
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
        $produk = produks::find($id);
        $data = $request->all();
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $validasi = Validator::make($data,[
            'nama_produk'=>'required|max:255',
            'kategori'=>'required|max:255',
            'harga'=>'required|max:255',
            'stok'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('produk.create',[$id])->withErrors($validasi);
        }
          $produk->save();
          return redirect()->route('produk.index');
       }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = produks::findOrFail($id);
        $data->delete();
        return redirect()->route('produk.index');
    }
}

