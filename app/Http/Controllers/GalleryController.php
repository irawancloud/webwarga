<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data = DB::table('galleries')->orderBy('id', 'desc')->get();
        return view('gallery.index', [
            'data'  => $data,
            'no'    => $no,
        ]);
        return view('gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            'image_name' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $image_id = 'Gal' . date('Ymd-His');
        $user = Auth::user()->name;
        $input = ([
            'image_id'    => $image_id,
            'user_input'    => $user,
        ]);

        $file = $request->file('image_name');
        // nama file
        $imageName = date('Ymd-His') . '.' . $file->getClientOriginalExtension();
        // folder upload image
        $path = 'upload';
        $file->move($path, $imageName);
        $input['image_name'] = $imageName;
        // dd($input);
        Gallery::create($input);

        return redirect()->route('imageGallery.index')->with('success', 'Berhasil menambahkan image Baru');
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
        $data = Gallery::findOrFail($decrypt);
        return view('gallery.edit', [
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
        $update = $request->all();
        if ($file = $request->file('image_name')) {
            $path = 'upload/';
            $imageName = time() . '.' . $file->getClientOriginalName();
            $file->move($path, $imageName);
            $update['image_name'] = "$imageName";
        } else {
            unset($update['image_name']);
        }
        Gallery::find($id)->update($update);
        return redirect()->route('imageGallery.index')->with('success', 'Berhasil merubah image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decrypt = Crypt::decrypt($id);
        $data = Gallery::findOrFail($decrypt);
        $data->delete();
        return redirect()->route('imageGallery.index')->with('success', 'Data berhasil dihapus');
    }
}
