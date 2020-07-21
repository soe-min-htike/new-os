<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('product.addproduct',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produ = new Product();
        $produ->title = $request->title;
        $produ->content = $request->content;
        $produ->price = $request->price;
        $produ->category_id = $request->category;
        $produ->user_id = $request->user_id;
        //image store public
        $imgName= uniqid() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('Upload'),$imgName);
        //Feature image store database
        $produ->feature_image = $imgName;
        //String to array
        if ($request->color != '') {
            $col = preg_split("/[|]+/", $request->color,-1,PREG_SPLIT_NO_EMPTY);
            $produ->color = serialize($col);
        }
        if ($request->size != '') {
            $siz = preg_split("/[|]+/", $request->size,-1,PREG_SPLIT_NO_EMPTY);
            $produ->size = serialize($siz);
        }
            $produ->save();

        //Multiple Image Store in images table With polymophic relation
        foreach($request->file('images')as $image){
            $img = new Image();
            $fileName = uniqid() . '_' . $image->getClientOriginalName();
            $image->move(public_path('Upload'), $fileName);
            $img->filename = $fileName;
            $img->imageable_id = $produ->id;
            $img->imageable_type = "App\Product";
            $img->save();
        }  
        return redirect('/home')->with('status', 'Product Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('showdetail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.productedit',compact('product','categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
