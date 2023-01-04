<?php
$con=mysqli_connect('localhost','root','test1234','ajax_crud');

  
  $action=$_POST["action"];
  if($action=="Insert"){
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $gender=mysqli_real_escape_string($con,$_POST["gender"]);
    $mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
    $sql="insert into users (NAME,GENDER,MOBILE) values ('{$name}','{$gender}','{$mobile}') ";
    if($con->query($sql)){
      $id=$con->insert_id;
      echo "
        <tr uid='{$id}'>
          <td>{$name}</td>
          <td>{$gender}</td>
          <td>{$mobile}</td>
          <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
          <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
        </tr>";
    }else{
      echo false;
    }
  }else if($action=="Update"){
    $id=mysqli_real_escape_string($con,$_POST["id"]);
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $gender=mysqli_real_escape_string($con,$_POST["gender"]);
    $mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
    $sql="update users SET NAME='{$name}',GENDER='{$gender}',MOBILE='{$mobile}' where ID='{$id}'";
    if($con->query($sql)){
      echo "
        <td>{$name}</td>
        <td>{$gender}</td>
        <td>{$mobile}</td>
        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
        
    }else{
      echo false;
    }
  }else if($action=="Delete"){
    $id=$_POST["uid"];
    $sql="delete from users where ID='{$id}'";
    if($con->query($sql)){
      echo true;
    }else{
      echo false;
    }
  }
?>