<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cn_Kelas_Guru;

class KelasGuru extends Controller
{
    public function get()
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Cn_Kelas_Guru::with('guru')->with('kelas')->get(),
        ], 200);
    }

    public function detail($id)
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Cn_Kelas_Guru::where('id_conf_kelas_guru', $id)->with('murid')->with('kelas')->first(),
        ], 200);
    }

    public function create(Request $request)
    {
        $query = Cn_Kelas_Guru::create($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Cn_Kelas_Guru::where('id_conf_kelas_guru', $query['id_conf_kelas_guru'])->first(),
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
        $query = Cn_Kelas_Guru::where('id_conf_kelas_guru', $id)->update($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Cn_Kelas_Guru::where('id_conf_kelas_guru', $id)->first(),
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
        $query = Cn_Kelas_Guru::where('id_conf_kelas_guru', $id)->delete();
        
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
