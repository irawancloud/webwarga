<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('pages.index');
    }

    function pengurus()
    {
        return view('pages.pengurus');
    }

    function dkm()
    {
        return view('pages.dkm');
    }

    function okumene()
    {
        return view('pages.okumene');
    }

    function adart()
    {
        return view('pages.adart');
    }

    function dokumentasi()
    {
        return view('pages.dokumentasi');
    }

    function galeri()
    {
        // return view('pages.galeri');
        $gallery = DB::table('galleries')->orderBy('id', 'desc')->get();
        return view('pages.galeri', [
            'gallery' => $gallery
        ]);
    }

    function programKerja()
    {
        return view('pages.programKerja');
    }

    function kontak()
    {
        return view('pages.kontak');
    }

    function blog()
    {
        $artikel = DB::table('blogs')->orderBy('id', 'desc')->cursorPaginate(6);
        return view('pages.blog', [
            'artikel' => $artikel
        ]);
    }
    function blogDetail($slug)
    {
        $data = DB::table('blogs')->where('slug', '=', $slug)->get();
        $post = $data[0]->id;

        $idPrev = DB::table('blogs')->where('blogs.id', '<', $post)->max('blogs.id');
        $idNext = DB::table('blogs')->where('blogs.id', '>', $post)->min('blogs.id');

        $prev = DB::table('blogs')->where('blogs.id', '=', $idPrev)->get();
        $next = DB::table('blogs')->where('blogs.id', '=', $idNext)->get();
        $recent = DB::table('blogs')->limit(5)->get();
        return view('pages.blogDetail', [
            'data' => $data,
            'prev' => $prev,
            'next' => $next,
            'recent' => $recent,
        ]);
    }
}
