<!DOCTYPE html>
<html>
    <head>
        <!-- This is the controller for our Menu app -->
        <title>Menu App Controller</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <style>
            .page-heading {
                background-image: url("http://www.freewebheaders.com/wordpress/wp-content/gallery/grass/green-grass-field-and-blue-sky-illustration-background-header.jpg");

            }
            .page-footer{
                background-color: rgb(220,220,220); 
            }
            
            .m-t-0{
                margin-top: 0px;
            }
            
            .m-t-30{
                margin-top: 30px;
            }
            
            .m-b-50{
                margin-bottom: 50px;
            }
            
            .textRight{
                text-align: right;   
            }
            .img {
            height: 200px;
            width: 100%;
            background-color: white;
            }
             .subtitle{
                font-family: "Georgia", Times, serif;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar-default">
              <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Oriental Dragon</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    //HERE IS WHERE THE Controller will do the work to request a menu
                    require("MenuView.php");
                    $view = new MenuView();
                    echo $view->genMenu();
                    ?>
                </ul>
            </div>
            </div>
        </nav>
        <!--insert a background picture or logo -->
        <header class="page-heading m-t-0" display: block>

            <div class="container">
                <h1>Finding your car becomes easier</h1> <h1>than finding a grilfriend</h1>

                <p>The easiest to use, most comprehensive car searching website ever exists.</p>
            </div>
        </header>
        

        
        <!--adding searching filters -->
            <div class="row">
            <div class="container col-sm-3">
            <!--Add gallery here-->
            <CENTER> 
<!-- table code starts --> 
<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
<TR><!-- first top row starts -->

<TD COLSPAN="3"><!-- top cell covers three columns starts --> 
<IMG class="img" src="http://blog.caranddriver.com/wp-content/uploads/2015/11/BMW-2-series.jpg"> 
</TD><!-- end of top cell covers three columns -->

</TR><!-- end of  first top row -->

<TR><!-- middle row starts -->

<TD><!-- left cell, middle row starts -->
<IMG class ="img" src="https://www.alamo.com/alamoData/vehicle/bookingCountries/US/CARS/FCAR.doi.320.high.imageSmallSideProfileNodePath.png/1464101893273.png"> 
</TD><!-- end of left cell, middle row -->

</TR><!-- end of middle row -->

<TR><!-- bottom row starts -->

<TD><!-- middle cell, middle row with the image in it  starts --> 
<IMG class ="img" src="http://pngimg.com/upload/audi_PNG1736.png"> 
</TD><!-- end of middle cell, middle row with the image in it -->

</TR><!-- end of bottom row -->

</TABLE><!-- table code ends --> 
</CENTER>
       		 </div>
             <style type="text/css">
			 .btn btn-default btn-lg{
				 display:flex;
			}
			 </style>
        		<div class="container col-md-9">
    				<section>

				<h1 id="educations" class="subtitle" >Search Cars For Sale</h1>
                 <!--adding searching filters -->
                 
        <form action="controller.php" method="post">
       
       
            <div class = "row m-t-30">
            <div class="col-lg-4 col-md-4 col-xs-4">
            <!--div class ="container-fluid"-->
            <label for="makeSelect">Make</label>
            <select class="selectpicker" name ="makeSelect" id = 'make'>
                           <option value="">Acura</option>
                           
                           <option value="">Alfa Romeo</option>
                           
                           <option value="">Aston Martin</option>
                           
                           <option value="">Audi</option>
                           
                           <option value="">BMW</option>
                           
                           <option value="">Bentley</option>
                           
                           <option value="">Buick</option>
                           
                           <option value="">Cadillac</option>
                           
                           <option value="">Chevrolet</option>
                           
                           <option value="">Chrysler</option>
                           
                           <option value="">Dodge</option>
                           
                           <option value="">FIAT</option>
                           
                           <option value="">Ferrari</option>
                           
                           <option value="">Ford</option>
                           
                           <option value="">GMC</option>
                           
                           <option value="">Genesis</option>
                           
                           <option value="">Honda</option>
                           
                           <option value="">Hyundai</option>
                           
                           <option value="">Infiniti</option>
                           
                           <option value="">Jaguar</option>
                           
                           <option value="">Jeep</option>
                           
                           <option value="">Kia</option>
                           
                           <option value="">Lamborghini</option>
                           
                           <option value="">Land Rover</option>
                           
                           <option value="">Lexus</option>
                           
                           <option value="">Lincoln</option>
                           
                           <option value="">Lotus</option>
                           
                           <option value="">MINI</option>
                           
                           <option value="">Maserati</option>
                           
                           <option value="">Mazda</option>
                           
                           <option value="">McLaren</option>
                           
                           <option value="">Mercedes-Benz</option>
                           
                           <option value="">Mitsubishi</option>
                           
                           <option value="">Nissan</option>
                           
                           <option value="">Porsche</option>
                           
                           <option value="">RAM</option>
                           
                           <option value="">Rolls-Royce</option>
                           
                           <option value="">Scion</option>
                           
                           <option value="">Subaru</option>
                           
                           <option value="">Tesla</option>
                           
                           <option value="">Toyota</option>
                           
                           <option value="">Volkswagen</option>
                           
                           <option value="">Volvo</option>
                           
                           <option value="">smart</option>
            </select>   
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4">

        <label for="modelSelect">Model</label>
        <select class="selectpicker" name="modelSelect" id = 'model'>
            <option disabled selected>Select Model</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
        </div>
             
        <div class="col-lg-4 col-md-4 col-xs-4"-->
        <label for="yearSelect">Year</label>
        <select class="selectpicker" name="yearSelect" id = 'year'>
            <option disabled selected>Select Year</option>
            <option>2017</option>
            <option>2016</option>
             <option>2015</option>
            <option>2014</option>
             <option>2013</option>
            <option>2012</option>
             <option>2011</option>
            <option>2010</option>
             <option>2009</option>
            <option>2008</option>
             <option>2007</option>
            <option>2006</option>
             <option>2005</option>
            <option>2004</option>
             <option>2003</option>
            <option>2002</option>
             <option>2001</option>
            <option>2000</option>
             <option>1999</option>
            <option>1998</option>
             <option>1997</option>
            <option>1996</option>
            
        </select>
        </div>
        
        </div>    <br>
        <button class="btn btn-submit" id="search" value="found">Search</button>
    </form>
				
                
                <h1 id="interests" class="subtitle">Sell a Car</h1>
                <form>
                <div class="form-group">
                    <label for="vin" class="control-label">
                        VIN Number
                    </label>
                    <input type="text" id="due" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="status" class="control-group">
                        Vehicle Status
                    </label>
                    <select class="form-control" id="priority">
                        <option value="normal">New</option>
                        <option value="high">Used</option>
                        <option value="high">Certified Preowned</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="make" class="control-label">
                        Make
                    </label>
                    <input type="text" id="due" class="form-control"/>
                </div>
                 <div class="form-group">
                    <label for="make" class="control-label">
                        Model
                    </label>
                    <input type="text" id="due" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="make" class="control-label">
                        Year
                    </label>
                    <input type="text" id="due" class="form-control"/>
                </div>                 
                <button class="btn btn-submit" id="sell">Post</button>
                </form>
                                <br>

            </div>
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    </body>

        <footer class="page-footer m-t-0" display: block>

            <div class="container fluid">
                <div class="row">
        <div class="col-xs-4 col-md-4 col-xs-4"">
            <h5 class="desk-comp">Our Company</h5>
            
            <ul ng-show="expanded" class="toggle-footer">
            
                <li class="footer-item">
                    <a href="/about/" target="_self">About OrientalDragons.com</a>
                </li>
            
                <li class="footer-item">
                    <a href="/contact/" target="_self">Contact OrientalDragons.com</a>
                </li>
            
                <li class="footer-item">
                    <a href="/sitemap/" target="_self">Site Map</a>
                </li>
            
                <li class="footer-item">
                    <a href="/careers/" target="_self">Careers</a>
                </li>
            
                <li class="footer-item">
                    <a href="/sell/fraud/overview" target="_self">Fraud Awareness</a>
                </li>
            
            </ul>
        </div>
        <div class="col-xs-4 col-md-4 col-xs-4">
            <h5 class="desk-comp">Our Partners</h5>
            <ul ng-show="partnerExpanded" class="toggle-footer partner">
            
                <li class="footer-item">
                    <a href="http://www.auto.com/" target="_blank">Auto.com</a>
                </li>
            
                <li class="footer-item">
                    <a href="http://www.newcars.com/" target="_blank">NewCars.com</a>
                </li>
            
                <li class="footer-item">
                    <a href="http://www.repairpal.com/" target="_blank">Cars.com</a>
                </li>
  
            </ul>
        </div>
        </div>
        <div class="col-xs-8 col-md-8 col-xs-8">

        </div>

        </footer>
                <div class="page-footer textRight" id="footer-copyright">
            &copy; 2016 OrientalDragons.com All rights reserved.
        </div>
</html>