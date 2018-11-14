<?php

/*O nome do banco de dados */

define('DB_NAME', 'pagina');


/*Usuário do banco de dados MySQL*/

define('DB_USER', 'root');

/* Senha do banco de dados MySQL*/

define('DB_PASSWORD', '');

/* nome do host do MySQL */

define('DB_HOST', 'localhost');

/* caminho absoluto para a pasta do sistema*/
    if (!defined('ABSPATH'))
        define ('ABSPATH', dirname(_FILE_).'/');

    /* caminho no serve para o sistema*/

    if (!defined ('BASEURL'))
        define ('BASEURL', '/crud-bootstrap-php/');

    /* caminho do arquivo de banco de dados*/

    if (!defined ('DBAPI'))
        define ('DBAPI', ABSPATH . 'inc/database.php');

?>