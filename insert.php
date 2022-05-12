<?php 


$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];


if($name == "" or $email == "" or $age =="") 
{
  echo "Please fill empty field(s)";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "invalid email";
  
} 
elseif(!preg_match("/^[0-9]*$/", $age)) {
  echo "input age in numeric";
}
elseif(!preg_match("/^[a-zA-Z ]*$/", $name)) {
  echo "insert name in alphabet";
}else{

   include_once"connection.php";
   $conn=connection();

   $sql = "INSERT INTO assignment (name, email, age) VALUES('$name', '$email', '$age')";
   if($conn->query($sql)){
    echo "successful";
   } else{
     echo "not successful";
   }
  

}

   



    
      

      
