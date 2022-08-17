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
            //if($saved <= 0) return json_encode(false);
            
            //$this->ClearWishList($product);
            return json_encode(true); 
        }  
        else
        {
            $updated = $this->UpdateCart($product);
           //$this->ClearWishList($product);
           //if($updated <= 0) return json_encode(false);
            
            //$this->ClearWishList($product);
            return json_encode(true);
        }
    }

    public function RemoveFromCart(Request $request)
    {
        $delete_cart = Cart::where('fproduct_id', $request->product_id)->where('fshopper_id','=', $_COOKIE["_fhv"])->delete();
        if($delete_cart < 0) return json_encode(false);
        return json_encode(true);
    }

    public function ClearCart(Request $request)
    {
        $delete_cart = Cart::where('fshopper_id','=', $_COOKIE["_fhv"])->delete();
        if($delete_cart < 0) return json_encode(false);
        return json_encode(true);
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

    public function CartDetails()
    {
        $total_cart_item = 0;
        $total_price= 0;
        $output = "";
        $cart_contents = Cart::where('fshopper_id', $_COOKIE["_fhv"])->select('*')->get();
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
                                <a href="javascript:void"><img alt="AwoofMart" src="'.asset('assets1/images/thumbnail-3.jpg').'"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h4><a href="">'.$this->GetproductName($item->fproduct_id).'</a></h4>
                                <h4><span>'.$item->fquantity.' × </span>₦'.$item->fprice.'</h4>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="javascript:void"><i class="fi-rs-cross-small removefromcart" data-product_id="'.$item->fproduct_id.'"></i></a>
                            </div>
                        </li>';

                    $total_price = $total_price + ($item->fquantity * $item->fprice);
                    $total_cart_item++;
                    
            }

        }

        $data = array(
            'cart_details' => $output,
            'total_price' =>  $total_price,
            'total_cart_item' => $total_cart_item,
        );	

        return json_encode($data);
    }


    public function LoadChangeCartQuantityDetails()
    {
        $cart_contents = Cart::where('fshopper_id', $_COOKIE["_fhv"])->select('*')->get();
        if($cart_contents->count() == 0 ) $delivery_cost = 0;
        else $delivery_cost = 500;
        $output = "";
        if($cart_contents->count() < 2) $product_count_div = '<h6 class="text-body">There is <span class="text-brand">'.$cart_contents->count().'</span> product in your cart</h6>';
        else $product_count_div = '<h6 class="text-body">There are <span class="text-brand">'.$cart_contents->count().'</span> products in your cart</h6>';
        if(is_null($cart_contents))
        {
            $output .= '<div class="col-lg-12"><p>Your Cart is empty</p></div>';
        }
        else
        {
        $output .='
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h3 class="heading-2 mb-10">Your Cart</h3>
                <div class="d-flex justify-content-between">
                    '.$product_count_div.'
                    <h6 class="text-body"><a href="javascript:void" class="text-muted clearcart"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-7">
          <div class="table-responsive shopping-summery">
            <table class="table table-wishlist">
                <thead>
                    <tr class="main-heading">
                        <th class="custome-checkbox start pl-30">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                            <label class="form-check-label" for="exampleCheckbox11"></label>
                        </th>
                        <th scope="col" colspan="2">Product</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col" class="end">Remove</th>
                    </tr>
                </thead>
                <tbody>';
                   
                    $sub_total_price = 0;
                    
                    foreach ($cart_contents as $product)
                    {
                        $output .= '
                        <tr class="pt-30">
                            <td class="custome-checkbox pl-30">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                <label class="form-check-label" for="exampleCheckbox1"></label>
                            </td>
                            <td class="image product-thumbnail pt-40"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                            <td class="product-des product-name">
                                <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="javascript:void">'.$this->GetproductName($product->fproduct_id).'</a></h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width:90%">
                                        </div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-body">₦'.number_format($product->fprice, 2).' </h4>
                            </td>
                            <td class="text-center detail-info" data-title="Stock">
                                <div class="detail-extralink mr-15">
                                    <div class="detail-qtyx border radius">
                                        <a href="javascript:void" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="number" name="" value="'.$product->fquantity.'" id="quantity_input" min="1" data-product_id="'.$product->fproduct_id.'">
                                        <a href="javascript:void" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-brand">₦'.number_format($product->fquantity * $product->fprice, 2).'</h4>
                            </td>
                            <td class="action text-center" data-title="Remove"><a href="javascript:void" class="text-body removefromcart" data-product_id="'.$product->fproduct_id.'"><i class="fi-rs-trash"></i></a></td>
                        </tr>';

                        
                        $sub_total_price = $sub_total_price + ($product->fquantity * $product->fprice);
                        

                    }
            $output .='         
                </tbody>
            </table>
        </div>
        <div class="divider-2 mb-30"></div>
        <div class="cart-action d-flex justify-content-between">
            <a class="btn "><i class="fi-rs-arrow-left mr-10"></i>Continue Shopping</a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="border p-md-4 cart-totals ml-30">
            <div class="table-responsive">
                <table class="table no-border">
                    <tbody>
                        <tr>
                            <td class="cart_total_label">
                                <h6 class="text-muted">Subtotal</h6>
                            </td>
                            <td class="cart_total_amount">
                                <h4 class="text-brand text-end">₦'.number_format($sub_total_price, 2).'</h4>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" colspan="2">
                                <div class="divider-2 mt-10 mb-10"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">
                                <h6 class="text-muted">Delivery Cost</h6>
                            </td>
                            <td class="cart_total_amount">
                                <h5 class="text-brand text-end">₦'.number_format($delivery_cost, 2).'</h4></td> 
                        </tr>
                        <tr>
                        </tr> 
                        <tr>
                            <td scope="col" colspan="2">
                                <div class="divider-2 mt-10 mb-10"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">
                                <h6 class="text-muted">Total</h6>
                            </td>
                            
                            <td class="cart_total_amount">
                                <h4 class="text-brand text-end">₦'.number_format($sub_total_price + $delivery_cost, 2).'</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="javascript:void" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
        </div>
    </div>
    </div>';

        }

        $data = array(
            'change_cart_quantity_details' => $output,
        );	

        return json_encode($data);

    }

    public function UpdateCartQuantity(Request $request)
    {
        $updated = Cart::where('fproduct_id', $request->product_id)->update(['fquantity' => $request->quantity]);
        return json_encode($updated);
    }

    public function GetproductName($product_id)
    {
        $product = DB::table('tproducts')->where('fproduct_id', $product_id)->first();
        return $product->fitem_name;
    }
}
