<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KawasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = DB::table('tbkawasan');

        if ($request->has('id_kawasan')) {
            $query->where('ID_Wil', 'like', '%' . $request->input('id_kawasan') . '%');
        }
        
        if ($request->has('id_benua')) {
            $query->where('ID_Benua', 'like', '%' . $request->input('id_benua') . '%');
        }

        $result = $query->get();

        if ($result->isEmpty()){
            return response()->json(['status' => 'error', 'message' => 'Data not found!'], 404);
        }

        return response()->json(['status' => 'success', 'data' => $result], 200);
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
    public function show(string $id)
    {
        //
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