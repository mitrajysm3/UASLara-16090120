<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Register;
use Validator;

class homeadmincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.homeadmin');
    }

    ///public function register()
    //{
        //return view('pages.register');
    //}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create', compact('registers'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'username' => 'required|min:5|max:10',
            'email' => 'required|unique:registers|max:100',
            'password' => 'required|min:3|max:13'
        );

        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors'=> $error->errors()->all()]);
        }
        Register::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password')
        ]);
        return view('pages.home');
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
