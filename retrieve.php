

<form method="post" action=""> 
 <input type="text" name="id" placeholder="enter id" /> 
 <input type="submit" name="search" value="retrieve by id"> 
</form>
<table>
       <tr>
        <th>name</th> 
        <th>mail</th>
        <th>age</th>
       </tr> 

       <?php 
      
       $conn = mysqli_connect("localhost", "root", "", 'form', 3307);
    

       if (isset($_POST["search"])) {
           $id = $_POST["id"];

           $query = "SELECT * FROM assignment where id=$id ";
           $query_run = mysqli_query($conn, $query);


           while($row = mysqli_fetch_array($query_run))
           {
               ?>
               <tr>
                   <td> <?php echo $row['name'];?></td>                 
                   <td> <?php echo $row['email'];?></td> 
                   <td> <?php echo $row['age'];?></td> 
               </tr>
               <?php 
           }
       }
       ?>
</table>




