<?php

Functions add(){
    if(!empty($_POST['customer'])){
        $today = date_create('now', new DateTimeZone('Campo Grande/Mato Grosso do Sul'));

        $customer = $_POST ['customer'];
        $customer ['modified'] = $customer ['created'] = $today -> format("Y-m-d H:i:s");

        save('customers', $customer);
        header('location: index.php');
    }
}
?>