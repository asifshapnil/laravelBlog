<?php

namespace App\Http\Controllers;


use App\Post;
use App\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function showPosts($id){
      $posts = Post::where('catagory_id', $id)->get();
      $catagory = Catagory::where('id',$id)->first();
      return view ('posts.catagory')->with(['posts'=> $posts, 'catagory'=> $catagory]);
    }

    public function seacatagories(){
      $catagory = Catagory::all();
      return view('catagories.allcatagories')->with('catagory', $catagory);
    }

    public function editCatagory($id){
      $catagory = Catagory::where('id', $id)->first();
      return view('catagories.updateCatagory')->with('catagory', $catagory);
    }

    public function addCatagory(){

      return view('catagories.addcatagory');
    }


    public function storeCatagories(Request $request){

      $catagory = new Catagory;
      $catagory->catagory = $request->input('catagory_name');
      $catagory->save();

      return redirect('/seecatagories')->with('success', 'Catagory updated successfullly');
    }

    public function updateCatagories(Request $request, $id){

      $catagory = Catagory::where('id', $id)->first();
      $catagory->catagory = $request->input('catagory_name');
      $catagory->save();

      return redirect('/seecatagories')->with('success', 'Catagory updated successfullly');
    }

    public function  deleteCatagory($id){

      $catagory = Catagory::where('id', $id)->first();
      $catagory->delete();

      return redirect('/seecatagories')->with('success', 'Catagory deleted successfullly');
    }
}
