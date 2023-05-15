<?php 
  include_once "./veiw/top.php";
  include_once "./veiw/nav.php"; 
  require_once "sysgem/membership.php";
if(isset($_POST["submit"])){
   
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

       $ret = registerUser($username,$email,$password);
       $message = "";
       switch($ret){
        case "Register Success": $message = "Register Success";break;
        case "Email is already in Use": $message = "Email is already in Use";break;
        case "Register Fail": $message = "Register Fail";break;
        case "Fail": $message = "Authentication";break;
        default:break;
       }

       echo "
       <div class='container'>
       <div class='alert alert-warning alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> You should check in on some of those fields below.
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
       </button>
        </div>
        </div>
       
       ";
  }
?>


<div class="container my-3">

<div class="col-md-8 offset-md-2 table-bordered p-5">
    <h1 class="text-danger text-center mb-3 ">Register To Be A Member</h1>
<form class="" method="POST" action="register.php">
<div class="from-group my-3">
  <label for="username">Username</label>
  <input type="text" name="username" class="form-control" id="username" placeholder="Enter Your Name">
</div>
  <div class="from-group my-3">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  <div class="from-group my-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
     <button class="btn btn-primary float-end mt-3" type="submit" value="submit" name="submit">Register</button>

</form>
</div>
</div>



<?php 
  include_once "./veiw/footer.php"; 
  include_once "./veiw/base.php";
?>







