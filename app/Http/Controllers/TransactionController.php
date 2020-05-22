<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function transaction()
    {
        return view('transaction'); 
    }

    public function status()
    {
        return view('status'); 
    }

   
    public function save(Request $request)
    {
        $this->validate($request, [
            'pembayaran' => 'required',
            
        ]);
        $transactions = new Transaction();
        $transactions->pembayaran = $request->pembayaran;
        $transactions->status = 'Belum Lunas';
        $transactions->start = Now();
        $transactions->end = date('Y-m-d H:i:s', strtotime($transactions->start . '+30 minutes'));
        $transactions->save();
        //User::create($user);
        $request->session()->flash('Telah Pilih Pembayaran');
        return view('status');
    }
    public function index()
    {
        $transactions = Transaction::latest()->paginate(20);
        return view('transaction', compact('transactions'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        //$transactions = Transaction::paginate(4);
        //return view('transaction', compact('transactions'));
    }
    public function updateconfirmed($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Lunas';
        $transaction->save() ;
        return view('confirmed');
    }

    public function updateremembered($id)
    {
        $transaction = Transaction::find($id);
        return view('remembered');
    }

    public function updatecanceled($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Cancel';
        $transaction->save() ;
        return view('canceled');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
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
