<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{


public function store(){
    try {
        $api_url = 'https://fakerapi.it/api/v1/books?_quantity=100 ';
        $response = Http::get($api_url);
        $data = json_decode($response->body(), true);

        foreach ($data['data'] as $post) {

            Product::updateOrCreate(
                ['id' => $post['id']],
                [
                    'id' => $post['id'],
                    'title' => $post['title'],
                    'author' => $post['author'],
                    'genre' => $post['genre'],
                    'description' => $post['description'],
                    'isbn' => $post['isbn'],
                    'image' => $post['image'],
                    'published' => $post['published'],
                    'publisher' => $post['publisher']
                ]
            );
        }

        return response()->json(['message' => 'Data stored successfully'], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


public function display(){
        $data=Product::all();
        // dd($data);
        return view('admin.display',compact('data'));
}



public function save(Request $a) {
    $file = $a->file('image');
    $filename = 'image' . time() . '.' . $a->image->extension();


    if ($file->move("upload/", $filename)) {
        $data = new Product();
        $data->title = $a->title;
        $data->author = $a->author;
        $data->genre = $a->genre;
        $data->description = $a->description;
        $data->isbn = $a->isbn;
        $data->image = $filename;
        $data->published = $a->published;
        $data->publisher = $a->publisher;

        $data->save();

        if ($data) {

            return redirect('/admin/display');
        }
    }


    return response()->json(['error' => 'File upload failed'], 500);
}


public function view($id){
    $data=Product::find($id);
    // echo'<pre>';
    // print_r($data);
    return view('admin.view',compact('data'));
}

public function delete($id){
    $d=Product::find($id);
    $deleted=$d->delete();
    if($deleted){
        return redirect('admin/display');
    }
}
public function edit($id){
    //echo $id;
    $data=Product::find($id);
    //echo'<pre>';
    //print_r($data);
    return view('admin.edit',compact('data'));
}


public function update(Request $a)
{
    $data = Product::find($a->id);


    if ($a->hasFile('image')) {
        $file = $a->file('image');
        $filename = 'image' . time() . '.' . $a->image->extension();
        $file->move("upload/", $filename);
        $data->image = $filename;
    }


    $data->title = $a->title;
    $data->author = $a->author;
    $data->genre = $a->genre;
    $data->description = $a->description;
    $data->isbn = $a->isbn;
    $data->published = $a->published;
    $data->publisher = $a->publisher;


    $data->save();


    return redirect('admin/display');
}


public function index(Request $request)
{
    $query = $request->input('search');

    if ($query) {
        $products = Product::search($query)->get();
    } else {
        // If no search query, get all products
        $products = Product::all();
    }

    return view('admin.users', compact('products'));

}

// public function show($id){
//     $data=Product::find($id);
//     // echo'<pre>';
//     // print_r($data);
//     return view('admin.productdetails',compact('data'));
// }






}
