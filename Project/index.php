<?php
    include('header.php');
?>
<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/img5.jpg" class="d-block w-100" alt="stadium">
    </div>
    <div class="carousel-item">
      <img src="./images/img3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/img1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container-fluid container1">
    <h1><strong>Latest News</strong></h1>
    <div>
        <?php
        $conn=mysqli_connect('localhost','root','root123','mini');
        if($conn){
              $sql="SELECT * from latest";
              $res=$conn-> query($sql);
                if($res-> num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo "<h4>".$row["country"]." wins a ".$row["medal"]." medal</h4><br>
                        <p>By ".$row["name"]." in ".$row["sport"]."</p><br>";            
                    }
                }
            $conn->close();
        }
        else{
            die();
        }
    ?>
    </div>
</div>
<?php
    include('footer.php');
?>