<?php
$output = exec('intervalo=1                                                                          
info="/sys/class/net/"                                                               
cd $info                                                                             
for interface in eth0*                                                                
do                                                                                   
  rx1=`cat $info$interface/statistics/rx_bytes`                                      
 `sleep $((intervalo))s`                                                            
  rx2=`cat $info$interface/statistics/rx_bytes`                                      
  //echo Empfangen: $((($rx2-$rx1)/($intervalo*1024))) Kbps
  echo $((($rx2-$rx1)/($intervalo*1024))) Kbps
done
');
echo($output);
?>

