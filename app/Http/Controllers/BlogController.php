<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data = DB::table('blogs')->orderBy('id', 'desc')->get();
        return view('post.index', [
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
        return view('post.create');
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
            'blog_title' => 'required|unique:blogs,blog_title',
            'blog_image' => 'required|mimes:png,jpg,jpeg|max:2000',
            'category' => 'required',
            'article' => 'required',
        ]);
        $slug = Str::of($request->blog_title)->slug('-');
        $user = Auth::user()->name;
        $input = ([
            'blog_title'    => $request['blog_title'],
            'slug'          => $slug,
            'category'      => $request['category'],
            'user_input'    => $user,
            'article'       => $request['article'],
        ]);

        $file = $request->file('blog_image');
        // nama file
        $imageName = date('Ymd-His') . '.' . $file->getClientOriginalExtension();
        // folder upload image
        $path = 'upload';
        $file->move($path, $imageName);
        $input['blog_image'] = $imageName;
        // dd($input);
        Blog::create($input);

        return redirect()->route('home')->with('success', 'Berhasil menambahkan Artikel Baru');
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
        $data = Blog::findOrFail($decrypt);
        return view('post.edit', [
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
        if ($file = $request->file('blog_image')) {
            $path = 'upload/';
            $imageName = time() . '.' . $file->getClientOriginalName();
            $file->move($path, $imageName);
            $update['blog_image'] = "$imageName";
        } else {
            unset($update['blog_image']);
        }
        Blog::find($id)->update($update);
        return redirect('post')->with('success', 'Berhasil Memperbaharui Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();
        return redirect()->route('post')->with('success', 'Data berhasil dihapus');
    }
}
