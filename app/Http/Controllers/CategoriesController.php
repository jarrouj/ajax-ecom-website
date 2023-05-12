<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Category::latest()->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.Categorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::updateOrCreate([
                    'id' => $request->product_id
                ],
                [
                    'name' => $request->name,

                ]);

        return response()->json(['success'=>'Product saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Category::find($id);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }
    public function cat_page(){

        return view('admin.Categorie');
    }
    // public function add_product(Request $request){
    //     $product = new Product;
    //     $product->name=$request->name;
    //     $product->details=$request->details;
    //     $product->catagory=$request->catagory;
    //     $product->price=$request->price;
    //     $product->qty=$request->qty;
    //     $product->discount_price=$request->discount_price;

    //     // save the image file to storage/app/public/products directory
    //     // $image_name = $request->file('image')->getClientOriginalName();
    //     // $request->file('image')->storeAs('public/products', $image_name);
    //     // $product->image = $image_name;

    //     $product->save();

    //     return redirect()->back();
    //     }

}
