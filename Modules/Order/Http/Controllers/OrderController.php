<?php

namespace Modules\Order\Http\Controllers;

use Modules\Order\Entities\Order;
use Modules\Cart\Entities\Cart;
use Modules\Order\Entities\Orderdetail;
use App\Models\Address;
use App\Models\Product;
use App\Models\User;
use App\Models\Variations;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class OrderController extends Controller
{



    // filter data for order page
    public function orderfilter(Request $request)
    {

        $product_ids = [];
        $orders = [];

        if ($request['search'] != null) {
            $products = Product::where('sku', 'LIKE', $request->search)->orWhere('id', 'Like', $request->search)->get();

            foreach ($products as $ids) {
                array_push($product_ids, $ids->id);
            }
        }


        if ($request->status == '1') {
            $variabls = DB::table('system_variabls')->get();
            $cart_orders = Cart::where('status', 1);
            if ($request['min_date'] != null) {
                $req_min = $request['min_date'];
                $cart_orders = $cart_orders->where('created_at', '>', $req_min);
            }
            if ($request['max_date'] != null) {
                $max_date = $request['max_date'];
                $cart_orders = $cart_orders->where('created_at', '>', $max_date);

            }

            if ($request['search'] != null) {
                $cart_orders = $cart_orders->where('product_id', $product_ids);
            }

            $cart_data =  $cart_orders->get();
            $result = '';
            $i=1;
            $base_path = '/uploads/gallery/';
            foreach ($cart_data as $data) {
                $product = Product::with('category', 'brand')
                    ->join('image_tables', 'products.id', '=', 'image_tables.use_id')
                    ->where('status', 'published')
                    ->join('galleries', 'image_tables.image_id', '=', 'galleries.id')
                    ->where('use_type', 'Main_product_image')
                    ->select('products.*', 'galleries.location')->where('products.id', $data->product_id)->get();
                if (isset($product[0])) {

                    $varients = DB::table('orderdetails')->where('product_id', $data->product_id)->get();

                    $result = $result.'<h4 class=" mt-4">
             <span>' . date('y-m-d h:i A', strtotime($data->created_at)) . '</span>
            </h4>
            <h5>'.$i++.' Products</h5>
            <div class="row">
                <div class="col-md-3">
                    <img  src="' . $base_path . $product[0]->location . '">
                </div>

                <div class="col-md-6">
                    <h6>' . $product[0]->name . '</h6>
                    <p>Sub Order Num:' . $product[0]->id . '</p>
                    <p>Size: 0-6 Months</p>
                    <p>Product SKU: ' . $product[0]->sku . '</p>
                    <!-- <p>Product Id: 1G2I4C6G</p> -->
                </div>
            </div>
        </div>';
                }
            }
            return $result;
        }




        if ($request->status == '2') {
            $order = Order::where('status', '2');
            $system_var =  DB::table('system_variabls')->get();

            if ($product_ids != []) {
                $order = Order::where('producr_id', $product_ids);
            }
            if ($request['min_date'] != null) {
                $min_date = $request['min_date'];
                $order  = $order->where('created_at', '>', $min_date);
            }
            if ($request['max_date'] != null) {
                $max_date = $request['max_date'];
                $order  = $order->where('created_at', '<', $max_date);
            }
            if ($request['dispached_max'] != null) {
                $dispached_max = $request['dispached_max'];
                $dispached_max = date('Y-m-d', strtotime($dispached_max . '+' . $system_var[0]->fetch_max_days));
                $order  = $order->where('created_at', '<', $dispached_max);
            }
            if ($request['dispached_min'] != null) {
                $dispached_min = $request['dispached_min'];
                $dispached_min = date('Y-m-d', strtotime($dispached_min . '+' . $system_var[0]->fetch_min_days));
                $order  = $order->where('created_at', '<', $dispached_min);
            }
            // if ($request['order_no'] != null) {
            //     $order_no = $request['order_no'];
            //     $order  = $order->where('order_id', 'LIKE', $order_no);
            //     return "ok";

            // }
            $orderss= $order->get();
            $result = '';
            $base_path = '/uploads/gallery/';
            $i=1;
            foreach ($orderss as $order) {
                $product = Product::with('category', 'brand')
                    ->join('image_tables', 'products.id', '=', 'image_tables.use_id')
                    ->where('status', 'published')
                    ->join('galleries', 'image_tables.image_id', '=', 'galleries.id')
                    ->where('use_type', 'Main_product_image')
                    ->select('products.*', 'galleries.location')->where('products.id', $order->product_id)->get();

                if (isset($product[0])) {

                    // geting user data
                    $user_data = User::where('id', $order->user_id)->get();
                    $address = DB::table('addresses')->where('id', $order->address_id)->get();
                    $varients = DB::table('orderdetails')->where('product_id', $order->product_id)->get();

                    $result = $result.'<h4 class=" mt-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                Order No.' . $order->order_id . '<span>' . date('y-m-d h:i A', strtotime($order->created_at)) . '</span>
            </h4>
            <h5>'.$i++.' Products</h5>
            <div class="row">
                <div class="col-md-3">
                    <img  src="' . $base_path . $product[0]->location . '">
                </div>

                <div class="col-md-6">
                    <h6>' . $product[0]->name . '</h6>
                    <p>Sub Order Num:' . $product[0]->id . '</p>
                    <p>Size: 0-6 Months</p>
                    <p>Product SKU: ' . $product[0]->sku . '</p>
                    <!-- <p>Product Id: 1G2I4C6G</p> -->
                </div>

                <div class="col-md-3">
                    <h3 class="quality"' . $user_data[0]->name . '</h3>
                    <h3 class="quality">  ' . $address[0]->address . '</h3>
                    <h3 class="quality">Qty: ' . $varients[0]->quantity . '</h3>
                    <h3 class="quality">Price :' . $order->amount . ' </h3>
                </div>
                <div class="form-group col-md-3 pt-3">
                    <input type="submit" value="Download Label Down" class="clear">
                </div>
                <div class="form-group col-md-2 pt-3">
                    <input type="submit" value="Minifest">
                </div>
            </div>
        </div>';
                }
            }

            return $result;
        }
    }
    //order check or creation 
    function create(Request $request)
    {


        if (isset($request->address)) {
            $address = Address::where('user_id', Auth::user()->id)->find($request->address);

            if ($address) {
                if ($request->ver_id > 0) {
                    $var_price = Variations::find($request->ver_id)->price;
                    $var_quantity = Variations::find($request->ver_id)->quantity;
                    if ($var_quantity > $request->qty) {

                        $api = new Api('rzp_test_Im6GcXajBHdHvh', '3xJ1wk8vIRfCOx9PvYPjkbsP');
                        $api_order = $api->order->create([

                            'receipt'   => now()->timestamp,
                            'amount'    => $var_price * $request->qty * 100,
                            'currency'  => 'INR'
                        ]);


                        $order = new Order;

                        $order->order_id   = $api_order->id;
                        $order->user_id    = Auth::user()->id;
                        $order->amount     = $var_price * $request->qty;
                        $order->address_id = $request->address;
                        $order->status     = '1';
                        $order->product_id = $request->pro_id;


                        $order->save();

                        $order_id = $order->id;

                        $order_detail = new Orderdetail;

                        $order_detail->order_id = $order_id;
                        $order_detail->product_id = $request->pro_id;
                        $order_detail->variant_id = $request->ver_id;
                        $order_detail->quantity = $request->qty;

                        $order_detail_done = $order_detail->save();

                        if ($order_detail_done) {

                            $address_details = Address::find($request->address);

                            $data = [

                                "key"               => 'rzp_test_Im6GcXajBHdHvh',
                                "amount"            => $var_price * $request->qty * 100,
                                "name"              => "Ecom",
                                "description"       => "Buy best price",
                                "image"             => "https://cdn.razorpay.com/logos/FFATTsJeURNMxx_medium.png",
                                "prefill"           => [
                                    "name"              => $address_details->name . $address_details->lname,
                                    "email"             => $address_details->email,
                                    "contact"           => $address_details->phone,
                                ],

                                "theme"             => [
                                    "color"             => "#99cc33"
                                ],
                                "order_id"          => $api_order->id,
                            ];


                            return view('order::index')
                                ->with('data', $data)
                                ->with('order_id', $api_order->id);
                        }
                    } else {
                        return redirect()->back()->with('wrong', 'Sorry range is out of stock');
                    }
                } else {
                    $price = Product::find($request->pro_id)->price;

                    $quantity = Product::find($request->pro_id)->quantity;

                    $address = Product::find($request->pro_id)->quantity;

                    if ($quantity > $request->qty) {

                        $api = new Api('rzp_test_Im6GcXajBHdHvh', '3xJ1wk8vIRfCOx9PvYPjkbsP');
                        $api_order = $api->order->create([

                            'receipt'   => now()->timestamp,
                            'amount'    => $price * $request->qty * 100,
                            'currency'  => 'INR'
                        ]);

                        $order = new Order;

                        $order->order_id   = $api_order->id;
                        $order->user_id    = Auth::user()->id;
                        $order->amount     = $price * $request->qty;
                        $order->address_id = $request->address;
                        $order->status     = '1';
                        $order->product_id = $request->pro_id;


                        $order->save();

                        $order_id = $order->id;

                        $order_detail = new Orderdetail;

                        $order_detail->order_id = $order_id;
                        $order_detail->product_id = $request->pro_id;
                        $order_detail->quantity = $request->qty;

                        $order_detail_done = $order_detail->save();

                        if ($order_detail_done) {

                            $address_details = Address::find($request->address);

                            $data = [

                                "key"               => 'rzp_test_Im6GcXajBHdHvh',
                                "amount"            => $price * $request->qty * 100,
                                "name"              => "Ecom",
                                "description"       => "Buy best price",
                                "image"             => "https://cdn.razorpay.com/logos/FFATTsJeURNMxx_medium.png",
                                "prefill"           => [
                                    "name"              => $address_details->name . $address_details->lname,
                                    "email"             => $address_details->email,
                                    "contact"           => $address_details->phone,
                                ],

                                "theme"             => [
                                    "color"             => "#99cc33"
                                ],
                                "order_id"          => $api_order->id,
                            ];


                            return view('order::index')
                                ->with('data', $data)
                                ->with('order_id', $api_order->id);
                        }
                    } else {
                        return redirect()->back()->with('wrong', 'Sorry range is out of stock');
                    }
                }
            } else {
                return redirect()->back()->with('wrong', 'Sorry address not found');
            }
        } else {

            return redirect()->back()->with('wrong', 'Sorry something went worng with address');
        }
    }

    function cart_order(Request $request)
    {
        if (isset($request->address)) {
            $address = Address::where('user_id', Auth::user()->id)->find($request->address);

            if ($address) {
                $cart = Cart::with('product', 'variant')
                    ->where('user_id', Auth::user()->id)
                    ->get();

                $total_price = 0;

                if (count($cart) > 0) {

                    foreach ($cart as $item) {

                        if ($item->variant_id) {
                            if ($item->quantity < $item->variant->quantity) {
                                $total_price = $total_price + $item->variant->price * $item->quantity;
                            }
                        } else {
                            if ($item->quantity < $item->product->qty) {
                                $total_price = $total_price + $item->product->unit_price * $item->quantity;
                            }
                        }
                    }

                    $api = new Api('rzp_test_Im6GcXajBHdHvh', '3xJ1wk8vIRfCOx9PvYPjkbsP');

                    $api_order = $api->order->create([

                        'receipt'   => now()->timestamp,
                        'amount'    => $total_price * 100,
                        'currency'  => 'INR'
                    ]);



                    $order = new Order;

                    $order->order_id   = $api_order->id;
                    $order->user_id    = Auth::user()->id;
                    $order->amount     = $total_price;
                    $order->address_id = $request->address;
                    $order->status     = 'created';

                    $order->save();

                    $order_id = $order->id;

                    foreach ($cart as $item) {

                        if ($item->variant_id) {

                            if ($item->quantity < $item->variant->quantity) {
                                $order_detail = new Orderdetail;

                                $order_detail->order_id = $order_id;
                                $order_detail->product_id = $item->product_id;
                                $order_detail->variant_id = $item->variant_id;
                                $order_detail->quantity = $item->quantity;

                                $order_detail->save();
                            }
                        } else {
                            if ($item->quantity < $item->product->qty) {
                                $order_detail = new Orderdetail;

                                $order_detail->order_id = $order_id;
                                $order_detail->product_id = $item->product_id;
                                $order_detail->quantity = $item->quantity;

                                $order_detail->save();
                            }
                        }
                    }

                    $address_details = Address::find($request->address);

                    $data = [

                        "key"               => 'rzp_test_Im6GcXajBHdHvh',
                        "amount"            => $total_price * 100,
                        "name"              => "Ecom",
                        "description"       => "Buy best price",
                        "image"             => "https://cdn.razorpay.com/logos/FFATTsJeURNMxx_medium.png",
                        "prefill"           => [
                            "name"              => $address_details->name . $address_details->lname,
                            "email"             => $address_details->email,
                            "contact"           => $address_details->phone,
                        ],

                        "theme"             => [
                            "color"             => "#99cc33"
                        ],
                        "order_id"          => $api_order->id,
                    ];


                    return view('order::index')
                        ->with('data', $data)
                        ->with('order_id', $api_order->id);
                } else {
                    return redirect('/cart');
                }
            } else {
                return redirect()->back()->with('wrong', 'Sorry address not found');
            }
        } else {

            return redirect()->back()->with('wrong', 'Sorry something went worng with address');
        }
    }
}
