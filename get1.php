<?php
    include('connection.php');

    $st = $conn->prepare("SELECT * FROM products WHERE product_id BETWEEN 5 AND 8");

    $st->execute();

    $featured_pro = $st->get_result();
    
    
?>