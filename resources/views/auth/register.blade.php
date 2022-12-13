<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="glasses website/css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="home.html" class="logo"> LOGO </a>

    <nav class="navbar">
        <ul>

            <li><a href="products.html">products</a></li>
            <li><a href="about.html">about</a></li>
        </li>
        <li><a href="contact.html">contact</a></li>
        <li><a href="#">account +</a>
            <ul>

                    <li><a href="{{ route('login') }}">login</a></li>
                    <li><a href="{{ route('register') }}">register</a></li>

                </ul>
            </li>
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>account</h1>
    <p> <a href="/home">home</a> >> register </p>
</section>

<!-- header section -->

<!-- header section -->

<!-- register form section starts -->

<section class="register-form">
    <form class="form-detail" action="{{ route('register')}}" method="POST">
        @csrf
    <form action="">

        <h3>register now</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="name" placeholder="enter your name" id="name">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="username" placeholder="enter your username" id="username">
        </div>
        {{-- <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="alamat" placeholder="enter your alamat" id="">
        </div> --}}
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" name="email" placeholder="enter your email" id="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password" placeholder="enter your password" id="password">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password_confirmation" placeholder="confirm your password" id="password_confirmation">
        </div>
        <input type="submit" value="sign up" class="btn">
        <a href="{{ route('login') }}" class="btn">already have an account</a>
    </form>

</section>

<!-- register form section ends -->












<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
            <a href="products.html"> <i class="fas fa-angle-right"></i> products</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="blogs.html"> <i class="fas fa-angle-right"></i> blogs</a>
            <a href="contact.html"> <i class="fas fa-angle-right"></i> contact</a>
            <a href="login.html"> <i class="fas fa-angle-right"></i> login</a>
            <a href="register.html"> <i class="fas fa-angle-right"></i> register</a>
            <a href="cart.html"> <i class="fas fa-angle-right"></i> cart</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> my account </a>
            <a href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>

        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" placeholder="enter your emal">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

    <div class="credit"> created by <span>optik_daiv</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>
