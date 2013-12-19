<table>
<?php 

    $keys = implode(",",array_keys($_POST));
    $values = "'".implode("','",array_values($_POST))."'";
    $sql = "INSERT INTO form_data (".$keys.") VALUES (".$values.")";
    $pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt){
        $error = array("error"=> array("text"=>"Form was successfully inserted."));
        echo json_encode($error);
    }else{
        $error = array("error"=> array("text"=>"Error inserting into database."));
        echo json_encode($error);
    }


?>
</table>