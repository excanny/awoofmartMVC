<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;

class CartController extends Controller
{
    public function AddToCart(Request $request)
    {
        $product = DB::table('tproducts')->where('fproduct_id', $request->product_id)->first();
        $cart_exists = Cart::where('fproduct_id', $request->product_id)->where('fshopper_id','=', $_COOKIE["_fhv"])->first();
        if(is_null($cart_exists))
        {
            $saved = $this->SaveCart($product);
            if($saved > 0)
            {
               
                //$this->ClearWishList($product);
                return json_encode(true);
            }
        }  
        else
        {
            $updated = $this->UpdateCart($product);
           //$this->ClearWishList($product);
            if($updated > 0)
            {
                
                //$this->ClearWishList($product);
                return json_encode(true);
            }
        }
    }

    private function SaveCart($product)
    {
       return Cart::create([
            'fproduct_id' => $product->fproduct_id,
            'fmerchant_id' => $product->fmerchant_id,
            'fprice' => $product->fprice,
            'fquantity' => 1,
            'fshopper_id' => $_COOKIE["_fhv"]
        ]);
    }

    private function UpdateCart($product)
    {
        $quantity = Cart::where('fproduct_id', $product->fproduct_id)->where('fshopper_id', $_COOKIE["_fhv"])->value('fquantity');
         
        return Cart::where('fproduct_id', $product->fproduct_id)->where('fshopper_id', $_COOKIE["_fhv"])->update(['fquantity' => $quantity + 1]);
    }

    // private function ClearWishList($product)
    // {
    //     Wishlist::where('fshopper_id','=', $_COOKIE["_fhv"])->where('fproduct_id',  $product->fproduct_id)->delete();
    // }

    public function CartDetails(Type $var = null)
    {
        $total_cart_item = 0;
        $total_price= 0;
        $output = "";
        $cart_contents = Cart::where('fshopper_id', $_COOKIE["_fhv"])->select('fproduct_id')->get();
        if(is_null($cart_contents))
        {
            $output = '<div class="col-lg-12"><p>Your Cart is empty</p></div>';
        }
        else
        {
            foreach ($cart_contents as $item) 
            {

                $product = DB::table('tproducts')->where('fproduct_id', $item->fproduct_id)->first();
                $output .='
                       <li>
                            <div class="shopping-cart-img">
                                <a href=""><img alt="AwoofMart" src="'.asset('assets1/images/thumbnail-3.jpg').'"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h4><a href="">'.$product->fproduct_id.'</a></h4>
                                <h4><span>'.$product->fquantity.' × </span>₦'.$product->fprice.'</h4>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                            </div>
                        </li>';

                    $total_price = $total_price + ($product->fquantity * $product->fprice);
                    $total_cart_item++;
                    // $packaging_cost_total = $packaging_cost_total + ($item->fquantity * $item->fpackaging_cost);
                    
            }

        }

        $data = array(
            'cart_details' => $output,
            'total_price' =>  $total_price,
            'total_cart_item' => $total_cart_item,
        );	

        return json_encode($data);
    }
}
