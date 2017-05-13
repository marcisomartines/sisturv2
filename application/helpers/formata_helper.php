<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/05/2017
 * Time: 00:03
 */

function mascara($string, $mascara)
{
    $maskared = '';
    $k = 0;
    for($i=0; $i<=strlen($mascara)-1; $i++){
        if($mascara[$i] == '#'){
            if(isset($string[$k]))
                $maskared .= $string[$k++];
        }else{
            if(isset($mascara[$i]))
                $maskared .= $mascara[$i];
        }
    }

    return $maskared;
}