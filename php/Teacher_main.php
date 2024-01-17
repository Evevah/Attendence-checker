<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .row{
        height: 300px;
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



    
      <h1 style="font-size:40px;color:#80002065" id="heading">But before you head on..</h1>
    

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container cont" style=" background-color: white; box-shadow: 20px 20px 15px rgba(70, 70, 70, 0.250); border: 2px solid #800020">
            <div class="row">
            <div class = "col">
                <form method="post" action = "chaneller.php">
                    <br>
                    
                    <label style="font-size:18px">Tasks:</label>
                        <div class="input-group mb-3">
                        
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" name = "options1">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">List</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-item">Add Presentees</li>
                            <li class="dropdown-item">Create a new class</li>
                            <li class="dropdown-item">Delete a class</li>

                        </ul>

                        
                      </div>

                      <br>
                      <label style="font-size:18px">For which class?</label>
                      <div class="input-group mb-3">
                        
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" name = "options2">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Classes</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-item">infos</li>
                        <li class="dropdown-item">mumbai</li>
                            

                        </ul>

                        
                      </div>


                        <br>
                      <div class="container" style="width: 175px">
                        <input type = "submit" id = "SignIn" value="Go" class="btn"  name="SignIn" style ="width: 150px; background-color: #800020 ;color:#F7E7CE"/>
                      </div>
                </form>
            </div>
        </div>
    </div>
    

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
