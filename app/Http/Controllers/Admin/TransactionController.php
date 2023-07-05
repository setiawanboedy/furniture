<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use PDF;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::with(['user'])->get();

        return view('pages.admin.transaction.index',[
            'items'=>$items,
            'filterFrom'=>null,
            'filterTo'=>null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Transaction::create($data);

        return redirect()->route('transaction.index');
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

        return view('pages.admin.transaction.detail',[
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
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.edit',[
            'item'=>$item
        ]);
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
        $data = $request->all();

        $item = Transaction::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item -> delete();
        return redirect()->route('transaction.index');
    }


    public function filter(Request $request)
    {

        $request->validate([
            'filterFrom'=>'required:date_format:m/d/Y',
            'filterTo'=>'required:date_format:m/d/Y'
        ]);

        $data = $request->all();
        $filter_from = Carbon::createFromFormat('m/d/Y', $request['filterFrom'])->format('Y-m-d');
        $filter_to = Carbon::createFromFormat('m/d/Y', $request['filterTo'])->format('Y-m-d');
        $items = Transaction::whereBetween('created_at', [$filter_from, $filter_to])->get();

        return view('pages.admin.transaction.index',[
            'items'=>$items,
            'filterFrom'=>$data['filterFrom'],
            'filterTo'=>$data['filterTo']
        ]);
    }

    public function pdf(Request $request)
    {
        $data = $request->all();
        if ($data['filterFrom'] == null) {
            $items = Transaction::all();

            $pdf = PDF::loadview('pages.admin.transaction.pdf',['items'=>$items]);
            return $pdf->download('laporan-transaction.pdf');
        }

        $filter_from = Carbon::createFromFormat('m/d/Y', $request['filterFrom'])->format('Y-m-d');
        $filter_to = Carbon::createFromFormat('m/d/Y', $request['filterTo'])->format('Y-m-d');
        $items = Transaction::whereBetween('created_at', [$filter_from, $filter_to])->get();

        $pdf = PDF::loadview('pages.admin.transaction.pdf',['items'=>$items]);
        return $pdf->download('laporan-transaction.pdf');
    }
}
