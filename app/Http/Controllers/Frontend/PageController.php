<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($lang = 'uz')
    {
        $rooms=Room::latest()->take(4)->get();
        $banner=Banner::latest()->first();
        $images = $banner->getMedia('banner-images');
        $icons=Type::all();
        $contact = Contact::where('lang', $lang)->first();
        $about=About::latest()->first();
        $aboutImages = $about->getMedia('about-images');
        return view('frontend.home', compact('banner', 'images', 'rooms', 'lang', 'icons', 'contact', 'about', 'aboutImages'));
    }

    public function about($lang)
    {
        $about=About::latest()->first();
        $aboutImages = $about->getMedia('about-images');
        return view('frontend.about', compact('about', 'lang', 'aboutImages'));
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
        $rooms=Room::all();
        return view('frontend.booking', compact('rooms'));
    }

    public function roomDetail($lang, $id)
    {
        $contact=Contact::latest()->first();
        $room=Room::findOrFail($id);
        return view('frontend.room-details', compact('room', 'lang', 'contact'));
    }
}
