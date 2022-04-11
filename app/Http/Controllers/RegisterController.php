<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index' , [
            'title' => 'Register',
            'active' => 'register'
        ]);
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
        $validatedData = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'dateofbirth' => 'required',
            'phone' => 'required|max:12',
            'profilpicture' => 'required',
            'store' => 'required',
            'storeAddress' => 'required',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');
        
        return redirect('/login')->with('success', 'Registration successfull! Please login');

        // menyimpan data file yang diupload ke variabel $file
		$profilpicture = $request->profilpicture('profilpicture');

        // nama file
echo 'File Name: '.$profilpicture->getClientOriginalName();
echo '<br>';

        // ekstensi file
echo 'File Extension: '.$profilpicture->getClientOriginalExtension();
echo '<br>';

        // real path
echo 'profilpicture Real Path: '.$profilpicture->getRealPath();
echo '<br>';

        // ukuran file
echo 'File Size: '.$profilpicture->getSize();
echo '<br>';

        // tipe mime
echo 'File Mime Type: '.$profilpicture->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
$tujuan_upload = 'img';

      // upload file
$profilpicture->move($tujuan_upload,$profilpicture->getClientOriginalName());
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
