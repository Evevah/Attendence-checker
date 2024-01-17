<?php
    include("connection1.php");
    if(isset($_POST['SignUp']))
    {
        echo "Connection to Registeration page is successful.";

        $name=$_POST['N2'];
        $email = $_POST['E2'];
        $pass = $_POST['P2'];
        
        $typeOP = $_POST['type'];

        if($typeOP == "student")
        {
            $sql = "select *from infos where email='$email'";
            $result = mysqli_query($conn, $sql);
            $count_email=mysqli_num_rows($result);

            If($count_email==0)
            {
                $sql = "insert into infos(name, email, pass,S1,S2,S3) values ('$name','$email','$pass',0,0,0)";
                $result = mysqli_query($conn, $sql);
                echo "A student is successfully registered."; 
            }
            else
            {
                echo '<script>
                window.location.href ="log.php"
                alert("This email already exists.")
                </script>';
            }
        }
        else
        {
            $sql = "select *from infot where email='$email'";
            $result = mysqli_query($conn, $sql);
            $count_email=mysqli_num_rows($result);

            If($count_email==0)
            {
                $sql = "insert into infot(name, email, pass) values ('$name','$email','$pass')";
                $result = mysqli_query($conn, $sql);
                echo "A Teacher is successfully registered."; 
            }
            else
            {
                echo '<script>
                window.location.href ="log.php"
                alert("This email already exists.")
                </script>';
            }
        }

    }
    else{
        echo "Smthngs wrong...";
    }
?>
