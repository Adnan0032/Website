<?php 

$con=mysqli_connect("localhost","root","","projectweb"); 
if(!$con) { die(" Connection Error "); } 
    $query1 = " select * from data_users ";
    $result = mysqli_query($con,$query1);

	


    $id=$_GET['delete'];
    $query="DELETE FROM data_users WHERE id='$id'";
    $result2 = mysqli_query($con,$query);
    if ($result2) {
    //echo '<script>alert("Record deleted successfully");</script>';
   
    } else {
    echo '<script>alert("Error deleting record");</script>';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/carspeed.avif">
    <title>Database</title>
</head>
<body class="bg-dark">
<h1 style="color:white ;">List of clients</h1>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> User FName </td>
                                <td> User LName </td>
                                <td> User cin </td>
                                <td> User phone </td>
                                <td> User card </td>
                                <td> Expiration date</td>
                                <td> User Email </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $nom =$row["nom"];
                                        $prenom =$row["prenom"];
                                        $cin =$row["cin"];
                                        $telephone =$row["telephone"];
                                        $ccv =$row["ccv"];
                                        $exp =$row["date_expiration"];
                                        $email =$row["email"];
                            ?>
                                    <tr>
                                        <td><?php echo $nom ?></td>
                                        <td><?php echo $prenom ?></td>
                                        <td><?php echo $cin ?></td>
                                        <td><?php echo $telephone ?></td>
                                        <td><?php echo $ccv ?></td>
                                        <td><?php echo $exp ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><a href="index.php?upid=<?php echo $row['id'];?>&action=up" class="btn  btn-warning">Edit</a></td>
                                        <td><a class="btn  btn-danger" href="index.php?delete=<?php echo $row['id']; ?>&action=data" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" class="back-btn">Retour à la page d'accueil</a>
        <style>
.back-btn {
            margin-top: 40px; 
            margin-left:600px;
            text-decoration: none;
            background-color: #353535; 
            color: white;
            padding: 10px 20px; 
            border-radius: 5px; 
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #2980b9;
        }

</style>
</body>
</html>
