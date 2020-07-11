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
use App\Models\VideoBanner;
use App\Models\CounterSetting;
use App\Models\YangiliklarBolimlari;

use DB;

use App;
use Session;
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


     // App::setLocale($locale);

        /// Manashu ikkta qismga


        $firstBanner = Firstbanner::first();
        $yangilikoptions = YangilikOptions::first();

       ////
        $counter = CounterSetting::all();

        $video = VideoBanner::first();
        $yangiliklarCategory = YangiliklarBolimlari::all();

        $gallereya = Gallereya::latest()->orderBy("created_at", 'desc')->take(16)->get();

        $yangiliklar = Yangiliklar::latest()->orderBy("created_at", 'desc')->where('active', '1')->get()->take(8);
        $elonlar = Elonlar::latest()->orderBy("created_at", 'desc')->get()->take(8);


        //dd($firstBanner->title);

        return view('makets.front.index', compact('counter', 'video', 'elonlar', 'sliders', 'cards', 'firstBanner', 'yangiliklar', 'yangilikoptions', 'gallereya'));
    }

   


      /**
     * Asosiy sahifadagi yangilikni detalis ga o'tqazadi
     * YANGILIKLAR
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */

    public function yangilikShow($slug)

    {



        $yangiliklar = Yangiliklar::where('slug',$slug)->firstOrFail();



        /* *********************************
            // Kiruvchilarni hisoblash.
        ********************************** */
        $count = $yangiliklar->id;

        $blogKey = 'yangiliklar_' . $count;

        if (!Session::has($blogKey)) {
            Yangiliklar::where('id', $count)->increment('count');
            Session::put($blogKey, 1);
        }


        /* *********************************
            // Eng ko'p ko'rilgan yangiliklar
        ********************************** */
        $popular = Yangiliklar::all()->sortByDesc('count')->take(6);


        /* ********************************************
            // Bitta oldingi va Bitta keyingi postlar
        ********************************************* */
        $oldingisi = Yangiliklar::where('id', '<', $yangiliklar->id)->orderBy('id','desc')->first();
        $keyingisi = Yangiliklar::where('id', '>', $yangiliklar->id)->orderBy('id')->first();


        /* ********************************************
            // Yangiliklar bo'limlari va unda nechta yangilik borligi
        ********************************************* */
        $category = YangiliklarBolimlari::all();


         /* ********************************************
            // So'ngi yangiliklar va uni nechtaligi
        ********************************************* */

        $over = Yangiliklar::orderBy('id','desc')->get()->take(6);
        //dd($over);

        if(!$yangiliklar)
        {
            // Keyinchalik error 404 sahifa qilingach o'tqaziladi.
           return redirect('/')->withErrors('Bunday yangilik topilmadi.');
        }


        return view('makets.front.yangilik_sign_show_page',
        compact(
            'over',
            'category',
            'popular',
            'oldingisi',
            'keyingisi',
            'yangiliklar'
            ));

    }


   /**
     * Asosiy sahifadagi e'lonlar detalis ga o'tqazadi
     * E'LONLAR
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */

    public function elonlarShow($slug)

    {



        $elonlar = Elonlar::where('slug',$slug)->firstOrFail();



        /* *********************************
            // Kiruvchilarni hisoblash.
        ********************************** */
        $count = $elonlar->id;

        $blogKey = 'elonlar_' . $count;

        if (!Session::has($blogKey)) {
            Elonlar::where('id', $count)->increment('count');
            Session::put($blogKey, 1);
        }


        /* *********************************
            // Eng ko'p ko'rilgan yangiliklar
        ********************************** */
        $popular = Elonlar::all()->sortByDesc('count')->take(6);


        /* ********************************************
            // Bitta oldingi va Bitta keyingi postlar
        ********************************************* */
        $oldingisi = Elonlar::where('id', '<', $elonlar->id)->orderBy('id','desc')->first();
        $keyingisi = Elonlar::where('id', '>', $elonlar->id)->orderBy('id')->first();




         /* ********************************************
            // So'ngi yangiliklar va uni nechtaligi
        ********************************************* */

        $over = Elonlar::orderBy('id','desc')->get()->take(6);
        //dd($over);

        if(!$elonlar)
        {
            // Keyinchalik error 404 sahifa qilingach o'tqaziladi.
           return redirect('/')->withErrors("Bunday e'lon topilmadi.");
        }


        return view('makets.front.elonlar_sign_show_page',
        compact(
            'over',
            'popular',

            'elonlar'
            ));

    }
}
