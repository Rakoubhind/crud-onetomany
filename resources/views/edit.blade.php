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


           <h2 style='margin-top:100px'>Modification d'une categorie</h2>
          <div class="col-9">

            <form action="{{ route('category.store') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

                <div class="form-group">
                  <label for="exampleInputEmail1">Nom Categorie</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $categories->name }}" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">image</label>
                  <input type="file" name="image"  value="{{ $categories->image }}" class="form-control" id="" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


          </div>


 </div>
</div>
</div>
</div>

</body>

</html>
