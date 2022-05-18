<?php 

include 'connection.php';

if(isset($_POST['submit'])) {
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $AGE = $_POST['age'];
    $IMAGE = $_FILES['image'];
    if($NAME == "" or $EMAIL == "" or $AGE =="" or $IMAGE == "" ) 
{
  echo "Please fill empty field(s)";
}
else if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {

  echo "invalid email";
} 

elseif(!preg_match("/^[0-9]*$/", $AGE)) {
  echo "input age in numeric";
}

elseif(!preg_match("/^[a-zA-Z ]*$/", $NAME)) {
  echo "insert name in alphabet";
}
else{
    
    echo "successful";
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadimage/" .$img_name;
    move_uploaded_file($img_loc, 'uploadimage/' .$img_name);

    // insert data into database
$query = "INSERT INTO `assignment`(`Name`, `Email`, `Age`, `Image`) VALUES ('$NAME', '$EMAIL', '$AGE', '$img_des')";
$result= mysqli_query($con, $query);
}
}


