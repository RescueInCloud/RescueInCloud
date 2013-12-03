<?php

    $host = getenv('OPENSHIFT_MYSQL_DB_HOST');// . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT');
    $port = getenv('OPENSHIFT_MYSQL_DB_PORT');
    $dbname = getenv('OPENSHIFT_APP_NAME');
    $username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    
    echo "host: " . $host;
    echo "port: " . $port;
    echo "dbname: " . $dbname;
    echo "username: " . $username;
    echo "password: " . $password;

    phpinfo();
    
?>