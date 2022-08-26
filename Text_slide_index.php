<html>
<head>
<title> Image/Div Slider</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
  .h{
    height:100%;
    background-repeat:no-repeat;
    background-image: url("https://charusat.ac.in/images/home/charusat1.webp");
    }
    .h div{
    text-align: center;
    padding-top:130px;
    }
    section{
        display:inline-block;
        /*border:1px solid black;*/
        color:rgb(186, 240, 61);
    
    }
    .text-block {
      position: absolute;
      bottom: 20px;
      right: 20px;
      height:100px;
      background-color: black;
      color: white;
      padding-left: 20px;
      padding-right: 20px;
    }
    .item{
        text-align:center
    }
    
    .container {
      position: relative;
      font-family: Arial;
    }
</style>

</head>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>-->

  <!-- Wrapper for slides -->
<div class="h" >
  <div class="carousel-inner">
    <div class="item active">
      <section>
            <span style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Demo Data with the text Will Be Shown Here</span>
        </section>
        <br/>
        <section>
          <span style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Demo Data with the text Will Be Shown Here</span>
        </section>
        <br/>
        <section>
           <b> <h4>Demo Data with the text Will Be Shown Here</h4></b>
        </section>
    </div>
    <div class="item">
        <section>
          <span style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Demo Data with the text Will Be Shown Here</span>
        </section>
        <br/>
        <section>
            Some Info 5
        </section>
        <br/>
        <section>
          <span style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Demo Data with the text Will Be Shown Here</span>
        </section>
    </div>
</div>   

  </div>

  <!-- Controls -->
<!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>

</body>

<script>
  $('.carousel').carousel({
  interval:3000
})
</script>
</html>