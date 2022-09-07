<?php

session_start();

session_destroy();

echo "<h2>Anda telah Logout!<h2/>";

?>
<div style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<h3>Mau kembali ke Masa Lalu?</h3>
<button style="background-color:lightcoral;border-radius:3px"><a href="fosession.php" style="color:black">Kembali Saja</a></button>
<marquee behavior="" direction="" style="color:red">
    hahaha ke masa lalu
</marquee>
</div>