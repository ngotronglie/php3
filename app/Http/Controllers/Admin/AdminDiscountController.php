<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "List Discount";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Discount";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('discounts')->insert([
            'ten' => $request->ten,
            'phan_tram' => $request->phan_tram,
            'trang_thai' => $request->trang_thai,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Discount";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
