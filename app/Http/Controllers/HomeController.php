<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Post;

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
    public function index()
    {
        $posts = Post::all();
        $dt = Carbon::now();
        $hours = $dt->format("H");
        $dayTerm = ($hours > 0 && $hours < 12) ? "Morning" : (($hours > 12 && $hours < 17) ? "Afternoon" : "Evening");
        $user = Auth::user();

        return view('home')->with(["user" => $user, "day" => $dayTerm, "posts" => $posts]);
    }
    public function about()
    {
        return view('about');
    }
    public function logout()
    {
        $posts = Post::all();
        return view('logout')->with("posts", $posts);
    }
}
