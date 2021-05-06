<!DOCTYPE html>
<html>
<head>
    <title>navs</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

</head>


<style type="text/css">

    .bg-dark{
        background-color:  #084761 !important;
    }



    .navbar-brand span{
        color: yellow;
    }


    .navbar-brand{
        font-family: 'Lobster', cursive;
        font-size: 25px;
        font-weight: bold;



    }


    .navbar-dark .navbar-nav .nav-link{
        font-size: 18px;
        text-transform: uppercase;
        font-family: 'Lobster', cursive;
        font-family: 'Potta One', cursive;
        color: black;



    }
    /*hover   .navbar-dark .navbar-nav .nav-link:hover{
        color: black;
    }   */


    .navbar-nav .nav-link:hover{
        border-bottom: 2px solid yellow;
    }



    .navbar-dark .navbar-nav .nav-item{
        margin: 0 12px ;


    }

    footer{
        background-color: black;
        color:white;
        padding: 10px;
        font-size: 25px;
        font-family: 'Lobster', cursive;
    }

    footer .col-md-4 .social-icon a {
        margin: 0 12px;
    }

    footer .col-md-4 .social-icon a:hover{
        color: red;
    }


</style>
<body>


<!-- start navbar area -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="#"><span>The</span> Syndicate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

                <button  a href="#" class="btn btn-info ">THE POST</a></button>
            </div>
        </div>
    </div>
</nav>


<br>
<br>
<br>
<br>
<br>
<br>
<!-- end navbar area -->



<div class="todo text-center">
    <div class="container">
        <div class="row">


            <div class="card border-warning mb-3" style="width: 80% "  >
                <div class="card-header">


                    <h1>Hello Todo</h1>



                </div>





                <form class="row g-3" action="{{url('/todo')}}" method="POST">

                    <div class="col-auto">

                        <input type="text" id="#" name="todo" placeholder="Ad Iteam">
                        @csrf
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Add Todo</button>
                    </div>
                </form>





                <div class="card-body">


                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Laravel 8</div>

                            </div>
                            <button class="brn btn-danger"><i class="fas fa-trash-alt"></i> Delete </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">PHP</div>

                            </div>
                            <button class="brn btn-danger"><i class="fas fa-trash-alt"></i> Delete </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">AJAX</div>

                            </div>
                            <button class="brn btn-danger"><i class="fas fa-trash-alt"></i> Delete </button>
                    </ol>

                </div>




            </div>
        </div>


    </div>
</div>

</div>






















<!-- Footer area start -->
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center">The Synsicate Compani Limited&#169;</h2>
            </div>


            <div class="col-md-4">
                <div class="social-icon">

                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer area start -->




<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>
<script type="text/javascript" src="js/fontawesome.min.js"></script>

</body>
</html>
