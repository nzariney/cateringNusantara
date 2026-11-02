<?php
$files = glob(__DIR__ . '/database/migrations/*_create_*_table.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    // Replace `$table->id(); ...` up to the newline
    $content = preg_replace('/\$table->id\(\);[^\n]*\n/', "\$table->id();\n", $content);
    file_put_contents($file, $content);
}
echo "Reverted migration errors\n";
