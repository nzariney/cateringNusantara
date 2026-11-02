<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Courier;
use App\Models\Menu;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::factory(50)->create();
        Category::factory(10)->create();
        PaymentMethod::factory(3)->create();
        Courier::factory(10)->create();
        
        Menu::factory(150)->create();
        Customer::factory(200)->create();
        
        $orders = Order::factory(150)->create();
        
        foreach ($orders as $order) {
            $numItems = rand(3, 5);
            for ($i = 0; $i < $numItems; $i++) {
                $menu = Menu::inRandomOrder()->first();
                $qty = rand(1, 5);
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'qty' => $qty,
                    'subtotal' => $qty * $menu->price
                ]);
            }
        }
    }
}
