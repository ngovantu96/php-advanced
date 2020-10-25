<?php 
    for($i=1;$i<10;$i++){
        
        for($j=1;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>
<hr>
<?php 
     for($i=1;$i<=10;$i++){  
         for($j=1;$j<=10;$j++){
            echo "* ";
        }
        echo "<br>";
    }
?>
<hr>
<?php 
     for($i=1;$i<10;$i++){  
         for($j=$i;$j<10;$j++){
            echo "&nbsp&nbsp";
        }
        for($j=1;$j<=(2*$i-1);$j++){
            echo "*";
        }
        echo "<br>";
       
    }
?>
<hr>

<?php 
     for($i=1;$i<10;$i++){
        echo " ";
         for($j=9;$j>$i;$j--){
            echo "*";  
        }
        echo "<br>";
       
    }

?>
<hr>

<?php 
    for ($i=0;$i<=5;$i++) {
        for ($j=0; $j<=5;$j++){
            if ($j>5-$i) {
                echo "*";
            } echo "        &nbsp";
        } echo "<br>";
    }

?>