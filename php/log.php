<?php
include("connection1.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel = "stylesheet" href = "Loginstyle2.css">
</head>
  <body style="background-color: #f2ddc9">

  

  <br>
  <br>
  <br>
<br> 

    <div class="cont"  id = "Actual">
        <div class="form sign-in">
            <h2>Welcome</h2">
        <form method="post" action= "connection2.php" name = "form2">
            <label>
                <span>Email</span>
                <input type="email" name = "E1" id = "E1"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name = "P1" id = "P1"/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <input type = "submit" id = "SignIn" value="Sign In" class="btn btn-outline-warning col-md-6 align-item-start" name="SignIn" style ="width: 150px;"/>
        </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <form id=form2 method ="post" action = "connection3.php">
               <label>
                    <span>Name</span>
                    <input type="text" name = "N2"/> 
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name ="E2"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name = "P2"/>
                </label>
                <label>
                    <span>You are...</span>
                        <select name = "type" id ="type" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>

                        </select>
                </label>

                    <div class="d-grid gap-16 col-6 mx-auto">

                        <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                    
                                    </div>
                                    <div class="col">
                                        <br>
                            
                                        <input type = "submit" id = "SignUp" value="Sign Up" class="btn btn-outline-warning col-md-6 " name="SignUp" style ="width: 150px;"/>
                                    </div>
                                    <div class="col">
                                    
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

 
  <form3></form3>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
