<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class ProductController extends Controller
{
    public function Index(){
        
    	return view('backend.product',['isActive'=>'product']);
    }
    public function getAdd(){
        $category = Category::where('delete','0')->get();
    	return view('backend.product-add',['isActive'=>'product','category'=>$category]);
    }
    public function postAdd(Request $request){
        // dd($request);
        $filename='';
        if($request->hasFile('img_path')){
            $filename=$request->file('img_path')->getClientOriginalName();
            $request->file('img_path')->move('upload',$filename);
        }
        $product = new Product;
        $product->ten_sanpham =$request->ten_sanpham;
        $product->ma_sanpham  =$request->ma_sanpham;
        $product->cong_suat   =$request->cong_suat;
        $product->kich_thuoc  =$request->kich_thuoc;
        $product->khoet_lo    =$request->khoet_lo;
        $product->gia         =$request->gia;
        $product->thong_so    =$request->thong_so;
        $product->category_id =$request->category_id;
        $product->img_path    =$filename;
        $save = $product->save();
        if($save){
            return redirect()->route('admin.product');
        }else{
            return view('backend.product-add',['isActive'=>'product'])->withErrors();
        }
    	
    }
}
