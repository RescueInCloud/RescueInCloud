<?php

    $host = getenv('OPENSHIFT_MYSQL_DB_HOST');// . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT');
    $port = getenv('OPENSHIFT_MYSQL_DB_PORT');
    $host_port = getenv('OPENSHIFT_MYSQL_DB_HOST'). ':' . getenv('OPENSHIFT_MYSQL_DB_PORT');
    $dbname = getenv('OPENSHIFT_APP_NAME');
    $username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    
    echo "host: " . $host . "<br>";
    echo "port: " . $port . "<br>";
    echo "host_port: " . $host_port . "<br>";
    echo "dbname: " . $dbname . "<br>";
    echo "username: " . $username . "<br>";
    echo "password: " . $password . "<br>";

    phpinfo();
    
?>