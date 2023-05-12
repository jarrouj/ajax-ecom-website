<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use Illuminate\Http\Request;
use DataTables;
class ProductController extends Controller
{
    public function view_product(){
        $category = Category::all();


        return view('admin.products',compact('category'));
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Product::latest()->get();

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
        Product::updateOrCreate([
                    'id' => $request->product_id
                ],
                [
                    'name' => $request->name,
                    'details' => $request->details,
                    'catagory' => $request->catagory,
                    'qty' => $request->qty,
                    'price' => $request->price,
                    'discount_price' => $request->discount_price,
                    'image' => $request->image,
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
        $product = Product::find($id);
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
        Product::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }
    public function cat_page(){

        return view('admin.products');
    }
}
