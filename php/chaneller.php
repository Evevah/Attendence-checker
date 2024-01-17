<?php
include('connection1.php');
if(isset($_POST['SignIn']))
{
    $option1 = $_POST['options1'];
    $option2 = $_POST['options2'];

    if($option1=="Add Presentees")
    {
        echo '<script>
        window.location.href = "presentee.php";
        </script>';
        session_start(); 
        $_SESSION['data'] = $option2; 
        header('Location: presentee.php'); 
    }
    else if($option1=="Create a new class")
    {
        echo '<script>
        window.location.href = "Create_Class.php"
        </script>';
    }
    else if($option1=="Delete a class")
    {
        
        $sql="SELECT * FROM $option2";
        
        if($result = mysqli_query($conn, $sql))
        {
             $sql = "DROP TABLE $option2;";
                $result = mysqli_query($conn, $sql);
                if(!$result)
                {
                    echo'<script>
                    window.location.href="Teacher_main.php"
                    alert("The class does not exist ");
                    </script>';
                }

            echo'<script>
            window.location.href="Teacher_main.php"
            alert("The class  has been deleted ");
            </script>';
        }
        else{
            echo '<script>
            window.location.href="Teacher_main.php";
            alert("The class does not exist.");
            </script>';
        }

               
        
    }
    else 
    {   echo'<script>
             window.location.href="Teacher_main.php";
            alert("Please copy the name from the list itself");
            </script>';
    }
}
else{
    echo "nope";
}


?>
