<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class getproductController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //$products=Product::all();
        //$products = DB::table('products')->get();
        $products = Product::latest()->paginate(5);
        return view('pages.productlist', compact('products'));


        //return view('pages.productlist', ['products' => $products]);
    }
    
   

    public function store(Request $request) {
        $product = new Product();
        
        $product -> id =$request['txtCode'];
        $product->product_name = $request['txtProductName'];
        $product->unit = $request['txtUnit'];
        $product->product_group = $request['drpdwnProductType'];
        $product->purchase_price = $request['txtPurchasePrice'];
        $product->sales_price = $request['txtSalesPrice'];
        $product -> status = $request['drpdwnStatus'];
        
        $product -> product_date=$request['dtp'];
        
        

        if ($product->save()) {
            return redirect('/getproduct');
        }
    }

}
