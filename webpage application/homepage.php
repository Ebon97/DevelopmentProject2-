

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">


    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

    </script>


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="testing.css">
    <style>
        #piechart,
        #columnchart,
#columnchart1,
        #weeklysales {
		
            width: 100%;
            height: 100%;
        }

        #piechart {
	padding-top: 300px;
            padding-bottom: 600px;
        }

        #hourly {

            padding-top: 100px;
        }

    </style>

</head>
 

<body>


    <div class="navbar navbar-inverse navbar-static-top">
        <a href="#" class="navbar-brand">Smile and Style Salon</a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="homepage.html">Home</a></li>
                <li><a href="createCustomer.html">Customer</a></li>
                <li><a href="createStaff.html">Staff</a></li>
                <li><a href="createInventory.html">Inventory</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report<b class="car"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Staff</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="image/example/9.jpg" alt="example1" style="width:100%;">
                <div class="carousel-caption">
                    <!--<h3>Image1</h3>
                    <p>First Slide</p>-->
                </div>
            </div>

            <div class="item">
                <img src="image/example/7.jpg" alt="example2" style="width:100%;">
                <div class="carousel-caption">
                    <!-- <h3>Image 2</h3>
                    <p>Second slide</p>-->
                </div>
            </div>

            <div class="item">
                <img src="image/example/6.jpg" alt="example3" style="width:100%;">
                <div class="carousel-caption">
                    <!--  <h3>Image 3</h3>
                    <p>Third Slide</p>-->
                </div>
            </div>

            <div class="item">
                <img src="image/example/8.jpg" alt="example4" style="width:100%;">
                <div class="carousel-caption">
                    <!--<h3>Image 4</h3>
                    //<p>Fourth Slide</p>-->
                </div>
            </div>

            <div class="item">
                <img src="image/example/1.jpg" alt="example5" style="width:100%;">
                <div class="carousel-caption">
                    <!--  <h3>Image 5</h3>
                    <p>Fifth Slide</p>-->
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
   


<div id="columnchart1" style="height: 300px; width: 100%;">

   
<script src="columnchart1.js"></script>

 </div>



    <div id="columnchart" style="height: 300px; width: 100%;">

    <script src="columnchart.js"></script>
    </div>

</body>

</html>
