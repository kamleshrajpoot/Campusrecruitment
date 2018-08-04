<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="studentlogin.js"></script>


</head>
<style>
    form {
        color: black;
    }
    
    button li a {
        text-decoration: none;
    }
    
    div.container {
        background-color: burlywood;
    }
    
    body {
        position: relative;
    }

</style>

<body data-spy="scroll" data-target="#navbar-example">

    <div class="container">
        <br>
        <?php 
          
          include('header2.php');
          
          
          ?>
        <br>
        <div class="row">

            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <div id="bodydesc" style="margin-left:auto; margin-right:auto;  overflow-y: scroll;">

                            <p id="desc" style="float:left;color: #666666; font-family: Candara,Trebuchet MS,sans-serif; font-size: 12px; font-weight: bold; border-right: thin dotted #666666; line-height: 18px;">

                                         <div id="content"> 
             <!--<img src="../media/aerial-campus.jpg" alt="aerial-campus" class="header-image" />-->
                                             <h3>Location and Climate</h3></br>
               <div id="text">
               	 <p>The Institute is 4 km off National Highway (NH-44) and about 20 km away   from capital city.</p></br>
               	 <p><strong>Nearest railstation:</strong> 2 km<br />
                 <strong>Airlines:</strong> More than seven Airlines connecting Delhi, Kolkata, Guwahati and Mumbai directly.<br/>
               	 <strong>From Airport to NITA:</strong> Taxi, Tata Sumo/Max and Bus services are available.</p></br>
               	 <p>To know more about Tripura visit </br>
                 <a href="http://www.tripura.nic.in">http://www.tripura.nic.in</a> or <a href="http://www.tripurainfo.com">http://www.tripurainfo.com</a></p>
               	 <h2>Location Details</h2>
                 <p><strong>Longi:</strong> 91D25'22&quot;.661   (E339387.823m) </p></br>
                 <p><strong>Lati:</strong> 23D58'26&quot;.904(N2637495.384m) </p></br>
                 <p><strong>Height:</strong> 43.786 m   above sea level </p></br>
                 <p><strong>Rainfall:</strong> 2200 mm (apprx.)</p></br>
                 <p><strong>Campus Area:</strong> 135   hect.</p></br>
                 <p><strong>Temperature:</strong> 6°C to   35°C </p></br>
                 <p><strong>Climate:</strong> Moderate</p></br>
<h2>Location Maps</h2></br>
                 <img src="mapnit.png" class="img-responsive" alt="TripuraMap" width="470" height="550" />
                 <p>&nbsp;</p>
                 </p>
          
                 
                
                 <script type="text/javascript"></script>
                 <script type="text/javascript">// <![CDATA[
FB.init("722f558c7d0f49d915995743717213cf");
// ]]></script>
                 <fb:fan profile_id="11780507109" connections="10" width="300"></fb:fan>
                 <p></p>
               </div>
             </div>                     
                  

                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php include ('footer.php'); ?>
        <hr>


    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="studentlogin.js"></script>
</body>

</html>
