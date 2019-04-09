<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Client\Curl\User;

class SearchController extends Controller
{
    public function index(Request $request){
        $category = $request->input('category');

        //now get all user and services in one go without looping using eager loading
        //In your foreach() loop, if you have 1000 users you will make 1000 queries

        $users = User::with('services', function($query) use ($category) {
            $query->where('category', 'LIKE', '%' . $category . '%');
        })->get();

        return view('index', compact('users'));
    }
}
