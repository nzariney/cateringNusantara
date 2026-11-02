<?php

$models = [
    'City' => ['guarded' => []],
    'Category' => ['guarded' => []],
    'PaymentMethod' => ['guarded' => []],
    'Courier' => ['guarded' => []],
    'Customer' => ['guarded' => [], 'relations' => ['city' => 'belongsTo']],
    'Menu' => ['guarded' => [], 'relations' => ['category' => 'belongsTo']],
    'Order' => ['guarded' => [], 'relations' => ['customer' => 'belongsTo', 'paymentMethod' => 'belongsTo', 'courier' => 'belongsTo', 'orderItems' => 'hasMany']],
    'OrderItem' => ['guarded' => [], 'relations' => ['order' => 'belongsTo', 'menu' => 'belongsTo']],
];

foreach ($models as $name => $config) {
    $file = __DIR__ . "/app/Models/{$name}.php";
    $content = file_get_contents($file);
    
    // Add guarded
    if (strpos($content, 'protected $guarded') === false) {
        $content = str_replace('{', "{\n    protected \$guarded = [];\n", $content);
    }
    
    // Add relations
    if (isset($config['relations'])) {
        foreach ($config['relations'] as $relName => $relType) {
            if (strpos($content, "function {$relName}()") === false) {
                $relatedModel = ucfirst($relName);
                if ($relName === 'paymentMethod') $relatedModel = 'PaymentMethod';
                if ($relName === 'orderItems') $relatedModel = 'OrderItem';
                
                if ($relType === 'hasMany') {
                    $content = str_replace('}', "\n    public function {$relName}()\n    {\n        return \$this->hasMany({$relatedModel}::class);\n    }\n}", $content);
                } else {
                    $content = str_replace('}', "\n    public function {$relName}()\n    {\n        return \$this->belongsTo({$relatedModel}::class);\n    }\n}", $content);
                }
            }
        }
    }
    file_put_contents($file, $content);
}

// Factories
$factories = [
    'City' => "return ['name' => fake()->city()];",
    'Category' => "return ['name' => fake()->word()];",
    'PaymentMethod' => "return ['name' => fake()->randomElement(['Transfer Bank', 'E-Wallet', 'Cash on Delivery'])];",
    'Courier' => "return ['name' => fake()->name(), 'phone' => fake()->phoneNumber()];",
    'Customer' => "return ['name' => fake()->name(), 'phone' => fake()->phoneNumber(), 'city_id' => \App\Models\City::inRandomOrder()->first()->id ?? \App\Models\City::factory()];",
    'Menu' => "return ['name' => fake()->words(3, true), 'price' => fake()->numberBetween(10, 100) * 1000, 'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? \App\Models\Category::factory()];",
    'Order' => "return ['customer_id' => \App\Models\Customer::inRandomOrder()->first()->id ?? \App\Models\Customer::factory(), 'payment_method_id' => \App\Models\PaymentMethod::inRandomOrder()->first()->id ?? \App\Models\PaymentMethod::factory(), 'courier_id' => \App\Models\Courier::inRandomOrder()->first()->id ?? \App\Models\Courier::factory(), 'status' => fake()->randomElement(['pending', 'processing', 'completed'])];",
    'OrderItem' => "return ['order_id' => \App\Models\Order::factory(), 'menu_id' => \App\Models\Menu::inRandomOrder()->first()->id ?? \App\Models\Menu::factory(), 'qty' => fake()->numberBetween(1, 5), 'subtotal' => 0];",
];

foreach ($factories as $name => $definition) {
    $file = __DIR__ . "/database/factories/{$name}Factory.php";
    $content = file_get_contents($file);
    // Replace definition array body
    $content = preg_replace('/return \[.*\];/s', $definition, $content);
    file_put_contents($file, $content);
}
echo "Models and Factories updated\n";
