<?php
	$con=mysqli_connect('localhost','root','test1234','ajax_crud');
        $sql="select * from users";
        $res=$con->query($sql);

        //var_dump($res);
        $result = [];
        while($row=$res->fetch_assoc()){
          $result [] = $row;
        }

        echo json_encode($result);