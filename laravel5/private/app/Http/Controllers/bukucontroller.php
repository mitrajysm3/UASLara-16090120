<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Validator;

class bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('pages.databuku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return view('pages.databuku', compact('posts'));
    }

    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('pages.editbuku',['buku' => $buku]);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect('buku')->with('data buku berhasil di update');
    }

    public function delete($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect('buku')->with('data buku berhasil di hapus');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = array(
        //     'category_id' => 'required|min:10|max:30',
        //     'nama_buku' => 'required|min:30|max:100',
        //     'penulis' => 'required|min:5|max:50',
        //     'penerbit' => 'required|min:10|max:50',
        //     'detail' => 'required|min:10|max:250'
        // );

        // $error = Validator::make($request->all(), $rules);
        // if($error->fails()) {
        //     return response()->json(['errors'=> $error->errors()->all()]);
        // }

        // Post::create([
        //     'category_id' => request('category_id'),
        //     'nama_buku' => request('nama_buku'),
        //     'penulis' => request('penulis'),
        //     'penerbit' => request('penerbit'),
        //     'detail' => request('detail')
        // ]);
        // return redirect('Post');
    }

    public function kategoribuku()
    {
        return view('');
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
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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
