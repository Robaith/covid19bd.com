<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Corona Live Update</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
 <?php include 'navigation.php';?>
  <!-- Page Content -->
  <div class="container">

        <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary">Total Cases</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="tc"></h4>
            <!-- <p class="card-text">Lorem ipsum dolor .</p> -->
          </div>
          
        </div>
      </div>

      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary">Active Cases</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="ac"></h4>
            <!-- <p class="card-text">Lorem ipsum dolor .</p> -->
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary" >Total Recovered</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="tr"></h4>
           <!--  <p class="card-text">Lorem ipsum dolor .</p> -->
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary">Total Deaths</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="td"></h4>
            <!-- <p class="card-text">Lorem ipsum dolor .</p> -->
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary">New Cases Today</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="nc"></h4>
           <!--  <p class="card-text">Lorem ipsum dolor .</p> -->
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <a href="#" class="btn btn-primary">New Deaths Today</a>
          </div>
          
          <div class="card-body">
            <h4 class="card-title" id="nd"></h4>
            <!-- <p class="card-text"> .</p> -->
          </div>
          
        </div>
      </div>


    </div>
    <!-- /.row -->


  </div>
  <!-- /.container -->
 
<p id="demo"></p>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {
    // your setTimeout function goes in here.

    function doajax(){
    	$.ajax({
  url: 'https://thevirustracker.com/free-api?countryTotal=BD',
  dataType: 'json',
  success: function(data) {

    var obj = data;



    document.getElementById("tc").innerHTML = obj.countrydata[0].total_cases;
    document.getElementById("tr").innerHTML = obj.countrydata[0].total_recovered;
    document.getElementById("td").innerHTML = obj.countrydata[0].total_deaths;
    document.getElementById("nc").innerHTML = obj.countrydata[0].total_new_cases_today;
    document.getElementById("nd").innerHTML = obj.countrydata[0].total_new_deaths_today;
    document.getElementById("ac").innerHTML = obj.countrydata[0].total_active_cases;
var x='';
    //var k= reverse();
    for (const i in obj.countrynewsitems.reverse()[0]) {
  x += obj.countrynewsitems.reverse()[0][i].title + "<br>";
   
  
}
document.getElementById("demo").innerHTML = x;



  }
});



           
    };

     doajax();

     setInterval(doajax,5000);
});
  </script>


</body>

</html>
