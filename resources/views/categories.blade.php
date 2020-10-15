<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>

    <div class="wrap">

        <header role="banner">
          <div class="top-bar">
            <div class="container">
              <div class="row">
                <div class="col-9 social">
                  <a href="#"><span class="fa fa-twitter"></span></a>
                  <a href="#"><span class="fa fa-facebook"></span></a>
                  <a href="#"><span class="fa fa-instagram"></span></a>
                  <a href="#"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-3 search-top">
                  <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                  <form action="#" class="search-top-form">
                    <span class="icon fa fa-search"></span>
                    <input type="text" id="s" placeholder="Type keyword to search...">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="container logo-wrap">
            <div class="row pt-5">
              <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="index.html">Wordify</a></h1>
              </div>
            </div>
          </div>

          <nav class="navbar navbar-expand-md  navbar-light bg-light">
            <div class="container">


              <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="/Home">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="/createcat">Create Categorie</a>
                      <a class="dropdown-item" href="/categories">Voir les categories</a>

                    </div>

                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown05">
                        <a class="dropdown-item" href="/createar">Create Article</a>
                        <a class="dropdown-item" href="category.html">Voir les articles</a>
                    </div>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
        </header>

        <section class="">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mb-4">Categories</h2>
              </div>
            </div>
            <div class="row blog-entries">
              <div class="col-md-12 col-lg-12 main-content">
                <div class="row">
                    @foreach ($categories as $category)
                  <div class="col-md-6" style="height:500px">
                    <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">

                        <img src="{{ asset('/uploads/categories/' . $category->image) }}"style="height:310px" alt="Image placeholder">
                      <div class="blog-content-body">
                        <div class="post-meta">
                          <h3 class="author mr-2"> {{$category->name}}</h3>&bullet;
                          <span class="mr-2">March 15, 2018 </span> &bullet;
                        </div>
                        <div class="row">
                            <a href="/categories/edit:{{ $category->id }}"><button class="btn"  style="margin-left: 50px;"><i class="fa fa-pencil"></i></button></a>
                            <a href="/cat/delete/{{ $category->id }}"><button class="btn"  style="margin-left: 30px;"><i class="fa fa-trash"></i></button></a>
                        </div>
                      </div>
                    </a>
                  </div>
                 @endforeach



                </div>

                <div class="row mt-5">
                  <div class="col-md-12 text-center">
                    <nav aria-label="Page navigation" class="text-center">
                      <ul class="pagination">
                        <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>




                <!-- END sidebar-box -->


              </div>
              <!-- END sidebar -->

            </div>
          </div>
        </section>

        <footer class="site-footer">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-4">
                <h3>About Us</h3>
                <p class="mb-4">
                  <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                </p>

                <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
              </div>
              <div class="col-md-6 ml-auto">
                <div class="row">
                  <div class="col-md-7">
                    <h3>Latest Post</h3>
                    <div class="post-entry-sidebar">
                      <ul>
                        <li>
                          <a href="">
                            <img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
                            <div class="text">
                              <h4>How to Find the Video Games of Your Youth</h4>
                              <div class="post-meta">
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
                            <div class="text">
                              <h4>How to Find the Video Games of Your Youth</h4>
                              <div class="post-meta">
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                            <div class="text">
                              <h4>How to Find the Video Games of Your Youth</h4>
                              <div class="post-meta">
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-1"></div>

                  <div class="col-md-4">

                    <div class="mb-5">
                      <h3>Quick Links</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Categories</a></li>
                      </ul>
                    </div>

                    <div class="mb-5">
                      <h3>Social</h3>
                      <ul class="list-unstyled footer-social">
                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                        <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                        <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                        <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="small">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>
          </div>
        </footer>
        <!-- END footer -->

      </div>

      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.0.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>


      <script src="js/main.js"></script>
</body>
</html>
