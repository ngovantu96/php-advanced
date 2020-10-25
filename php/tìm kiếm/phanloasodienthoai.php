
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="#" method="post">
            <textarea name="numberphone" id="" cols="100" rows="10"></textarea>
            <input type="submit" value="result">
        </form>
        <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numberphone = $_POST["numberphone"];
        $viettel = [];
        $mobiePhone = [];
        $vinaPhone = [];
        $otherPhone = [];
        $arrNumberPhone = explode(" ",$numberphone);
        foreach($arrNumberPhone as $value){
            if(substr("$value",-10,3) == "086" || substr("$value",-10,3) == "096" ||
             substr("$value",-10,3) == "097" || substr("$value",-10,3) == "098" || 
             substr("$value",-10,3) == "032" || substr("$value",-10,3) == "033" ||
             substr("$value",-10,3) == "034" || substr("$value",-10,3) == "035" ||
             substr("$value",-10,3) == "036" || substr("$value",-10,3) == "037" ||
             substr("$value",-10,3) == "038" || substr("$value",-10,3) == "039" ){
                array_push($viettel,$value);
                echo "số điện thoại viettel";
                echo "<pre>";
              print_r($viettel);
             }
             if(substr("$value",-10,3) == "088" || substr("$value",-10,3) == "091" ||
             substr("$value",-10,3) == "094" || substr("$value",-10,3) == "083" || 
             substr("$value",-10,3) == "084" || substr("$value",-10,3) == "085" ||
             substr("$value",-10,3) == "081" || substr("$value",-10,3) == "082")
            {
                array_push($vinaPhone,$value);
                echo "số điện thoại vinaphone";
                echo "<pre>";
                print_r($vinaPhone);
             }
             if(substr("$value",-10,3) == "089" || substr("$value",-10,3) == "090" ||
             substr("$value",-10,3) == "093" || substr("$value",-10,3) == "070" || 
             substr("$value",-10,3) == "070" || substr("$value",-10,3) == "079" ||
             substr("$value",-10,3) == "077" || substr("$value",-10,3) == "076" ||
             substr("$value",-10,3) == "078" ){
                array_push($mobiePhone,$value);
                echo "số điện thoại mobiphone";
                echo "<pre>";
                print_r($mobiePhone);
             }
            //  if($value != $viettel && $value != $mobiePhone && $value != $vinaPhone){
            //      array_push($otherPhone,$value);
            //      echo "số điện thoại khác";
            //      echo "<pre>";
            //      print_r($otherPhone);
            //  }
        }
        
    }
    // echo substr("abcdef",-6,3);
    // $result = "abc, dab, ddf, sfsff,fdfdfd";
    // echo "<pre>";
    // print_r(explode(",",$result));
?>
    </div>
</body>
</html>