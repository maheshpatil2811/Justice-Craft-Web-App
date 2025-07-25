<html>
    <head>
<style>
/*body background css*/
body{
    padding: 0;
    margin: 0;
    background-image: url('img/kids.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
    background-size: cover;
}

/*login form css*/
.form{
    font-family: "Roboto", sans-serif;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    opacity: 99%;
    max-width: 260px;
    margin: 200px auto 100px;
    padding: 10px 45px 30px 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.form p{
    font-size: 15px;
    padding: 1px;
    text-align: center;
}
.form input{
    outline: 0;
    border-radius: 10px;
    background: #F2F2F2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form input:hover{
    background-color: #D3F8F9;
    transition: all 1s ease 0s;
}
.form input:focus{
    background-color: #D3F8F9;
    transition: all 1s ease 0s;
}
.form button{
    text-transform: uppercase;
    outline: 0;
    border-radius: 10px;
    background: #1ADBE5;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    cursor: pointer;
}
.form button:hover, .form button:active, .form button:focus{
    background-color: #06C5CF;
    transition: all 1s ease 0s;
}
.form .message{
    margin: 15px 0 0;
    color: #B3B3B3;
    font-size: 12px;
}
.form .message a{
    color: #06C5CF;
    text-decoration: none;
}

</style>
</head>

<body>
    <div class="form">
    <p>Login</p>
    <form action="user-login-valid.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>login</button>
        <p class="message">Not registered? <a href="user-register.php">Create an account</a></p>
    </form>
    </div>
</body>
</html>
