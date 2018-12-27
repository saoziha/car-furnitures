<?php
    /*--
    COMPANY: ezdev (former: the3ds)
    AUTHOR: Tom DINH
    PROJECT: mirana core v2
    DESCRIPTION:
        Register database for Mirana to use
        Database has not registered here will not able to use in application(s)

    --*/

    Mirana_Database::add("db_huynhgiaphat",
        [
            DB_TYPE => MYSQL,
            DB_URL => "localhost",
            DB_NAME => "huynhgiaphat",
            DB_PORT => "3306",
            DB_USER => "root",
            DB_PASS => ""
        ]
    );
?>
