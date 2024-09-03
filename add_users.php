<?php
require_once './db_connection.php'; 
function add_user(){
    global $conn;
        try{
            $name = $_POST['name'];
            $discord = $_POST['discord'];
            $character = $_POST['character'];   


            $sql = "INSERT INTO users ('name', 'discord', 'role') VALUES(:name, :discord, :character)";
            $stmt = $conn->prepare($sql);


            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':discord', $discord);
            $stmt->bindParam(':character', $character);


            if($stmt->execute()){
                echo 'user added';
            }else{
                echo "Ошибка добавления пользователя.";
            }

        }catch(PDOException $e){
            echo "Ошибка подключения или выполнения запроса: " . $e->getMessage();
        }
}
?>

