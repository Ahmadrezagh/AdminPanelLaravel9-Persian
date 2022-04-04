<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    public function update(Request $req, $id)
    {
        return $req;
        $validatedData = validator::make($req->all(), [
            'img' => 'image|mimes:jpeg,jpg,png',
            'name'=> 'required|string',
            'email'=>'required|email',
            'password'=>'nullable|string'
        ]);
        if($validatedData->fails()){
            alert()->warning('Something went wrong...');
            return back()->withErrors($validatedData)->withInput();
        }
        $user = User::findOrFail($id);
        if($req->img){
            $img = upload_file($req->img,'/profile/'.$user->id,$user->id);
            $user->update(['profile_img' => $img]);
        }
        if($req->password != null){
            $user->update([
                    'password' => Hash::make($req->password)
                ]);
        }
        $user->update([
                'email' => $req->email,
                'name' => $req->name
            ]);
        alert()->success('Profile updated successfully');
        return back();

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
