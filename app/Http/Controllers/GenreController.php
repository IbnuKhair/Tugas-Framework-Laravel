<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
   public function index()
{
    $genres = Genre::all();

    if ($genres->isEmpty()) {
        return response()->json([
            "success" => true,
            "message" => "Resource data not found!",
            "data" => []
        ], 200);
    }

    return response()->json([
        "success" => true,
        "message" => "Get all resources",
        "data" => $genres
    ], 200);
}
}
