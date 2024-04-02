<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost','root','','Vegan') or die("Connection failed:".mysqli_connect_error());
        if(isset($_POST['receipe_name']) && isset($_POST['Ingridents']) && isset($_POST['Description'])) {
            $receipe_name= $_POST['receipe_name'];
            $Ingridents= $_POST['Ingridents'];
            $Description= $_POST['Description'];
            // $username= "Jhalak";
            
            $sql = "INSERT INTO `receipe`(`Receipe_Name`,`Ingridents`, `Description`) VALUES ('$receipe_name', '$Ingridents', '$Description')";

            $query = mysqli_query($conn,$sql);
            if($query){
                echo '<script>alert("Your receipe is successfully added!")</script>';
                echo '<script>window.location="ayr.html"</script>'; 
            }
            else{
                echo '<script>alert("Error Occurred!..Try again")</script>';
            }
        }
    }
?>

