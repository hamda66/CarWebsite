<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class store extends Controller
{
    
    Product = $Product::updateOrCreate( 
        ['Name'=>'Nissan'],
        ['Year'=>'2007'],
        ['Type'=>'Disel'],
        ['Color'=>'White']
    );
}
