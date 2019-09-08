<?php
$db = new PDO('mysql' . realpath(__DIR__) . '/mis_mascotas.db');
$fh = fopen(__DIR__ . '/schema.sql', 'r');
while ($line = fread($fh, 4096)) {
    $db->exec($line);
}
fclose($fh);
?>