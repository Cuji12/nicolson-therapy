<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Faqs;

class SiteController extends Controller
{
    public function index() {
        $homeSections = Home::whereNot('hide', true)->get();

        return view('site.index', ['homeSections' => $homeSections]);
    }

    public function about() {
        $homeSections = About::whereNot('hide', true)->get();

        return view('site.about', ['aboutSections' => $aboutSections]);
    }

    public function blog() {
        $posts = Post::whereNot('hide', true)->get();

        return view('site.blog', ['posts' => $posts]);
    }

    public function contact() {

        return view('site.contact');
    }

    public function faqs() {
        $faqs = Faqs::whereNot('hide', true)->get();

        return view('site.faqs', ['faqs' => $faqs]);
    }

    public function testimonials() {
        $testimonials = Testimonial::whereNot('hide', true)->get();

        return view('site.testimonials', ['testimonials' => $testimonials]);
    }

    public function therapyContract() {
        $therapyContract = TherapyContract::whereNot('hide', true)->one();

        return view('site.therapy-contract', ['homeSections' => $homeSections]);
    }
}
