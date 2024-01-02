<!--doctype html-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Blog Section</title>
    <!--Stylesheet----------------------------------->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <!--fav-icon------------------------------------->
    <link rel="shortcut icon" href="{{asset('assets/images/fav-icon.svg')}}" />
    <!--poppins-font-family-------------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--blog-section============================================================================-->
    <header>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="topnav" id="myTopnav">
            <a href="{{route('home')}}">Home</a>
            <a href="#">All Blog</a>
            <a href="#">About</a>
            <a href="{{route('register')}}" class="login-menu">Register</a>
            <a href="{{route('login')}}" class="login-menu">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Awesome Blog</h1>
            <p>Best Blog Site On The Planet</p>
            <a class="btn-banner" href="blog-form.html">Start Now</a>
        </div>
    </div>
    <main>
        <main>
            <section id="container ">
                <div class="form-area  container">
                    <div class="form-title">
                        <h2 class="mt-5">Login</h2>
                    </div>
                    <form action="{{ route('login') }}" method="POST" class="login-form">
                        @csrf
                        <div class="form-item">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" placeholder="User email">
                        </div>
                        <div class="form-item">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" placeholder="User password">
                        </div>
                        <button class="form-button" type="submit">Login</button>
                    </form>
                </div>
            </section>
        </main>
    </main>
    <footer>
        <p>©2023 All Rights Reserved</p>
    </footer>

    <!-- scripts -->
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-eWMvKv6oT4GgcR1jxCpG8YlVV45pGxmJ/DezQn4Fo2gQ6REI2z8D2LHa3ToIwJsY" crossorigin="anonymous"></script>
</body>

</html>









