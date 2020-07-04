<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GridCard;
use App\Models\Sliders;
use App\Models\Yangiliklar;
use App\Models\Firstbanner;
use App\Models\YangilikOptions;
use App\Models\Gallereya;
use App\Models\Elonlar;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = GridCard::get();
        $sliders = Sliders::get();




        /// Manashu ikkta qismga 

       
        $firstBanner = Firstbanner::first();   
        $yangilikoptions = YangilikOptions::first();
      
       ////





        $gallereya = Gallereya::latest()->orderBy("created_at", 'desc')->take(16)->get();
      
        $yangiliklar = Yangiliklar::latest()->orderBy("created_at", 'desc')->where('active', '1')->get()->take(8);
        $elonlar = Elonlar::latest()->orderBy("created_at", 'desc')->get()->take(8);


        //dd($firstBanner->title);
        
        return view('makets.front.index', compact('elonlar', 'sliders', 'cards', 'firstBanner', 'yangiliklar', 'yangilikoptions', 'gallereya'));
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
        //
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
