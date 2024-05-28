<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Midtrans\Transaction;
   class CheckoutController extends Controller{
    public function process(Request $request)
    {

        $data = $request->all();
        $transaction = Transaction::create([
            'trans_id' => $data['id'],
            'user_id' =>  Auth::user()->id,
            'product_id' => $data['product_id'],
            'price' => $data['price'],
            'status' => 'pending',
        ]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.MD.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $data['total_harga'],
    ),
    'customer_details' => array(
        'name' => $data['user'],
        'email' => $data['email'],
        'items-rent' => $data['Jasa'],
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);

$transaction->snap_token = $snapToken;
$transaction->save();


return redirect()->route('ceckout',$transaction->id);
}

    public function checkout(Transaction $transaction){
        $JasaS = config('JasaS');
        $Jasa = collect($JasaS)->firstWhere('id',$transaction->Jasa_id);
    }
}
?>