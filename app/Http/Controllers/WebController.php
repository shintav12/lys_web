<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Post;
use App\Phrase;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function Index(){
        
        $posts = Post::limit(5)->get();
        $phrases = Phrase::orderBy("id","DESC")->limit(3)->get();
        foreach($posts as $post){
            $post->images = DB::select(DB::raw("select * from images where object_type = 'post' and object_id =".$post->id));
        }

        $template = [];

        $template["phrases"] = $phrases;
        $template["posts"] = $posts;
        return view("sections.index", $template);
    }
}
