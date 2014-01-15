<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

    if(is_active_sidebar('slideshow-1')){
        $slideshows["slideshow1"] = dynamic_sidebar('slideshow-1');
    }
    if(is_active_sidebar('slideshow-2')){
        $slideshows["slideshow2"] = dynamic_sidebar('slideshow-2');
    }
    if(is_active_sidebar('slideshow-3')){
        $slideshows["slideshow3"] = dynamic_sidebar('slideshow-3');
    }
    if(is_active_sidebar('slideshow-4')){
        $slideshows["slideshow4"] = dynamic_sidebar('slideshow-4');
    }
    if(is_active_sidebar('slideshow-5')){
        $slideshows["slideshow5"] = dynamic_sidebar('slideshow-5');
    }
    if(is_active_sidebar('slideshow-6')){
        $slideshows["slideshow6"] = dynamic_sidebar('slideshow-6');
    }


if($slideshows){
    $result = count($slideshows);

    foreach($slideshows as $slideshow => $name){

        if($result == 6){
            echo '<div class="dc-modules6">';
            echo $name;
            echo '</div>';
        }
        if($result == 5){
            echo '<div class="dc-modules5">';
            echo $name;
            echo '</div>';
        }
        if($result == 4){
            echo '<div class="dc-modules4">';
            echo $name;
            echo '</div>';
        }
        if($result == 3){
            echo '<div class="dc-modules3">';
            echo $name;
            echo '</div>';
        }
        if($result == 2){
            echo '<div class="dc-modules2">';
            echo $name;
            echo '</div>';
        }
        if($result == 1){
            echo '<div class="dc-modules1">';
            echo $name;
            echo '</div>';
        }
    }
}
?>