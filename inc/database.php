<?php
pg_report(PGSQL_REPORT_STRICT);

function open_database() {
    try {
        $conn = pg_connect("host=".DB_HOST." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASSWORD);
        return $conn;
    } catch(Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        pg_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
