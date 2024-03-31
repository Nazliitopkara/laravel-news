<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Category;
use App\Models\News;


class Homepage extends Controller
{
    public function index(){
        $data['news']=News::orderBy('created_at','desc')->get();
        $data['categories']=Category::inRandomOrder()->get();
        return view("front.homepage", $data);
    }

    public function single($slug){

        $news=News::where("slug",$slug)->first() ?? abort(403, "Böyle Bir Yazı Bulunamadı");

        $news->increment("hit");
       
        $data['categories']=Category::inRandomOrder()->get();
        $data['news'] = $news; // Pass $new variable to the view
        return view("front.single", $data);
    }
}
