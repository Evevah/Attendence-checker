<?php
    include('connection1.php');
    

    session_start(); 
    $class = $_SESSION['data']; 
    
    $sql = "SELECT * FROM $class;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    echo '<!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teachers page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
          .row{
            height: 100px;
            width: 500px;
    
          }
          .form-control{
            width: 400px;
            border: 1px dashed #800020;
    
          }
          .Dropdowns{
            font-size:18px;
          }
          #heading{
              font-size: 40px;
          }
          @media(max-width:400px){
            .row{
              width: 300px;
              align-items: left;
              
            }
            .form-control{
              width: 280px;
              border: none;
            }
            .Dropdowns{
              font-size: 15px;
              text-align: center;
            }
            #heading{
              text-align:center;
              size:18px
            }
          }
    
          @media(max-width:600px) and(min-width:400px){
            .row{
              width: 500px;
              align-items: left;
            }
            .form-control{
              width: 480px;
              border: none;
            }
            .Dropdowns{
              font-size: 18px;
              text-align: center;
            }
            #heading{
              text-align:center;
              size:18px
            }
          }
    
    
        </style>
        </head>
      <body style="background-color: #F7E7CE">
    
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="container cont" style=" background-color: white; box-shadow: 20px 20px 15px rgba(70, 70, 70, 0.250); border: 2px solid #800020">
                <div class="row">
                    <div class = "col text-center">
                    <form method = "post" action = "presentee.php">
                    <fieldset>
                        <legend>Is ';echo $row['name']; echo' present?</legend>
                        <div class="row">
                            <div class="col">
                            <input type="submit" id="yes" name="OP" value="yes" />
                            <label for="yes">Yes</label>
                            </div>
                        
                            <div class="col">
                            <input type="submit" id="no" name="OP" value="no" />
                            <label for="no">No</label>
                            </div>
                        
                            
                        </div>
                  </fieldset>
                  
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
        
    
          
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </body>
    </html>';



   
   
    

?>
<?php
 if(isset($_POST['OP']))
 
 else{
    echo "hmm..";
 }
?>




