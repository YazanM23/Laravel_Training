<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $allPosts=[
            ['id'=>1,'name'=> 'Yazan1'],
            ['id'=>2,'name'=> 'Yazan2'],
        ];
        
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($postsId){
        $allPosts=[
            ['id'=>1,'name'=> 'Yazan1'],
            ['id'=>2,'name'=> 'Yazan2'],
        ];

        return view('posts.show',['posts'=>$allPosts[$postsId-1]]);
    }

    
}
