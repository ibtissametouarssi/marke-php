<?php
    include('connection.php');

    $st = $conn->prepare("SELECT * FROM products WHERE product_id BETWEEN 13 AND 16");

    $st->execute();

    $featured_pro = $st->get_result();
    
    
?>