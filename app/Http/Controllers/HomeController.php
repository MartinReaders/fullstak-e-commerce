<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

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
        return view('home');
    }

    public function panier()
    {
        if (isset($_GET['id'])) {
            $userid = \Auth::user()->id;
            $prodid = $_GET['id'];
            $values = array('user_id' => $userid, 'produit_id' => $prodid);
            DB::table('panier')->insert($values);
            $id = \Auth::user()->id;
            $product = DB::select("SELECT * FROM panier WHERE " . $id . " = user_id");
            return view('panier', ['product' => $product]);
        } else {
            $id = \Auth::user()->id;
            $product = DB::select("SELECT * FROM panier WHERE " . $id . " = user_id");
            return view('panier', ['product' => $product]);
        }
    }

    public function produitdel()
    {

            $userid = \Auth::user()->id;
            $produit = $_GET['id'];
            $param1 = DB::table('panier')->where('user_id', $userid);
            DB::table('panier')->where('produit_id', $produit)->union($param1)->delete();
            $id = \Auth::user()->id;
            $product = DB::select("SELECT * FROM panier WHERE " . $userid . " = user_id");
            return view('panier', ['product' => $product]);
        }


}

