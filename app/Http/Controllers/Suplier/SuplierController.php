<?php

namespace App\Http\Controllers\Suplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuplierReport;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use PDF;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplierId = Auth::user()->id;
        $transactions = Transaction::whereHas('details.product', function($query) use ($suplierId){
            $query->where('suplier_id', $suplierId);
        })->get();


        // $product_count = Product::count();
        $trans_count = $transactions->count();
        $trans_success_count = $transactions->where('transaction_status','SUCCESS')->count();
        $trans_pending_count = $transactions->where('transaction_status','PENDING')->count();
        return view('pages.suplier.dashboard',[
            'trans_count'=>$trans_count,
            'trans_success_count'=>$trans_success_count,
            'trans_pending_count'=>$trans_pending_count,
            'items'=>$transactions
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.suplier.detail',[
            'item' => $item
        ]);
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

    public function pdf(Request $request)
    {
        $suplierId = Auth::user()->id;
        $transactions = Transaction::whereHas('details.product', function($query) use ($suplierId){
            $query->where('suplier_id', $suplierId);
        })->get();

        $pdf = PDF::loadview('pages.suplier.pdf',['items'=>$transactions]);
        return $pdf->download('laporan-transaction.pdf');
    }
}
