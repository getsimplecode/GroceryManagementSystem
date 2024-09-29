<style>
    body{
        background-color: #ecebf1;
    }
    .container {
        background-color: #4b27ff;
        width: 800px;
        height: 600px;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 20px;
        box-shadow: 0 4px 8px black,
                    0 6px 20px rgba(0, 0, 0, 0.19);
        opacity: 0; /* Initially hidden */
        transform: translate(-50%, -50%) scale(0.8); /* Start with a smaller scale */
        animation: slowMoEffect 0.9s ease-out forwards; /* Slowmo effect */
    }

    /* Slowmo animation */
    @keyframes slowMoEffect {
        0% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.8); /* Start small */
        }
        100% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1); /* End at normal size */
        }
    }
    .form-group{
        text-align: center;
        background-color: #ecebf1;
        float: right;
        margin: auto;
        width: 50%;
        height: 100%;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .form-group h1{
        color: white;
        font-family: "Anton", sans-serif;
        font-size: 70px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 2px;
        text-shadow: 2px 2px 5px black;
    }
    .form-group form{
        text-align: center;
    }
    .inputbox{
        padding: 10px;
        margin-left: 15%;
    }
    .inputbox input{
      padding: 10px;
      display: flex;
      align-items: center;
      border-radius: 10px;
      border: 1px solid #ccc; /* Optional: Add a border */
      width: 250px; /* Optional: Set a width */
    }
    .forgotpassword a{
        text-decoration: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-right: 35%;
    }
    .forgotpassword a:hover{
        text-shadow: 0 4px 8px blue,
        0 6px 20px rgba(0, 0, 0, 0.19);
        text-decoration:underline;
    }
    .logo{
        display: flex;
        justify-content: center;
        float: left;
        width: 50%;
        height: 100%;
        background-color: #3a14f7;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .logo img {
        margin-right: 0;
    }
    .login-button {
    width: 200px;
    background-color: #4b27ff;
    border: none; 
    color: white; 
    padding: 15px 42px; 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 30px 2px;
    cursor: pointer;
    border-radius: 12px;
    transition: background-color 0.3s;
    }
    .login-button:hover {
        background-color: darkblue;
    }
    .register a{
        text-decoration: none;
    }
    .register a:hover{
        text-shadow: 0 4px 8px blue,
        0 6px 20px rgba(0, 0, 0, 0.19);
        text-decoration:underline;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<body>
    <div class="container">
        <div class="form-group">
            <h1>LogIn</h1>
            <form action="../Controllers/ProductController.php?page=dashboard" method="post">
                <div class="inputbox"><input type="text" name="username" placeholder="username" required></div>
                <div class="inputbox"><input type="password" name="password" placeholder="password" required></div>
                <div class="forgotpassword"><a href="">Forgot Password</a></div>
                <button class="login-button" onclick="location.href='?login' " >login</button>
                <div class="register"><p>Dont have an account?<a href="../Logins/SignupForm.php">Sign-Up</a></p></div>
            </form>
        </div>
        <div class="logo">
            <img src="../../res/images/loh.png" width="350px" height="350px">
        </div>
    </div>
</body>