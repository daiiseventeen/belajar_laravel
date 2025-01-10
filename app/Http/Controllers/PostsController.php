<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menampilkan() {
        $Barang = Barang::all();
        return view('tampil_barang' ,compact('Barang'));
    }
    public function menampilkan2() {
        $Post = Post::all();
        return view('tampil_post' ,compact('Post'));
    }
}
