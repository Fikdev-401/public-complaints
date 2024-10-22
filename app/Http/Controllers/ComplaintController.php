<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index(){
        return view('pages.complaints.index');
    }

    public function create(){
        return view('pages.complaints.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'string',
            'email' => 'email',
            'no_telp' => 'nullable',
            'title' => 'required|string',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|'
        ], [
            'name.string' => 'Nama harus berupa string',
            'email.email' => 'Email harus berupa email',
            'title.required' => 'Judul harus diisi',
            'description.required' => 'Deskripsi harus diisi',
            'description.max' => 'Deskripsi maksimal 255 karakter',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',
            'image.max' => 'Ukuran file maksimal 2MB',
        ]);

        if ($request->hashfile('image')) {
            $pathImage = $request->image->save('/public', '/photo');
        }

        Complaints::create([
         'user_id' => Auth::user()->id ?? null,
         'status' => '',
         'title' => $request->title,
         'description' => $request->description,
         'image' => $pathImage ?? null,
        ]);

        return "Success";
    }
}
