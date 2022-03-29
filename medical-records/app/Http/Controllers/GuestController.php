<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Validator;

// use Alert;

class GuestController extends Controller
{
    public static int $counter = 0;
    public function input()
    {
        return view('formulir');
    }
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute wajib diisi',
            'minimum' => ':attribute harus memiliki minimal :min karakter!',
            'maximum' => ':attribute tidak boleh melebihi :max karakter!'
        ];

        $this->validate($request,[
            'kondisi' => ['required'],
            'suhu' => ['required', 'numeric', 'min:35', 'max:45.5'],
            'image' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png']
       ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->image = $foto_link;
        return view('validasi',['data' => $request]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->image; 
        $foto_name = ''; 
        if ($foto !== NULL) {
            $foto_name = 'foto'. $id . "." . $foto->extension();
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); 
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $foto_name; 
    }
}