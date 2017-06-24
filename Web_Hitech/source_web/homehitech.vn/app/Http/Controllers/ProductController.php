<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests\ProductRequest;
use Session,Auth;
class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function Index(){        
    	return view('backend.product',['isActive'=>'product']);
    }
    public function getAdd(){
        $category = Category::where('delete','0')->get();
    	return view('backend.product-add',['isActive'=>'product','category'=>$category]);
    }
    public function postAdd(ProductRequest $request){
        $filename='';
        if($request->hasFile('img_path')){
            $filename=$request->file('img_path')->getClientOriginalName();
            $request->file('img_path')->move('upload',$filename);
        }
        $product = new Product;
        $product->ten_sanpham = $request->ten_sanpham;
        $product->ma_sanpham  = $request->ma_sanpham;
        $product->cong_suat   = $request->cong_suat;
        $product->kich_thuoc  = $request->kich_thuoc;
        $product->khoet_lo    = $request->khoet_lo;
        $product->gia         = $request->gia;
        $product->thong_so    = $request->thong_so;
        $product->category_id = $request->category_id;
        $product->img_path    = $filename;
        $product->delete      = 0;
        $product->created_by  = Auth::user()->id;
        $save = $product->save();
        if($save){
            Session::flash('status', 'Thêm sản phẩm mới thành công!');
            return redirect()->route('admin.product');
        }else{
            return redirect()->back()->withErrors();
        }   	
    }
    public function getList(){
        $product = Product::where('product.delete','0')->join('users','product.created_by','=','users.id')->join('category','category.id','=','product.category_id')->select('product.id as id','product.ten_sanpham as ten_sanpham','product.ma_sanpham as ma_sanpham','product.gia as gia','category.name as category','users.name as created_by','product.created_at as created_at')->get();
        return response()->json(array('data'=>$product));
    }
    public function getEdit($id){
        $product = Product::where([['delete','0'],['id',$id]])->select('id','ten_sanpham','ma_sanpham','cong_suat','kich_thuoc','khoet_lo','gia','img_path','category_id','thong_so')->get();
        $category = Category::where('delete','0')->get();
        return view('backend.product-edit',['isActive'=>'product','data'=>$product,'category'=>$category]);
    }

    public function postEdit(ProductRequest $request){
        $filename='';
        if($request->hasFile('img_path')){
            $filename=$request->file('img_path')->getClientOriginalName();
            $request->file('img_path')->move('upload',$filename);
        }
        if($filename==''){
            $update = Product::where('id',$request->id)->update([
            'ten_sanpham' => $request->ten_sanpham,
            'ma_sanpham' => $request->ma_sanpham,
            'cong_suat' => $request->cong_suat,
            'kich_thuoc' => $request->kich_thuoc,
            'khoet_lo' => $request->khoet_lo,
            'gia' => $request->gia,
            'thong_so' => $request->thong_so,
            'category_id' => $request->category_id
            ]);    
        }else{
            $update = Product::where('id',$request->id)->update([
            'ten_sanpham' => $request->ten_sanpham,
            'ma_sanpham' => $request->ma_sanpham,
            'cong_suat' => $request->cong_suat,
            'kich_thuoc' => $request->kich_thuoc,
            'khoet_lo' => $request->khoet_lo,
            'gia' => $request->gia,
            'thong_so' => $request->thong_so,
            'category_id' => $request->category_id,
            'img_path' => $filename
            ]);
        }       
        if($update){
            Session::flash('status', 'Sửa sản phẩm thành công!');
            return redirect()->route('admin.product');
        }else{
            return redirect()->back()->withErrors();
        }       
    }
    public function postDelete(Request $request){
        $update = Product::where('id',$request->id)->update(['delete'=>1]);
        if($update){
            return response()->json(array('status'=>'ok'));
        }else{
            return response()->json(array('status'=>'ng'));
        }
    }

}
