<?php
namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
