<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Md_Murid;

class Murid extends Controller
{
    public function get()
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Md_Murid::all(),
        ], 200);
    }

    public function detail($id)
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Md_Murid::where('id_murid', $id)->first(),
        ], 200);
    }

    public function create(Request $request)
    {
        $query = Md_Murid::create($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Md_Murid::where('id_murid', $query['id_murid'])->first(),
            ], 200);
        }
        else {
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
                'data'    => '',
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $query = Md_Murid::where('id_murid', $id)->update($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Md_Murid::where('id_murid', $id)->first(),
            ], 200);
        }
        else {
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
                'data'    => '',
            ], 500);
        }
    }

    public function delete($id)
    {
        $query = Md_Murid::where('id_murid', $id)->delete();
        
        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Id ' . $id . ' Success Deleted',
                'data'    => '',
            ], 200);
        }
        else {
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
                'data'    => '',
            ], 500);
        }
    }
}
