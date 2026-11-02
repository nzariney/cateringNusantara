<?php
$files = glob(__DIR__ . '/database/migrations/*_create_*_table.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    $basename = basename($file);
    if (strpos($basename, 'cities') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name");', $content);
    } elseif (strpos($basename, 'categories') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name");', $content);
    } elseif (strpos($basename, 'payment_methods') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name");', $content);
    } elseif (strpos($basename, 'couriers') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name"); $table->string("phone");', $content);
    } elseif (strpos($basename, 'customers') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name"); $table->string("phone"); $table->foreignId("city_id")->constrained()->cascadeOnDelete();', $content);
    } elseif (strpos($basename, 'menus') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->string("name"); $table->integer("price"); $table->foreignId("category_id")->constrained()->cascadeOnDelete();', $content);
    } elseif (strpos($basename, 'orders') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->foreignId("customer_id")->constrained()->cascadeOnDelete(); $table->foreignId("payment_method_id")->constrained()->cascadeOnDelete(); $table->foreignId("courier_id")->constrained()->cascadeOnDelete(); $table->string("status")->default("pending");', $content);
    } elseif (strpos($basename, 'order_items') !== false) {
        $content = str_replace('$table->id();', '$table->id(); $table->foreignId("order_id")->constrained()->cascadeOnDelete(); $table->foreignId("menu_id")->constrained()->cascadeOnDelete(); $table->integer("qty"); $table->integer("subtotal");', $content);
    }
    file_put_contents($file, $content);
}
echo "Migrations updated\n";
