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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--blog-section============================================================================-->
    <header>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="topnav" id="myTopnav">
            <a href="#">Home</a>
            <a href="#">All Blog</a>
            <a href="#">About</a>
            <a href="login.html" class="login-menu">Login</a>
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
        <section id="blog">
            <!--blog-heading--------------->
            <div class="blog-heading">
                <span>Recent Posts</span>
                <h3>My Blog</h3>
            </div>

            <!--container---------------->
            <div class="blog-container">
                <!--box-1------------->
                <div class="blog-box">
                    <!--img---->
                    <div class="blog-img">
                        <img src="https://www.searchenginejournal.com/wp-content/uploads/2019/07/the-essential-guide-to-using-images-legally-online.png"
                            alt="blog">
                    </div>
                    <!--text--->
                    <div class="blog-text">
                        <span>18 July 2021 / Web Design</span>
                        <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                            veritatis
                            adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                            perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                        <div class="blog-btn-section">
                            <a href="#">Read More</a>
                            <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                        </div>
                    </div>
                </div>

                <!--box-2------------->
                <div class="blog-box">
                    <!--img---->
                    <div class="blog-img">
                        <img src="https://neilpatel.com/wp-content/uploads/2021/05/How-to-Find-Image-Sources.jpg"
                            alt="blog">
                    </div>
                    <!--text--->
                    <div class="blog-text">
                        <span>18 July 2021 / Web Design</span>
                        <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                            veritatis
                            adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                            perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                        <div class="blog-btn-section">
                            <a href="#">Read More</a>
                            <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                        </div>
                    </div>
                </div>

                <!--box-3------------->
                <div class="blog-box">
                    <!--img---->
                    <div class="blog-img">
                        <img src="{{asset('assets/images/banner.jpg')}}" alt="blog">
                    </div>
                    <!--text--->
                    <div class="blog-text">
                        <span>18 July 2021 / Web Design</span>
                        <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                            veritatis
                            adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                            perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                        <div class="blog-btn-section">
                            <a href="#">Read More</a>
                            <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>© All Rights Reserved</p>
    </footer>

    <!-- scripts -->
    <script src="{{asset('assets/js/index.js')}}"></script>
</body>

</html>