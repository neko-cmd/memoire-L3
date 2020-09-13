<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class checkoutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('checkout');
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
    public function store(CheckoutRequest $request)
    {

        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total() / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    
                ],
            ]);

           

           

             Cart::instance('default')->destroy();
           
            return redirect()->route('confirmation.index')->with('success_message', 'Je vous remercie! Votre paiement a été accepté avec succès!');

        } catch (CardErrorException $e) {
            return back()->withErrors('Erreur! ' . $e->getMessage());
        }
        
    }




    // protected function addToOrdersTablesPaypal($email, $name, $error)
    // {
    //     // Insert into orders table
    //     $order = Order::create([
    //         'user_id' => auth()->user() ? auth()->user()->id : null,
    //         'billing_email' => $email,
    //         'billing_name' => $name,
    //         'billing_discount' => getNumbers()->get('discount'),
    //         'billing_discount_code' => getNumbers()->get('code'),
    //         'billing_subtotal' => getNumbers()->get('newSubtotal'),
    //         'billing_tax' => getNumbers()->get('newTax'),
    //         'billing_total' => getNumbers()->get('newTotal'),
    //         'error' => $error,
    //         'payment_gateway' => 'paypal',
    //     ]);

    //     // Insert into order_product table
    //     foreach (Cart::content() as $item) {
    //         OrderProduct::create([
    //             'order_id' => $order->id,
    //             'product_id' => $item->model->id,
    //             'quantity' => $item->qty,
    //         ]);
    //     }

    //     return $order;
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
