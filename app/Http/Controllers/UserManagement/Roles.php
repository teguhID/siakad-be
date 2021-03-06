<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Um_Roles;

class Roles extends Controller
{
    public function get()
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Um_Roles::all(),
        ], 200);
    }

    public function detail($id)
    {
        return response()->json([
            'status'  => 200,
            'message' => 'Success',
            'data'    => Um_Roles::where('id_role', $id)->first(),
        ], 200);
    }

    public function create(Request $request)
    {
        $query = Um_Roles::create($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Um_Roles::where('id_role', $query['id_role'])->first(),
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
        $query = Um_Roles::where('id_role', $id)->update($request->all());

        if ($query) {
            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => Um_Roles::where('id_role', $id)->first(),
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
        $query = Um_Roles::where('id_role', $id)->delete();
        
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
