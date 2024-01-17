<?php
include("connection1.php");
//Login form
if(isset($_POST['SignIn']))
{
    
    $email = $_POST['E1'];
    $pass = $_POST['P1'];

    $sqlA = "select * from infos where email ='$email' and pass = '$pass'";
    $resultA = mysqli_query($conn, $sqlA);
    $rowA = mysqli_fetch_array($resultA, MYSQLI_ASSOC);
    $countA = mysqli_num_rows($resultA);

    $sqlB = "select * from infot where email ='$email' and pass = '$pass'";
    $resultB = mysqli_query($conn, $sqlB);
    $rowB = mysqli_fetch_array($resultB, MYSQLI_ASSOC);
    $countB = mysqli_num_rows($resultB);

    
    if($countB ==1)
    {
      echo '<script>
      window.location.href="Teacher_main.php";
      </script>';
    }
   else if($countA ==1)
    {
       
    }
    else
    {
        echo'<script>
        window.location.href = "log.php"
        alert("Login failed. Incorrect email/password. ");
        </script>';
    }

}
else 
{
    echo "somethinhs wrong with the setring of post method";
}
?>

<!DOCTYPE html>
<head>
    <title>Attendence counter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      #heading{
        font-size:30px;
      }
      #heading_cont{
        height: 40px;

      }
      .cardBOD{
        text-align: right;
        font-size: 30px;
        z-index: 3;
    
      }
      .card{
        background-image: url("S1.png");
      }
      .card-title{
        
        font-size: 40px;
        
        z-index: 1;
      }
      .card-text{
        font-size: 60px;
        text-align: center;

      }
      @media(max-width: 500px)
      {
        .cardBOD{
            font-size: 20px;
            text-align: center;
        }
      }
    </style>
  </head>
<body style="background-color: #F7E7CE;">
  <div id="heading_cont" style="background-color: #800020">
    <h4 id="heading"style="text-align:center;color:white;text-decoration: underline">Your attendence</h4>
  </div>
  <marquee>Attendence greater than 75% is a must for students to be eligible to give exams.</marquee>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        
       <div class="card text-bg-dark">
        <img src="English.jpg" class="card-img" alt="...">
        <div class="card-img-overlay bg-dark bg-opacity-50">
          <h5 class="card-title">S1</h5>
          <p class="card-text"><?php echo $rowA["S1"];?></p>
       
        </div>
      </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        
      <div class="card text-bg-dark">
        <img src="Sci.jpg" class="card-img" alt="...">
        <div class="card-img-overlay bg-dark bg-opacity-50">
          <h5 class="card-title">S2</h5>
          <p class="card-text"><?php echo $rowA["S2"];?></p>
      
        </div>
      </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        
      <div class="card text-bg-dark">
        <img src="Math.jpg" class="card-img" alt="...">
        <div class="card-img-overlay bg-dark bg-opacity-50">
          <h5 class="card-title">S3</h5>
          <p class="card-text"><?php echo $rowA["S3"];?></p>
      
        </div>
      </div>
      </div>
    </div>
    
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
echo $countA;
?>
  </body>
</html>
