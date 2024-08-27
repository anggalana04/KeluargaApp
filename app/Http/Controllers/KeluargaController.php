<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Keluarga;
use Illuminate\Support\Facades\Storage;


class KeluargaController extends Controller
{
    public function TambahKeluarga(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'hubungan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagepath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Keluarga::create(
            [
                'nama' => $request->input('nama'),
                'hubungan' => $request->input('hubungan'),
                'image' => $imagepath
            ]
        );
        return redirect('/')->with('success', 'Berhasil Menambahkan Keluarga');
    }


    public function IndexKeluarga()
    {
        $Keluargas = Keluarga::all();

        return view('Keluarga.daftar', ['Keluargas' => $Keluargas]);
    }

    public function edit($id)
    {
        $Keluarga = Keluarga::findOrFail($id);

        return view('Keluarga.edit', ['Keluarga' => $Keluarga]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'hubungan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $Keluarga = Keluarga::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($Keluarga->image) {
                Storage::disk('public')->delete($Keluarga->image);
            }
            $imagepath = $request->file('image')->store('images', 'public');
            $Keluarga->image = $imagepath;
        }

        $Keluarga->update([
                'nama' => $request->input('nama'),
                'hubungan' => $request->input('hubungan'),
                'image' => $Keluarga->image,
            ]);

        return redirect('/')->with('success', 'Keluarga updated successfully!');
    }

    public function destroy($id)
    {
        $Keluarga = Keluarga::findOrFail($id);

        // Delete the image if it exists
        if ($Keluarga->image) {
            Storage::disk('public')->delete($Keluarga->image);
        }

        $Keluarga->delete();

        return redirect('/')->with('success', 'Keluarga deleted successfully!');
    }

    public function show($id)
    {
        $Keluarga = Keluarga::findOrFail($id);

        return view('Keluarga.show', ['Keluarga' => $Keluarga]);
    }
}
