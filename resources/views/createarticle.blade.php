<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
    </head>
</head>
<body>

    <div class="container">
        <div class="row">
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



                  <nav class="navbar navbar-expand-md  navbar-light bg-light">
                    <div class="container">


                      <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                          <li class="nav-item">
                            <a class="nav-link active" href="/Home">Home</a>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                              <a class="dropdown-item" href="/createcat">Create Categorie</a>
                              <a class="dropdown-item" href="/categories">Voir les categories</a>

                            </div>

                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
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
           <h2 style='margin-top:100px'>Création d'un article</h2>
          <div class="col-9">
    <form action="{{ route('product.store') }}"  method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="des" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Nom user </label>
            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                <option>choose category </option>
                @foreach ($products as $product)
                <option value="{{$product->user_id}}">{{$product->user()->name}}</option>
                 @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Nom categorie</label>
            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                <option>choose category </option>
                @foreach ($products as $product)
              <option value="{{$product->category_id}}">{{$product->category()->name}}</option>
                @endforeach


            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">image</label>
          <input type="file" name="image" class="form-control" id="" >
        </div>
        <a href="/createcat">
        <button type="submit" class="btn btn-primary">Submit</button>
       </a>
      </form></div>
</div>
</div>
</div>

</body>

</html>
