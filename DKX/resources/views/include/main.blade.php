<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dán Keo Xe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('headerScript')
    <style>
        .header-top {
            display: flex;
            margin-top: 15px;
            align-items: center;
            justify-content: space-around;
        }

        .header-text {
           color: red;
           font-size: 50px;
           font-family: 'Black Ops One', system-ui;
        }

        .search-input {
            border-radius: 30px;
            border: 1px solid #bbbbbb;
        }

        .menu-dkx {
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: red;
            position: relative;
        }

        .menu-dkx .col-dkx {
            padding: 0px 20px;
            color: white
        }

        .menu-dkx .cart {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .container-dkx .carousel .carousel-inner .carousel-item img{
            width: 100%;
            aspect-ratio: 6/3;
        }
        .text-ribon {
            right: 50px;
            bottom: 100px;
            color: white;
            font-size: 20px;
            padding: 5px 20px;
            position: absolute;
            background-color: red;
        }

    </style>
</head>
<body>
    @include('include.header')
    @include('include.menu')
    <div class="main">
        <div class="container-dkx">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/slide1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/slide2.jpg" alt="secone slide">
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/slide3.jpg" alt="three slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

                <div class="text-ribon">Dán xe chuyên nghiệp</div>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>
