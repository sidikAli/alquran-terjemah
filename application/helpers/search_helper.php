<?php 

function highlight_word( $content, $word) {
    $replace = '<span class= "blue-text text-lighten-1">' . $word . '</span>'; // create replacement
    $content = str_replace( $word, $replace, $content ); // replace content
    return $content; // return highlighted data
}