<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete a class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .cont{
                
                width: 700px;
            }
            .input{
                width: 670px;
            }
            .subject{
                border: dashed 2px #80002065;
                width: 670px;
            }
            .create{
                
                color: white;
                background-color:  #800020;
                
            }
            

        </style>
    </head>
  <body style="background-color: #F7E7CE;">

  


  <div id="heading_cont" style="background-color: #800020">
    <h4 id="heading"style="text-align:center;color:white;text-decoration: underline">Create</h4>
  </div>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
       <p>The available classes list</p>
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
        <p>infos</p>
        <p>mumbai</p>
        
  </div>
</div>


  <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container cont" style=" background-color: white; box-shadow: 20px 20px 15px rgba(70, 70, 70, 0.250); border: 2px solid #800020">
            <form method="post" action="create.php">
                <br>
                <div class="mb-3">
            <label>Name the new class</label>
                    <div class="input-group input">
                        
                        <input type="text" class=" subject" aria-label="Username" aria-describedby="basic-addon1"id="C_name" name="C_name">
                    </div>
                    <div class="form-text" id="basic-addon4">Add a new name / delete the duplicate name before this process</div>
                </div>
                <div class="mb-3">
                     <label>Subject 1</label>
                    <div class="input-group input">
           
                        <input type="text" class=" subject" aria-label="Username" aria-describedby="basic-addon1" id="SUB1" name="SUB1">
                    </div>
                    
                </div>
                <div class="mb-3">
                     <label>Subject 2</label>
                    <div class="input-group input">
           
                        <input type="text" class=" subject" aria-label="Username" aria-describedby="basic-addon1"id="SUB2" name="SUB2">
                    </div>
                   
                </div>
                <div class="mb-3">
                     <label>Subject 3</label>
                    <div class="input-group input">
           
                        <input type="text" class=" subject" aria-label="Username" aria-describedby="basic-addon1"id="SUB3" name="SUB3">
                    </div>
                   
                </div>
                 <div class="mb-3">
                     <label>Old class to copy from</label>
                    <div class="input-group input">
           
                        <input type="text" class=" subject" aria-label="Username" aria-describedby="basic-addon1"id="OC" name="OC" placeholder="Write 'none' if the class will be new althogether.">
                    </div>
                   
                </div>
                
                <div class="container text-center">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col">
                    <input type= "submit" class="btn create btn-outline-" class="btn" value="Create" name="create" >
                    </div>
                    <div class="col">
                    
                    </div>
                </div>
                    <hr>
                <div class="container text-center">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col">
                        <button class="btn create btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">See the already present classrooms</button>
                    </div>
                    <div class="col">
                    
                    </div>
                </div>
                

                <br>
                </div>
                

                
                </form>
                
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
