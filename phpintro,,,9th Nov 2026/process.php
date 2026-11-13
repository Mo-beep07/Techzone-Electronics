<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset><legend>Bob's autos</legend>

        <h2>Bob's Auto Parts</h2>
        <p>Order Results</p>
        <?php
        echo "Order processed on ".date('H:i jS F Y')."<br>";
        echo "Your Order is as follows:<br>";
        if(isset($_POST['submit'])){
            DEFINE("upTyre",150.50);
            DEFINE("upOil",50.75);
            DEFINE("upSpk",80);

            $tyqty=$_POST['data1'];
            $oilqty=$_POST['data2'];
            $spkqty=$_POST['data3'];
            echo "$tyqty "."tyres"."<br>";
            echo "$oilqty "."Oil"."<br>";
            echo "$spkqty "."Spark plug"."<br>";
            echo "Amount to pay:"."£".number_format(($tyqty*upTyre)+($oilqty*upOil)+($spkqty*upSpk),2)."<br>";

        }
        if(isset($_POST['mydata'])){
            $mydata=$_POST['mydata'];
            if($mydata=='a'){
                echo "Customer Refferred by Employee";
            }elseif($mydata=='b'){
                echo "Customer Refferred Online";
            }elseif($mydata=='c'){
                echo "Customer Refferred by google";
            }elseif($mydata=='c'){
                echo "Customer Refferred by Newspaper";
            }else{
                echo "Customer didnt find us through referral";
            }

        }
        
        
        ?>
    </fieldset>

</body>
</html>