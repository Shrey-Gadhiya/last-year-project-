<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: DODGE.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="icon" href="img/dodge logo.png">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>SIGN UP Page</title>
</head>

  <body style="background-color: black;color: white;">
  <!-- navbar  -->
<nav class="navbar navbar-dark bg-dark fixed-top" style="margin: 0;padding: 0;">
  <div class="container-fluid" style="margin: 0;padding: 1;">
    <a class="navbar-brands" href="DODGE.php"><img src="img/logo.png" alt="" height="30px" style="border-radius: 25px;"></a>
    <a class="navbar-brand" href="home.php" style="margin-left: 850px;  padding: 0;text-align: end;font-size: medium;">HOME</a>
    
    <a class="navbar-brand" href="account.php" style="margin: 0;padding: 0;font-size: medium;">SIGN UP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">LOG IN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="account.php">SIGN UP</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
      
       <section class="vh-100 bg-image" style="background-color: #ff4705;margin-top: 37px;">
       <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
         <div class="container h-100">
           <div class="row d-flex justify-content-center align-items-center h-100">
             <div class="col-12 col-md-9 col-lg-7 col-xl-6">
               <div class="card" style="border-radius: 15px;">
                 <div class="card-body p-5">
                   <h2 class="text-uppercase text-center mb-5">Create an account</h2>
     

                   <!-- php -->

                   <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

                   <form action="account.php" method="post">
     
                   <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div> <br>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div> <br>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div> <br>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div> <br>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div> <br>
        </form>
        <div>
        <div><p>Already Registered -> <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
     
                     
     
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
   
       
    <!-- responsive css code -->

<style>
    /* footer css and responsive */
    .footer .footer-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 3.5rem;
        padding: 30px;
      }
      .footer-row .footer-col h4 {
        color: #fff;
        font-size: 1.2rem;
        font-weight: 400;
        text-align: center;
      }
      .footer-col .links {
        margin-top: 20px;
      }
      .footer-col .links li {
        list-style: none;
        margin-bottom: 10px;
      }
      .footer-col .links li a {
        text-decoration: none;
        color: #bfbfbf;
      }
      .footer-col .links li a:hover {
        color: #fff;
      }
      .footer-col p {
        margin: 20px 0;
        color: #bfbfbf;
        max-width: 300px;
      }
      .footer-col form {
        display: flex;
        gap: 5px;
      }
      .footer-col input {
        height: 40px;
        border-radius: 6px;
        background: none;
        width: 100%;
        outline: none;
        border: 1px solid #7489C6 ;
        caret-color: #fff;
        color: #fff;
        padding-left: 10px;
      }
      .footer-col input::placeholder {
        color: #ccc;
      }
       .footer-col form button {
        background: #fff;
        outline: none;
        border: none;
        padding: 10px 15px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        transition: 0.2s ease;
      }
      .footer-col form button:hover {
        background: #cecccc;
      }
      .footer-col .icons {
        display: flex;
        margin-top: 30px;
        gap: 30px;
        cursor: pointer;
      }
      .footer-col .icons i {
        color: #afb6c7;
      }
      .footer-col .icons i:hover  {
        color: #fff;
      }
      @media (max-width: 768px) {
        .footer {
          position: relative;
          bottom: 0;
          left: 0;
          transform: none;
          width: 100%;
          border-radius: 0;
        }
        .footer .footer-row {
          padding: 20px;
          gap: 1rem;
        }
        .footer-col form {
          display: block;
        }
        .footer-col form :where(input, button) {
          width: 100%;
        }
        .footer-col form button {
          margin: 10px 0 0 0;
        }
      }
    
    
    
    @media screen and (max-width:1395px){
        
    
        .dropdown {
         display: none; 
          }
    }
    
    @media screen and (max-width:1217px){
       
    
       .navbar-brand {
        display: none; 
         }
    }
    
    
    @media screen and (max-width:850px) {
        .stats{
            gap: 0;
        }
        .btn-mobile{
            display: block;
            margin: 2em auto;
            max-width: 90vw;
        }
        .stats .btn{
            display: none;
        }
        .stats > div{
            width: initial;
        }
        .about-text{
            position: relative;
            flex-direction: column;
        }
        
    }
    @media screen and (max-width:450px) {
        html{
            font-size: 14px;
        }
        /* Reset some default styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    
    
    }
    </style>   

    
          <!-- footer -->
          <section class="footer" style="border: solid white 1px;border-radius: 7px;margin:0;background-color: black;color: white;">
            <div class="footer-row">
        

              <div class="footer-col">
                <h4>CONTACT US</h4>
                <ul class="links">
                  <li>E-mail :-<a href="#"> shreypatel8032@gmail.com</a></li>
                  <li>ADDRESS :-<a href="https://maps.app.goo.gl/shuhi9AisiGs8sVi7">B-26 Raj Laxmi Society,<br> near Madhuvan Society, Laxminarayan Society-1,<br> Dabholi, Surat, Gujarat 395004</a></li>
                  <li>LinkDin :-<a href="https://www.linkedin.com/in/shrey-gadhiya-992005270?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWB1W2zTxS76oWYuqG%2Fivag%3D%3D">SHREY GADHIYA</a></li>
                  <li>CONTACT :-<a href="+91 7874061232">(+91) 78740 61232</a></li>
                  <li>INSTAGRAM :-<a href="https://www.instagram.com/pvtt_shrey_95?igsh=YWhnYTEzaTF0ZGI3">pvtt_shrey_95</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>OWNER MESSAGE </h4>
                <p>
                  ENJOY WEBSITE PROPERLY DETAILS AND GAIN DODGE COMPANY CAR'S DETAILS .
                </p>
                <form action="cargallery.html">
                  <button type="submit">THANKS FOR VISIT</button>
                </form>
                <div class="icons">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-brands fa-github"></i>
                </div>
              </div>
            </div>
          </section>

</body>
</html>
