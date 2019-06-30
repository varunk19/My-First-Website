<?php
    include('header.php');
?>
<div class="tablecont">

<table align="center">
    <tr>
        <th>Country</th>
        <th>Sport</th>
        <th>Name</th>
        <th>Medal</th>
    </tr>
    <?php
    $cn=$_GET['cname'];
        $conn=mysqli_connect('localhost','root','root123','mini');
        if($conn){
              $sql="SELECT * from winners where country='".$cn."'";
              $res=$conn-> query($sql);
                if($res-> num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo "<tr><td>".$row["country"]."</td><td>".$row["sport"]."</td><td>".$row["name"].
                        "</td><td>".$row["medal"]."</td></tr>";            
                    }
                    echo "</table>";
                }
            $conn->close();
        }
        else{
            die();
        }
    ?>
</table>    
</div>
<?php
    include('footer.php');
?>