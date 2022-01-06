<?php

namespace App\Http\Controllers;
use App\Models\Inventory;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return Inventory::all();
    }

    public function show($product)
    {
        return Inventory::join("sizes", "inventories.size_id", "=", "sizes.id")
            ->join("colors", "inventories.color_id", "=", "colors.id")
            ->join("genders", "inventories.gender_id", "=", "genders.id")
            ->where("product_id", "=", $product)
            ->get(["sizes.size", "colors.color", "genders.gender"]);
    }
}
