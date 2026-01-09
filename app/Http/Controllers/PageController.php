<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $popularProducts = \App\Models\Product::where('status', 'active')->inRandomOrder()->take(4)->get();
        $bestFoodProducts = \App\Models\Product::where('status', 'active')->latest()->take(4)->get();
        
        $menuCategories = \App\Models\Category::where('is_active', true)
            ->whereHas('products', function($query) {
                $query->where('status', 'active');
            })
            ->with(['products' => function($query) {
                $query->where('status', 'active')->take(10);
            }])
            ->take(4)
            ->get();

        return view('home', compact('popularProducts', 'bestFoodProducts', 'menuCategories'));
    }

    public function menu()
    {
        return view('menu');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function shop(Request $request)
    {
        $query = \App\Models\Product::where('status', 'active');

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Category Filter
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }

        // Price Filter
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        // Sorting
        if ($request->has('orderby')) {
            switch ($request->orderby) {
                case 'popularity':
                    $query->orderBy('created_at', 'desc'); // Placeholder for popularity
                    break;
                case 'rating':
                    $query->orderBy('created_at', 'desc'); // Placeholder for rating
                    break;
                case 'date':
                    $query->latest();
                    break;
                case 'price':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $query->latest();
        }

        $products = $query->paginate(9)->appends($request->all());
        $categories = \App\Models\Category::where('is_active', true)->withCount('products')->get();
        $recentProducts = \App\Models\Product::where('status', 'active')->latest()->take(3)->get();
        
        return view('shop', compact('products', 'categories', 'recentProducts'));
    }

    public function shopDetails($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $categories = \App\Models\Category::where('is_active', true)->withCount('products')->get();
        $recentProducts = \App\Models\Product::where('status', 'active')->latest()->take(3)->get();
        
        return view('shop-details', compact('product', 'categories', 'recentProducts'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function cart()
    {
        $cartItems = [];
        if (\Illuminate\Support\Facades\Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())
                            ->with('product')
                            ->get();
        }
        return view('cart', compact('cartItems'));
    }

    public function checkout()
    {
        $cartItems = [];
        if (\Illuminate\Support\Facades\Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())
                            ->with('product')
                            ->get();
        }
        return view('checkout', compact('cartItems'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function myOrders()
    {
        return view('my-orders');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function accountDetails()
    {
        return view('account-details');
    }
}
