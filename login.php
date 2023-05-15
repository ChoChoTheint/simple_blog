<?php 
  include_once "./veiw/top.php";
  include_once "./veiw/nav.php"; 

  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo $email . $password;
}

?>


<div class="container my-3">

<div class="col-md-8 offset-md-2 table-bordered p-5">
    <h1 class="text-danger text-center mb-3 ">Login To See Special Posts</h1>
<form action="login.php" method="POST">
  <div class="form-group my-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group my-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
     <button class="btn btn-primary float-end mt-3" type="submit" name="submit" value="submit">Login</button>

</form>
</div>
</div>



<?php 
  include_once "./veiw/footer.php"; 
  include_once "./veiw/base.php";
?>







