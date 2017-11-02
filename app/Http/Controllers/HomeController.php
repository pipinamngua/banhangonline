<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\Image;
use App\SuggestProducts;
use DB;
use App\Category;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Product::all();
        $newProduct = Product::orderBy('id', 'DESC')
                            ->take(4)
                            ->get();
        $productDiscount = Product::select('*')
                                ->where('discount','<>',0)
                                ->orderBy('id','DESC')
                                ->take(4)
                                ->get();
        $slide = Slide::select('*')
                        ->orderBy('id', 'DESC')
                        ->take(3)
                        ->get();
        
        return view('home', [ 
            'slide' => $slide,
            'list' => $list,
            'newProduct' => $newProduct,
            'productDiscount' => $productDiscount,
        ]);
    }
    
    public function loaiSanPham() {
        $category = Category::all();

        return view('layouts/header-and-footer',['category' => $category]);
    }
    
    public function getLoaiSanPham($category_id)
    {
        $category = Product::where('category_id', $category_id)->get();

        return view('clients.home.page-loai-san-pham', ['product' => $category]);
    }
    public function getListNewProduct()
    {
        $newProduct = Product::select('*')
                            ->orderBy('id','DESC')
                            ->get();

        return view('clients.home.list-new-product', ['newProduct' => $newProduct]);
    }

    public function getListDiscountProduct()
    {
        $discountProduct = Product::where('discount','<>',0)
                                ->orderBy('id','DESC')
                                ->get();
                                
        return view('clients.home.list-discount-product', ['discountProduct' => $discountProduct]);
    }


    public function searchpage(Request $request)
    {
        if(isset($request->keyword) && $request->keyword != "")
        {
            $search = $request->keyword;
            $timkiem = Product::where('name', 'like', '%'. $search. '%')->get();

            return view('clients.home.page-tim-kiem', ['search' => $timkiem]);
        }
    }


}


