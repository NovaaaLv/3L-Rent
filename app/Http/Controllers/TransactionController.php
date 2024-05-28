<?php
use App\Http\Controllers\Controller;

class TransactionController extends Controller{
    public function index(){
        $transactions = Transaction::where('user_id',Auth::user()->id)->get();

        $transactions->transform(function($transaction, $key){
            $transaction->product = collect(config('JasaS'))->firstWhere('id',$transaction->product_id);
            return $transaction;
        });
        return view('transactions',compact('transactions'));
    }
}
?>