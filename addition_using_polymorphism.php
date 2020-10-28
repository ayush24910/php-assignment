<?php
    // Function body
    function addition( $n1 , $n2 ){
        
        if( (is_string($n1)) && (is_string($n2)))
            return $n1.$n2;

        else if( (is_int($n1)) && (is_int($n2)))
            return $n1+$n2;
        
        else if( (is_bool($n1)) && (is_bool($n2)))
            echo "parameter are boolean";

        else if( (is_null($n1)) && (is_null($n2)))
            echo "parameter are null";
        else
            echo "parameter are not compatible";
       }
    //Function call
        echo addition( 6 , 7 )."<br><hr><p style='color:red'</p>";
        echo addition( 56.45 , 78.56 )."<br><hr><p style='color:blue'</p>";
        echo addition( "Gyrix " , "Technolabs" )."<br><hr><p style='color:blue'</p>";
        echo addition( '6' , '6' )."<br><hr><p style='color:red'</p>";
        echo addition( null , null )."<br><hr><p style='color:red'</p>";
        echo addition( true , true )."<br><hr>";
        


?>