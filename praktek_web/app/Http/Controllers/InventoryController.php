<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Inventory as Produk;

class InventoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('inventory.inventory', compact('products'));
    }

}
