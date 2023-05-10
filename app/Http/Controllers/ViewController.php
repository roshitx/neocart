<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function homePage()
    {
        return view('index');
    }

    public function shopPage()
    {
        return view('shop.shop_page');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function dashboardPage()
    {
        
        return view('role.index', [
            'userCount' => User::all()->count(),
            'productCount' => Product::all()->count()
        ]);
    }

    public function editProfile()
    {
        $user = auth()->user();
        return view('role.client.changeprofile', compact('user'));
    }
    
    public function allProducts()
    {
        return view('admin.allproducts', [
        ]);
    }
}
