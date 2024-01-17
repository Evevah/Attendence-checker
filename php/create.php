<?php
include('connection1.php');
if(isset($_POST['create']))
{
    $C_name = $_POST['C_name'];
    $SUB1 = $_POST['SUB1'];
    $SUB2 = $_POST['SUB2'];
    $SUB3 = $_POST['SUB3'];
    $OC = $_POST['OC'];
    

        
    $sql ="CREATE TABLE $C_name (Srno INT NOT NULL AUTO_INCREMENT,name VARCHAR(255) NOT NULL,email VARCHAR(255) NOT NULL,pass VARCHAR(255) NOT NULL,$SUB1 INT NOT NULL, $SUB2 INT NOT NULL,$SUB3 INT NOT NULL, PRIMARY KEY(Srno));";
    $result = mysqli_query($conn,$sql);
    

    if($OC!="none")
    {
        $sql = "INSERT INTO $C_name SELECT * FROM $OC";
        $result = mysqli_query($conn,$sql);
        echo '<script>
        window.location.href = "Create_Class.php"
        alert("Class is created and the students are added.")
        </script>';
    }
    echo '<script>
        window.location.href = "Create_Class.php"
        alert("Class is created.")
        </script>';
    
}
?>
