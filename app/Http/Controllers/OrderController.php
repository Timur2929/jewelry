<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string|max:500',
            'notes' => 'nullable|string|max:1000',
        ]);

        // Получаем данные корзины из сессии
        $cart = session()->get('cart', []);
        $total = $this->calculateTotal($cart);

        // Создаем заказ
        $order = Order::create([
            'order_number' => Str::upper(Str::random(10)),
            'user_id' => auth()->id(),
            'cart_data' => json_encode($cart),
            'total' => $total,
            'status' => 'pending',
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'customer_phone' => $validated['customer_phone'],
            'customer_address' => $validated['customer_address'],
            'notes' => $validated['notes'] ?? null,
        ]);

        // Очищаем корзину
        session()->forget('cart');

        // Перенаправляем на страницу подтверждения
        return redirect()->route('orders.show', $order->id)
            ->with('success', 'Ваш заказ успешно оформлен!');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function index()
    {
        $orders = auth()->user() 
            ? Order::where('user_id', auth()->id())->latest()->get()
            : collect();

        return view('orders.index', compact('orders'));
    }

    private function calculateTotal($cart)
    {
        return array_reduce($cart, function($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }
}