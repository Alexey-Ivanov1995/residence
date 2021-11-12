<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Room;
use Illuminate\Http\Request;
use function Doctrine\Common\Cache\Psr6\get;

class FrontController extends Controller
{

    public function home()
    {
     return view('front-end.home');
    }

    public function showRoom($id){

        $roo = Room::where('id',$id)->firstOrFail();

//             $blog = Blog::with('comments')->where('slug', $slug)->firstOrFail();

        return view('front-end.room-detail',compact('roo'));

    }
    public function room()
    {
        $roo = Room::get();
        $menu = Apartment::get();

        return view('front-end.room-detail',compact('roo','menu'));
    }
    public function apartments()
    {
        $room = Room::get();


        return view('front-end.apartments',compact('room'));
    }

    public function services()
    {
        return view('front-end.services');
    }
    public function gallery()
    {
        return view('front-end.gallery');
    }
    public function about()
    {
        return view('front-end.about');
    }
    public function reviews()
    {
        return view('front-end.reviews');
    }
    public function contact()
    {
        return view('front-end.contact');
    }
    public function faq()
    {
        return view('front-end.faq');
    }
    public function satisfaction()
    {
        return view('front-end.satisfaction');
    }
    public function cancellation()
    {
        return view('front-end.cancellation');
    }
    public function arrival()
    {
        return view('front-end.arrival');
    }
    public function pragueSights()
    {
        return view('front-end.prague-sights');
    }
    public function transfers()
    {
        return view('front-end.transfers');
    }
    public function maidServices()
    {
        return view('front-end.maid-services');
    }


}
