<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function createpost()
    {
        return view("posts.createpost");
    }

    public function insert(Request $request)
    {
        // return $request->all();
        // dd($request->body);
        DB::table(table:'posts')->insert([

            "title"=>$request->title,
            "body"=>$request->body

        ]);

        return response("insted post and title !...");
    }
    public function getdata()
    {
        $posts=DB::table('posts')->get();
        return view("posts.getdata",compact('posts'));
    }

    public function edit($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        return view("posts.edit",compact("post"));

    }
    public function update(Request $request, $id)
    {
        DB::table("posts")->where("id",$id)->update([
            "title"=>$request->title,
            "body"=>$request->body
        ]);
        
        return redirect()->route("getname");
    }

    public function delete($id)
    {
        DB::table("posts")->where("id",$id)->delete();
        return redirect()->route("getname");
    }
    public function deleteall()
    {
        DB::table("posts")->delete();
        return redirect()->route("getname");
    }
    public function deletealltrun()
    {
        DB::table("posts")->truncate();
        return redirect()->route("getname");
    }
}
