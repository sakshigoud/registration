<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
</head>
<style>
    *{
    box-sizing:border-box;
    }
    .container{
        padding:15px;
        margin:20px;
        background-color:blue;
    }
    input[type=text],input[type=password] ,input[type=email]{
               width:100%;
               padding:12px;
               border:none;
               display:inline-block;
               background:whitesmoke;
    }
    input[type=text]:focus,input[type=password]:focus ,input[type=email]:focus{
        outline:none;
        border:none;
        background: #ddd;
      
    }
    label{
        font-size:25px;
    }
  .registration{
    width:100%;
      margin:10px;
      padding:10px;
      background:white;
      border:none;
      outline:none;   
      cursor:pointer;
      opacity:0.9;
    }
    .registration:hover{
        opacity:1;
        background:grey;
    }
    .signin{
        text-align:center;
    }


</style>

<body>
   <form action="register.php" method="POST" id="registerform">
    <div class="container">
        <h1>Registration Form</h1>
        <p>Create an account</p>
        <label for="firstname"><b>First name:</b></label>
       <input type="text" name="firstname" id="firstname" placeholder="your name" required>

       <label for="lastname"><b>Last name:</b></label>
       <input type="text" name="lastname" id="lastname" placeholder="your  surname" required>

       <label for="email"><b>Email:</b></label>
       <input type="email" name="email" id="email" placeholder="your email address" required>

       <label for="psw"><b>Password</b></label>
       <input type="text" name="password" id="password" placeholder="Enter password" required>

       <button type="submit" class="registration">Register</button>
    </div>

    <div class="signin">
    <p>already have an account? <a href="#">Sign in</a></p>
    </div>
   </form>
   
</body>
</html> 