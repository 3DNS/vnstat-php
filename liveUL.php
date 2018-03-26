<?php
$output = exec('intervalo=1                                                                          
info="/sys/class/net/"                                                               
cd $info                                                                             
for interface in eth0*                                                                
do                                                                                   
  tx1=`cat $info$interface/statistics/tx_bytes`                                      
 `sleep $((intervalo))s`                                                            
  tx2=`cat $info$interface/statistics/tx_bytes`
  echo $((($tx2-$tx1)/($intervalo*1024))) Kbps
done
');
echo($output);
?>

