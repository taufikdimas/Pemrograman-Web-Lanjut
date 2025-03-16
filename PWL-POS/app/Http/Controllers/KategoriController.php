<?php
namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    // public function edit($id)
    // {
    //     $data = KategoriModel::findOrFail($id);
    //     return view('kategori.edit', compact('data'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $kategori = KategoriModel::findOrFail($id);
    //     $kategori->update([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);

    //     return redirect('/kategori');
    // }

    public function edit($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kodeKategori' => 'required|max:255',
            'namaKategori' => 'required|max:255',
        ]);

        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui');
    }
    public function delete($id)
    {
        $row = KategoriModel::findOrFail($id);
        $row->delete();
        return redirect('/kategori');
    }
}