<?php

namespace App\Http\Controllers\Penilaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tr_Penilaian;

class Penilaian extends Controller
{
    public function get(Request $request)
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            // 'data'    => Tr_Penilaian::where('id_penilaian', $request->id_kelas)->where('id_mata_pelajaran', $request->id_mata_pelajaran)->with('murid')->with('kelas')->with('mata_pelajaran')->get(),
            'data' => Tr_Penilaian::all(),
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $query = Tr_Penilaian::where('id_penilaian', $id)->update($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Tr_Penilaian::where('id_penilaian', $id)->first(),
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
