<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // menampilkan halaman beranda
    public function index()
    {
        $tweet = post::all();
        return view('home', compact('tweet'));
    }

    // Menampilkan form edit profile
    public function edit()
    {
        return view('edit');
    }

    //menambah posting tweet
    public function store(Request $request)
    {
        $post = new Post();
        $post->post = $request->get('post');
        $post->image = $request->get('image');
        $post->file = $request->get('file');
        $post->save();

        return redirect('/home')->with('success', 'Saved');
    }

    // edit postingan twitter dengan pindah ke halaaman edit post
    public function editpost($id)
    {
        $tweet = post::findOrFail($id);
        return view('editpost')->with('post', $tweet);
    }
    // menyimpan hasil edit post
    public function update(Request $request, $id)
    {
        $post = post::findOrFail($id);

        $post->post = $request->get('post');
        $post->image = $request->get('image');
        $post->file = $request->get('file');
        $post->save();

        return view('home');
    }
    // Menghapus post
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect('/home')->with('success', 'tweet Delete!!');
    }
}
