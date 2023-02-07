<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoard Warriors</title>
</head>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hoard Warriors</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="website.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="member.php">MEMBERS</a></li>
                    <li><a href="contactus.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Search for Books">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Contact Us</h1>
            <p class="par">
            <b>Christine Joyce Cruz</b><br>
                <h><a href="https://web.facebook.com/chrisi.iom"><ion-icon name="logo-facebook"></ion-icon></a> Christine Joyce Cruz<h>
                <br><a href="#"><ion-icon name="logo-google"></ion-icon></a> christinejoycecruz@gmail.com</b><br><br>
            <b>Danica Franco</b><br>
                <h><a href="https://web.facebook.com/dhannica.franco"><ion-icon name="logo-facebook"></ion-icon></a> Danica Franco<h>
                <br><a href="#"><ion-icon name="logo-google"></ion-icon></a> danicafranco@gmail.com</b><br><br>
            <b>Joana Papilirin</b><br>
                <h><a href="https://web.facebook.com/profile.php?id=100009574471027"><ion-icon name="logo-facebook"></ion-icon></a> Joana Papilirin<h>
                <br><a href="#"><ion-icon name="logo-google"></ion-icon></a> joanapapilirin@gmail.com</b><br><br>
            <b>Alyssa Nicole Tesalona</b><br>
                <h><a href="https://web.facebook.com/alyssanicole.tesalona"><ion-icon name="logo-facebook"></ion-icon></a> Alyssa Nicole Taylaran Tesalona<h>
                <br><a href="#"><ion-icon name="logo-google"></ion-icon></a> atesalona66@gmail.com</b></p>

                <button class="cn"><a href="#">JOIN US</a></button>

                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="" placeholder="Enter Password Here">
                    <button class="btnn"><a href="#">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="https://web.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://gmail.com/"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="https://skype.com/"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
            <style>
            {
                margin: 0;
                padding: 0;
                }
            body{
                background-color: #ed91ff;
                }
            .navbar{
                width: 1200px;
                height: 75px;
                margin: auto;
                }
            .icon{
                width: 200px;
                float: left;
                height: 70px;
                }
            .logo{
                color: #a700c8;
                font-size: 35px;
                font-family: Arial;
                padding-left: 20px;
                float: left;
                padding-top: 10px;
                margin-top: 5px
                }
            .menu{
                width: 400px;
                float: left;
                height: 70px;
                }
            ul{
                float: left;
                display: flex;
                justify-content: center;
                align-items: center;
                }
            ul li{
                list-style: none;
                margin-left: 62px;
                margin-top: 27px;
                font-size: 14px;
                }
            ul li a{
                text-decoration: none;
                color: #fff;
                font-family: Arial;
                font-weight: bold;
                transition: 0.4s ease-in-out;
                }
            ul li a:hover{
                color: #a700c8;
                }
            .search{
                width: 330px;
                float: left;
                margin-left: 270px;
                }
            .srch{
                font-family: 'Times New Roman';
                width: 200px;
                height: 40px;
                background: transparent;
                border: 1px solid #a700c8;
                margin-top: 13px;
                color: #fff;
                border-right: none;
                font-size: 16px;
                float: left;
                padding: 10px;
                border-bottom-left-radius: 5px;
                border-top-left-radius: 5px;
                }
            .btn{
                width: 100px;
                height: 40px;
                background: #a700c8;
                border: 2px solid #a700c8;
                margin-top: 13px;
                color: #fff;
                font-size: 15px;
                border-bottom-right-radius: 5px;
                border-bottom-right-radius: 5px;
                transition: 0.2s ease;
                cursor: pointer;
                }
            .btn:hover{
                color: #e873ff;
                }
            .btn:focus{
                outline: none;
                }
            .content{
                width: 1200px;
                height: auto;
                margin: auto;
                color: #530064;
                position: relative;
                }
            .content .par{
                padding-left: 20px;
                padding-bottom: 25px;
                font-family: Arial;
                letter-spacing: 1.2px;
                line-height: 30px;
                }
            .content h1{
                font-family: 'Times New Roman';
                font-size: 60px;
                padding-left: 20px;
                margin-top: 9%;
                letter-spacing: 2px;
                }
            .content .cn{
                width: 160px;
                height: 40px;
                background: #a700c8;
                border: none;
                margin-bottom: 10px;
                margin-left: 20px;
                font-size: 18px;
                border-radius: 10px;
                cursor: pointer;
                transition: .4s ease;
                }
            .content .cn a{
                text-decoration: none;
                color: #000;
                transition: .3s ease;
                }
            .cn:hover{
                background-color: #fff;
                }
            .content span{
                color: #a700c8;
                font-size: 65px
                }
            .form{
                width: 250px;
                height: 380px;
                background-color: #e355ff;
                position: absolute;
                top: -20px;
                left: 870px;
                transform: translate(0%,-5%);
                border-radius: 10px;
                padding: 25px;
                }
            .form h2{
                width: 220px;
                font-family: sans-serif;
                text-align: center;
                color: #a700c8;
                font-size: 22px;
                background-color: #fae1ff;
                border-radius: 10px;
                margin: 2px;
                padding: 8px;
                }
            .form input{
                width: 240px;
                height: 35px;
                background: transparent;
                border-bottom: 1px solid #a700c8;
                border-top: none;
                border-right: none;
                border-left: none;
                color: #fff;
                font-size: 15px;
                letter-spacing: 1px;
                margin-top: 30px;
                font-family: sans-serif;
                }
            .form input:focus{
                outline: none;
                }
            ::placeholder{
                color: #fae1ff;
                font-family: Arial;
                }
            .btnn{
                width: 240px;
                height: 40px;
                background: #a700c8;
                border: none;
                margin-top: 30px;
                font-size: 18px;
                border-radius: 10px;
                cursor: pointer;
                color: #fff;
                transition: 0.4s ease;
                }
            .btnn:hover{
                background: #fff;
                color: #a700c8;
                }
            .btnn a{
                text-decoration: none;
                color: #000;
                font-weight: bold;
                }
            .form .link{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 17px;
                padding-top: 20px;
                text-align: center;
                }
            .form .link a{
                text-decoration: none;
                color: #a700c8;
                }
            .liw{
                padding-top: 15px;
                padding-bottom: 10px;
                text-align: center;
                }
            .icons a{
                text-decoration: none;
                color: #fff;
                }
            .icons ion-icon{
                color: #fff;
                font-size: 30px;
                padding-left: 14px;
                padding-top: 5px;
                transition: 0.3s ease;
                }
            .icons ion-icon:hover{
                color: #a700c8;
                }  
            </style>
<body>

</body>
</html>