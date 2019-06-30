<?php
    include('header.php');
?>

<div class="tablecont upcont">
    <h1 id="upcoming"><strong>Upcoming Games</strong></h1>
    <div>
        <?php
        $conn=mysqli_connect('localhost','root','root123','mini');
        if($conn){
              $sql="SELECT * from upcoming";
              $res=$conn-> query($sql);
                if($res-> num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo "<h4>".$row["c1"]." vs ".$row["c2"]."</h4><br>
                        <p> ".$row["sport"]." at ".$row["time"]."</p><br>";            
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