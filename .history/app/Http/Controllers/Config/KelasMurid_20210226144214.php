<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cn_Kelas_Murid;

class KelasMurid extends Controller
{
    public function get()
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Cn_Kelas_Murid::with('murid')->with('kelas')->get(),
        ], 200);
    }

    public function detail($id)
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Cn_Kelas_Murid::where('id_conf_kelas_murid', $id)->with('murid')->with('kelas')->first(),
        ], 200);
    }

    public function create(Request $request)
    {
        foreach ($request->id_murid as $k => $v) {
            Cn_Kelas_Murid::create(
                'id_kelas' => $request->id_kelas,
                'id_murid' => $request->id_murid[0],
            );
        }

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Cn_Kelas_Murid::where('id_conf_kelas_murid', $query['id_conf_kelas_murid'])->first(),
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
        $query = Cn_Kelas_Murid::where('id_conf_kelas_murid', $id)->update($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Cn_Kelas_Murid::where('id_conf_kelas_murid', $id)->first(),
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
        $query = Cn_Kelas_Murid::where('id_conf_kelas_murid', $id)->delete();
        
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
