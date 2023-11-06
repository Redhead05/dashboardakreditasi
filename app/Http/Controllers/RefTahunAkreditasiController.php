<?php

namespace App\Http\Controllers;

use App\Models\ref_tahun_akreditasi;
use Illuminate\Http\Request;

class RefTahunAkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref_tahun_akreditasis = ref_tahun_akreditasi::all();
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ref_tahun_akreditasi $ref_tahun_akreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ref_tahun_akreditasi $ref_tahun_akreditasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ref_tahun_akreditasi $ref_tahun_akreditasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ref_tahun_akreditasi $ref_tahun_akreditasi)
    {
        //
    }
}
