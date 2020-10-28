<?php
    // Function body
     function search( $arr , $element ){

        $length = count( $arr );
        for( $i = 0 ; $i < $length ; $i++ )
        {
            if( $arr[$i] == $element )
            return $i;
        }
        return -1;
      }

        $arr = array (45,78,56,98,12,67);
        $element = 56;

    //Function call
        $result = search( $arr , $element );

    // If element is not present then return -1 otherwise return element it's index 
        if( $result == -1 )
        echo "<p style='color:red';>Element is not present in array</p>";
        else
        echo "<p style='color:green';>Element is present at index : $result</p>";


?>