<?php
if ( ! function_exists('noImage'))
{
    function noImage($img) {
        $img = urldecode($img);
        if(file_exists($img) && $img !=="" && $img !== NULL) {      
            return $img;    
        } else {
            return "images/no_image/NoImage.png";
        }
    }
}

if ( ! function_exists('shorten'))
{
    function shorten($text,$number) {

        if( strlen( $text ) < $number ) {

            $text=trim($text);          
            $text=strip_tags($text);

            return $text; 

        } else {

            //$last_space = strrpos( $cut_text, " " ); //find the position of the last space 

           $text=trim($text);       
           $text=strip_tags($text);

            $short_text = mb_substr( $text, 0,$number,"UTF-8"); //cut 

            $end_text = $short_text."..."; // add two dots

            return $end_text;
            
        }

    }
}