<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Faqs;
use App\Models\Post;
use App\Models\Testimonial;

class SiteController extends Controller
{
    public function index() {
        $homeSections = Home::whereNot('hide', true)->get();

        return view('site.index', ['homeSections' => $homeSections]);
    }

    public function about() {
        $aboutSections = About::whereNot('hide', true)->get();

        return view('site.about', ['aboutSections' => $aboutSections]);
    }

    public function blog() {
        $posts = Post::whereNot('hide', true)->get();

        return view('site.blog', ['posts' => $posts]);
    }

    public function blogShow($title) {
        $post = Post::find()->where('uri_title', $title)->one();

        return view('site.blog-show', ['post' => $post]);
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
