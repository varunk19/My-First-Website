<?php
    include('header.php');
?>
<div class="tablecont">

<table align="center">
    <tr>
        <th>Country</th>
        <th>Gold</th>
        <th>Silver</th>
        <th>Bronze</th>
        <th style="padding-right:0px;">Total</th>
    </tr>
    <?php
        $conn=mysqli_connect('localhost','root','root123','mini');
        if($conn){
              $sql="SELECT * from standings";
              $res=$conn-> query($sql);
                if($res-> num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo "<tr class='data' onclick=\"window.location='results.php?cname=".$row["country"]."';\"><td>".$row["country"]."</td><td>".$row["gold"]."</td><td>".$row["silver"].
                        "</td><td>".$row["bronze"]."</td><td>".$row["total"]."</td></tr>";            
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