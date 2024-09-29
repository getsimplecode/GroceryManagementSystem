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
        font-size: 60px;
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
        margin-top: 20%;
        margin-right: 0;
    }
    .signup-button {
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
    .signup-button:hover {
        background-color: darkblue;
    }
    .login a{
        text-decoration: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }
    .login a:hover{
        text-shadow: 0 4px 8px blue,
        0 6px 20px rgba(0, 0, 0, 0.19);
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <div class="form-group">
            <h1>Sign-Up</h1>
            <form action="../Controllers/UserController.php?page=register" method="post">
                <div class="inputbox"><input type="text" name="fullname" placeholder="Full Name" required></div>
                <div class="inputbox"><input type="email" name="email" placeholder="Email" required></div>
                <div class="inputbox"><input type="text" name="username" placeholder="Username" required></div>
                <div class="inputbox"><input type="password" name="password" placeholder="Password" required></div>
                <div class="inputbox"><input type="password" name="confirmpassword" placeholder="Confirm Password" required></div>
                <button class="signup-button" type="submit">Sign Up</button>
                <div class="login"><p>Already have an account? <a href="../Logins/LoginForm.php">Log In</a></p></div>
            </form>
        </div>
        <div class="logo">
            <img src="../../res/images/loh.png" width="300px" height="300px">
        </div>
    </div>
</body>
