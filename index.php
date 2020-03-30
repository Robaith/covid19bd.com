
<?php include 'head.php';?>
 <?php include 'navigation.php';?>

<body>

   
  <!-- Page Content -->
  <div class="container">

   <header>

    <div class="row">
      <div class="col-lg-6">
        <p style=" padding-top: 20px; font-weight: bold;" >লক্ষণ সমূহ দেখা গেলে নিন্মোক্ত হটলাইন নম্বরে যোগাযোগ করুন </p>
        <img src="symptom.png" width="400" height="400" >
     </div>


     <div class="col-lg-6">
      <div id="piechart"></div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'percentage'],
    ['Active', 16],
    ['Death', 1],
    ['TV', 0],
    ['Recovered', 3],
    ['Sleep', 0]
    ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Active, Recovery and Death Percentage', 'width':685, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
</div>


</header>


<div class="row text-center">

 <div class="col-lg-8 col-md-8">

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
          <a href="#" class="btn btn-primary" style="background: green" >Total Recovered</a>
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
          <a href="#" class="btn btn-primary" style="background: red">Total Deaths</a>
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
          <a href="#" class="btn btn-primary" style="background: red">New Deaths Today</a>
        </div>

        <div class="card-body">
          <h4 class="card-title" id="nd"></h4>
          <!-- <p class="card-text"> .</p> -->
        </div>

      </div>
    </div>


  </div>
</div>
<div id='news' class="col-lg-4 col-md-4">
  <p class="youth_cup"> <img width="30%" src="https://i.giphy.com/media/J1RWP1OyfkwATrL9cd/giphy.webp" alt="live_icon" class="live_icon"> করোনা: লাইভ আপডেট  </p>
  <iframe src="https://service.prothomalo.com/commentary/index.php" height="400" width="100%"></iframe>
  <img width="30%" src="https://paloimages.prothom-alo.com/contents/themes/public/style/images/Prothom-Alo.png">
</div>

</div>
<!-- /.row -->



</div>
<!-- /.container -->
<div class="container">
  <div class="row">
  <div class="col-lg-6">
    <a href="#" class="btn btn-primary" style="background: black">IEDCR Hotline Numbers</a>
    <p style="font-weight: bold;">
      01401184551-----01401184563  <br>
      01401184554-----01401184568 <br>
      01401184555-----01937000011 <br>
      01401184556-----01937110011 <br>
      01401184559-----01927711784 <br>
      01401184560-----01927711785 <br>
      <p style="font-weight: bold;">Email : iedcrcovid19@gmail.com</p>
      <p style="font-weight: bold;">Facebook : <a href="https://www.facebook.com/pg/IedcrCOVID-19-Control-Room-104339737849330/posts/?ref=page_internal">Iedcr,COVID-19 Control Room</a> </p>
    
     
  </p>
  </div>
  <div class="col-lg-6">







    <!-- this section is kept for Email system -->






  </div>
</div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
  <?php include 'footer.php';?>
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
// var x='';
//     //var k= reverse();
//     for (const i in obj.countrynewsitems.reverse()[0]) {
//   x += obj.countrynewsitems.reverse()[0][i].title + "<br>";


// }
// document.getElementById("demo").innerHTML = x;



}
});




    };

    doajax();

    setInterval(doajax,5000);
  });
</script>

<!—- ShareThis BEGIN -—>
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e733a975b20e800139c4dd7&product=sticky-share-buttons"></script>
<!—- ShareThis END -—>
</body>

</html>
