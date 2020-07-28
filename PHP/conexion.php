<?php
try {
$c = new PDO('mysql:host=localhost;dbname=pagpre', "root", "");
$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "ERROR: " . $e->getMessage();
}
?>