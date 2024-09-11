<?php
    require_once './db_connection.php';
    function get_users(){
        global $conn;

        $query_select = "SELECT * FROM `mib`.`users`";
        $stmt = $conn->query($query_select);

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;

    }


    function add_users(){
        global $conn;


        $name = $_POST['name'];
        $discord_name = $_POST['discord'];
        $rol = $_POST['role'];

        
    }




?>