
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a1a44d351e.js" crossorigin="anonymous"></script>
    <style>
        .wrapper {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .row {
            min-height: 83px;
        }

        .fa {
            color: white;
        }

        .jumbotron {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .intro {
            width: 100%;
            height: 200px;
        }

        .prog-title {
            font-size: 24px;
            font-weight: bold;
        }

        .card-textbox {
            width: 100%;
            height: 30px;
            margin: 10px 0px;
        }

        .card {
            width: calc(100%/3-20px);
        }

        @media only screen and (max-width: 700px) {
            .card-box {
                height: 1150px;
            }

            .card {
                width: 350px;
                margin: 5px;
            }

        }

        @media only screen and (min-width: 700px) {
            .card-box {
                height: 1050px;
            }
        }

        @media only screen and (min-width: 750px) {
            .card-box {
                height: 560px;
            }
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ asset('img/blog_portfolio/pic.jpg')}}" class="img-responsive img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <div class="row bg-secondary wrapper no-gutters">
                    <h1 class="text-center align-self-center text-white display-3">Jhon Smith</h1>
                    <div>
                        <div class="row bg-secondary wrapper no-gutters">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
                <div class="row bg-secondary wrapper no-gutters">
                <a style="color:aliceblue" href="{{('/home')}}">User Dashboard</a>
                <a style="color:aliceblue; margin:5px" href="{{('/admin')}}">Admin Panel</a>
                </div>
                    </div>
                </div>
                <div class="row bg-dark text-white align-justify no-gutters">
                    <div class="wrapper ml-3">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores consequatur quibusdam
                            vitae,
                            molestias corrupti dicta ratione numquam quas atque consequuntur.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-3 bg-primary wrapper" style="height: 151px;">
                        <div>
                            <a href="#">
                                <i class="fa fa-home fa-2x"></i>
                                <p class="text-white display-5">Home</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 bg-success wrapper" style="height: 151px;">
                        <div>
                            <a href="#">
                                <i class="fa fa-graduation-cap fa-2x"></i>
                                <p class="text-white display-5">Resume</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 bg-warning wrapper" style="height: 151px;">
                        <div>
                            <a href="#">
                                <i class="fa fa-folder-open fa-2x"></i>
                                <p class="text-white display-5">Work</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 bg-danger wrapper" style="height: 151px;">
                        <div>
                            <a href="#">
                                <i class="fa fa-envelope fa-2x"></i>
                                <p class="text-white display-5">Email</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron bg-primary">
            <h2 class="text-white ml-2">Welcome to My Website</h2>
            <p class="text-white ml-2" style="font-size: 20px; font-weight: lighter;">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Pariatur, obcaecati optio ipsum at iure
                quis deleniti ab aut amet, cumque laborum, ut delectus et vero?</p>
        </div>
        <div class="jumbotron bg-light border">
            <h2 class="ml-2">My Skills</h2>
            <p class="ml-2" style="font-size: 16px; font-weight: lighter;">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Pariatur, obcaecati optio ipsum at iure
                quis deleniti ab aut amet, cumque laborum, ut delectus et vero?</p>
            <hr>
            <h1 class="display-4 ml-2 prog-title">HTML 5</h1>
            <div class="progress">
                <div class="progress-bar ml-2 bg-success" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h1 class="display-4 ml-2 mt-1 prog-title">CSS 3</h1>
            <div class="progress">
                <div class="progress-bar ml-2 bg-primary" role="progressbar" style="width: 75%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h1 class="display-4 ml-2 mt-1 prog-title">Javascript</h1>
            <div class="progress">
                <div class="progress-bar ml-2 bg-primary" role="progressbar" style="width: 80%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h1 class="display-4 ml-2 mt-1 prog-title">Bootstrap</h1>
            <div class="progress">
                <div class="progress-bar ml-2 bg-warning" role="progressbar" style="width: 60%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="jumbotron bg-success border border-dark">
            <h2 class="text-white ml-2">My Resume</h2>
            <h6 class="text-white ml-2" style="font-size: 20px; font-weight: lighter;">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Pariatur, obcaecati optio ipsum at iure
                quis deleniti ab aut amet, cumque laborum, ut delectus et vero?</h6>
        </div>
        <div class="jumbotron bg-success border border-dark card-box" style="min-height: 500px;">
            <h2 class="ml-2">Where I've Worked!</h2>
            <h6 class="ml-2" style="font-size: 20px; font-weight: lighter;">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Pariatur, obcaecati optio ipsum at iure
                quis deleniti ab aut amet, cumque laborum, ut delectus et vero?</h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-body">
                            <p class="card-text">Sample Text</p>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk
                                of the card's content.</p>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Position: Front-end Developer</span>
                            </div>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Phone: +92-320-1488495</span>
                            </div>
                        </div>
                        <div class="card-header">
                            Dates 2017-2020
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">PNY Trainings</p>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk
                                of the card's content.</p>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Position: Instructor</span>
                            </div>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Phone: +92-320-1488495</span>
                            </div>
                        </div>
                        <div class="card-header">
                            Dates 2012-2017
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Zameen.com</p>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk
                                of the card's content.</p>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Position: Back-end Developer</span>
                            </div>
                            <div class="card-textbox bg-dark">
                                <span class="text-white ml-1">Phone: +92-320-1488495</span>
                            </div>
                        </div>
                        <div class="card-header">
                            Dates 2012-2019
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron bg-dark">
            <button class="btn btn-outline-secondary">Download Resume</button>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>