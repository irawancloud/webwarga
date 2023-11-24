<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data = DB::table('sellers')->orderBy('id', 'desc')->get();
        return view('seller.index', [
            'data'  => $data,
            'no'    => $no,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'seller_name' => 'required|unique:sellers,seller_name',
            'seller_image' => 'required|mimes:png,jpg,jpeg|max:2000',
            'seller_tag' => 'required',
            'description' => 'required',
        ]);
        $slug = Str::of($request->seller_name)->slug('-');
        $user = Auth::user()->name;
        $input = ([
            'seller_name'       => $request['seller_name'],
            'slug'              => $slug,
            'seller_tag'        => $request['seller_tag'],
            'user_input'        => $user,
            'description'       => $request['description'],
        ]);

        $file = $request->file('seller_image');
        // nama file
        $imageName = date('Ymd-His') . '.' . $file->getClientOriginalExtension();
        // folder upload image
        $path = 'upload';
        $file->move($path, $imageName);
        $input['seller_image'] = $imageName;

        Seller::create($input);

        return redirect()->route('home')->with('success', 'Berhasil menambahkan UMKM baru');
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
        $decrypt = Crypt::decrypt($id);
        $data = Seller::findOrFail($decrypt);
        return view('seller.edit', [
            'data' => $data
        ]);
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
