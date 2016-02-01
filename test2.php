ountUp();

function CountUp(){
 for($i=1; $i<=100; $i++){
     echo $i;
     
     if( ($i%3) == 0 ){
        echo '!';
     }
     
     echo PHP_EOL;
 }
}
?>

