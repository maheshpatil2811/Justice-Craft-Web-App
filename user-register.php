<?php
include "header.php";
?>

<html>
<head>
   <style>
@import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{

  font-family: 'PT Sans', sans-serif;
  background-image: url('img/kid2.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
  background-size: cover;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {

    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;

}
   </style>
</head>   
<body style="height:1000;width:800; background-color:red;">
<div style="height:400;width:400;">
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Register <a href="http://opensnippets.com">open snippets</a></h2>
      <div class="card-body py-md-4">
       <form _lpchecked="1" action="user-register-save.php" method="post">
          <div class="form-group">
             <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
             <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            
                          
   <div class="form-group">
     <input type="password" class="form-control" name="password" placeholder="Password" required>
   </div>
   <div class="form-group">
      <input type="password" class="form-control" id="confirm-password" placeholder="confirm-password" required>
   </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
      <a href="user-login.php">Login</a>
                                <button class="btn btn-primary">Create Account</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>

</body>
</html>