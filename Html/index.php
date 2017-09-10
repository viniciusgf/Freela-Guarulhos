<!-- HEADER -->
<?php 
include "include/header.php";
?>

<!-- CONTEUDO -->

<section id="slide">
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/slide/img-1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="../images/slide/img-1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="../images/slide/img-1.jpg" alt="Los Angeles">
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
	</div>
</section>

<!-- FOOTER -->
<?php 
include "include/footer.php";
?>

<!-- JS ALL PAGES -->
<?php 
include "include/js.php";
?>

</body>
</html>