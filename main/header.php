<?php include('connection.php'); ?>
                             
                            
<!DOCTYPE html>
<html>
    <head> 
         <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    </head>
   <style>
    div.container
        {
            background-color:burlywood;
        }
        ul li a{
            color:blueviolet;
        }
        div container d1 h1{
            text-align:center;
        }
       marquee{
         
       }
</style>

   <body> 
    <div class="container" >
             <br>
           <?php 
          
          include('header2.php');
          
          
          ?>
        <br>
            <div class="row">
                <div class="jumbutron">
                   <div class="col-md-6">
                        <div class="list-group">
         <div class="list-group-item alert alert-info" role="alert"><cite>Latest News</cite></div> 
                      <?php  
                              
                                 $query="select * from news";
                                 $query1=mysqli_query($con,$query);
                                $i=0;
                            while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?>
                                   
                               
                <p class="list-group-item list-group-item-success"><marquee><?php echo $result['lnews']; ?>
  </marquee></p>
  
<?php } ?>

 
</div>
                    </div>
                </div>
      <div class="jumbutron">
        <div class="col-md-6">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                       <ol class="carousel-indicators">
                             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

  <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="mm.jpg" alt="please">
                              <div class="carousel-caption">
                                 <h>9th Convocation</h>
                              </div>
                        </div>
                     <div class="item ">
                           <img src="mmm.jpg" alt="please">
                             <div class="carousel-caption">
                               <h>9th Convocation</h>
                            </div>
                       </div>
                     <div class="item ">
                     <img src="mmmm.jpg" alt="please">
                     <div class="carousel-caption">
                         <h>9th Convocation</h>
                     </div>
                     </div>
              </div>

  <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                       </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
      </div>
      </div>
       </div>
    </div>
      <hr>
   </div>
                 <script src="js/bootstrap.min.js"></script>
                 <script src="js/jquery-3.1.1.min.js"></script>
     </body>
</html>

