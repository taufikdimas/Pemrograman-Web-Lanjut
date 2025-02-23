<?php
namespace App\Http\Controllers; // Mendeklarasikan namespace untuk controller

use App\Models\Item; // Mengimpor model Item
use Illuminate\Http\Request;
// Mengimpor Request untuk menangani HTTP request

class ItemController extends Controller
{
    // Menampilkan semua item
    public function index()
    {
        $items = Item::all();                         // Mengambil semua item dari database
        return view('items.index', compact('items')); // Mengirim data item ke view
    }

    // Menampilkan form untuk menambahkan item baru
    public function create()
    {
        return view('items.create'); // Menampilkan view form create item
    }

    // Menyimpan item baru ke database
    public function store(Request $request)
    {
        // Validasi input name dan description
        $request->validate([
            'name'        => 'required', // name harus diisi
            'description' => 'required', // description harus diisi
        ]);

        // Membuat item baru dengan data yang divalidasi
        Item::create($request->only(['name', 'description']));
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    // Menampilkan detail item tertentu
    public function show(Item $item)
    {
        return view('items.show', compact('item')); // Menampilkan view detail item
    }

    // Menampilkan form untuk mengedit item tertentu
    public function edit(Item $item)
    {
        return view('items.edit', compact('item')); // Menampilkan view edit item
    }

    // Mengupdate data item di database
    public function update(Request $request, Item $item)
    {
        // Validasi input name dan description
        $request->validate([
            'name'        => 'required', // name harus diisi
            'description' => 'required', // description harus diisi
        ]);

        // Mengupdate item hanya dengan atribut yang diizinkan (name, description)
        $item->update($request->only(['name', 'description']));
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    // Menghapus item dari database
    public function destroy(Item $item)
    {
        $item->delete(); // Menghapus item dari database
                         // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
