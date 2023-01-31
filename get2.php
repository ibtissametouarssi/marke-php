<?php
    include('connection.php');

    $st = $conn->prepare("SELECT * FROM products WHERE product_id BETWEEN 9 AND 12");

    $st->execute();

    $featured_pro = $st->get_result();
    
    
?>