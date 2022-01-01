<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function create(array $data)
    {
        return Product::create([
            'Name' => $data['Name'],
            'Type' => $data['Type'],
            'Year' => $data['Year'],
            'Color' => $data['Color']
            ]);
    }
}
