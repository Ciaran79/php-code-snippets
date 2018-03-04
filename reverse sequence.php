<?php 
function reverseSeq ($n) {
   $result = [];

        while($n>0){
            $result[] = $n;
            $n = $n-1;
        }

  return $result;
};
print_r(reverseSeq(5)) ;
?>