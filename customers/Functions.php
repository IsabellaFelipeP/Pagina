<?php

require_once('\..\Config.php');
require_once(DBAPI);


    $customers = null;
    $customer = null;

/**	 *  Listagem de Clientes	 */

function index() {
    global $customers;
    $customers = find_all('customers');
}


/**	 *  Pesquisa Todos os Registros de uma Tabela	 */

function find_all( $table ) {
    return find($table);
}




function add(){
    if(!empty($_POST['customer'])){
        $today = date_create('now', new DateTimeZone('Campo Grande/Mato Grosso do Sul'));

        $customer = $_POST ['customer'];
        $customer ['modified'] = $customer ['created'] = $today -> format("Y-m-d H:i:s");

        save('customers', $customer);
        header('location: Cadastro.php');
    }
}

