<?php 
$arr=array(
          array(
            array("vivek",98,98,98,96,96),
            array("yuvraj",98,98,98,96,96),
            array("parth",98,98,98,96,96)
          ),
          array(
            array("nirav",98,98,98,96,96),
            array("vinit",98,98,98,96,96),
            array("bhagyesh",98,98,98,96,96)
          ),
          array(
            array("yash",98,98,98,96,96),
            array("ridham",98,98,98,96,96),
            array("dainik",98,98,98,96,96)
          ),
         array(
            array("OM",98,98,98,96,96),
            array("raj",98,98,98,96,96),
            array("prem",98,98,98,96,96))

        );
        for ($i=0; $i < count($arr); $i++) {;
            echo " <h3>class:".($i+1)."</h3>";
          for ($j=0; $j <count($arr[0]); $j++) { 
           
            echo "<h4>";
            echo " student:".$arr[$i][$j][0];
            echo "</h4>";
            for ($k=0; $k <count($arr[0][0])-1; $k++) { 
                 echo "<br>";
                 echo $arr[$i][$j][$k+1];
               
              }
              
          }
        
          echo "<br>";
        }

?>