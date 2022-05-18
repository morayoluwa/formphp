<form method="post" action=""> 
 <input type="text" name="id" placeholder="enter id" /> 
 <input type="submit" name="search" value="retrieve by id"> 
</form>
<table>

       <tr>
        <th>name</th> 
        <th>mail</th>
        <th>age</th>
        <th>image</th>
       </tr> 

    <?php 
    
    include "connection.php";
    if (isset($_POST["search"])) {
        $id = $_POST["id"];
        

        $query = "SELECT * FROM assignment where id=$id ";
        $query_run = mysqli_query($con, $query);


        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            
            <tr>
                
                <td> <?php echo $row['name'];?></td> 
                <td> <?php echo $row['email'];?></td> 
                <td> <?php echo $row['age'];?></td> 
                <td>
                    <img src="<?php echo "uploadimage/".$row['Image']; ?>" width="150" alt="" >
                </td> 
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php 
        }
    }
    ?>
</table>




 


