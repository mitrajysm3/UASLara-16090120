<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Validator;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.halamanadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.halamanadmin',compact('bukus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $rules = array(
            'category_id' => 'required|min:8|max:30',
            'nama_buku' => 'required|min:15|max:100',
            'penulis' => 'required|min:8|max:50',
            'penerbit' => 'required|min:8|max:50',
            'detail' => 'required|min:10|max:250'
        );

        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors'=> $error->errors()->all()]);
        }

        Buku::create([
            'category_id' => request('category_id'),
            'nama_buku' => request('nama_buku'),
            'penulis' => request('penulis'),
            'penerbit' => request('penerbit'),
            'detail' => request('detail')
        ]);
        return view('pages.databuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
