<?php
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 202310715314 ada. Isinya : " . $_COOKIE['username'] . "</h1>";
} else {
    echo "<h1>Cookie 202310715314 TIDAK ada.</h1>";
}

if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie Hendricus Cahyo ada. Isinya : " . $_COOKIE['namalengkap'] . "</h1>";
} else {
    echo "<h1>Cookie Hendricus Cahyo TIDAK ada.</h1>";
}

echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie3.php'>di sini</a> untuk penghapusan cookies</h2>";
?>