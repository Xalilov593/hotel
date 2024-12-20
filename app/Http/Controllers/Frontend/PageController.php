<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Room;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($lang = 'uz')
    {
        $rooms=Room::latest()->take(4)->get();
        $banner=Banner::latest()->first();
        $images = $banner->getMedia('banner-images');
        return view('frontend.home', compact('banner', 'images', 'rooms', 'lang'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function rooms()
    {
        $rooms=Room::latest()->take(4)->get();
        return view('frontend.room', compact('rooms')   );
    }

    public function contact($lang)
    {
        $contact = Contact::where('lang', $lang)->first();
        return view('frontend.contact', compact('contact'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function blogDetails()
    {
        return view('frontend.blog-details');
    }

    public function booking()
    {
        return view('frontend.booking');
    }

    public function roomDetail()
    {
        return view('frontend.room-details');
    }
}
