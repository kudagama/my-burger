<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRevenue = \App\Models\Order::sum('total_amount');
        $totalOrders = \App\Models\Order::count();
        $totalCustomers = \App\Models\User::count();
        $pendingOrders = \App\Models\Order::where('status', 'pending')->count();

        // Recent Activity: Fetch latest 5 orders
        $recentActivity = \App\Models\Order::with('user')
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($order) {
                return [
                    'id' => $order->id,
                    'type' => 'order',
                    'message' => 'New Order #' . $order->id,
                    'user' => $order->user ? $order->user->name : $order->first_name . ' ' . $order->last_name,
                    'time' => $order->created_at->diffForHumans(),
                    'amount' => $order->total_amount,
                ];
            });

        return Inertia::render('Admin/Dashboard/Index', [
            'totalRevenue' => $totalRevenue,
            'totalOrders' => $totalOrders,
            'totalCustomers' => $totalCustomers,
            'pendingOrders' => $pendingOrders,
            'recentActivity' => $recentActivity,
        ]);
    }

    public function task()
    {
        return Inertia::render('Admin/Dashboard/Task');
    }
}
