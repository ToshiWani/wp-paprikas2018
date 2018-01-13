<?php
/**
 * Created by PhpStorm.
 * User: toshiomi
 * Date: 1/6/18
 * Time: 4:42 PM
 */

class Walker_Nav_Menu_Mobile extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "<ul class='dropdown-menu'>\n";
    }


    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "</ul>\n";
    }


    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $hyperlink = $item->url == '#'
            ? "<a href='" . $item->url . "' class='nav-item dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>\n"
            : "<a href='" . $item->url . "' class='nav-item'>\n";

        $icon = isset($item->thumbnail_id) && strlen($item->thumbnail_id) > 0
            ? "<img class='nav-icon' src='" . wp_get_attachment_url($item->thumbnail_id) . "'/>\n<br/>\n"
            : "";

        $hyperlink .= $icon . $item->title . "</a>\n";

        if ($depth == 0){
            $output .= $item->url == '#'
                ? "<div class='col-xs-3 text-center dropdown mobile-menu-item' ontouchstart=\"\">\n" . $hyperlink
                : "<div class='col-xs-3 text-center'>\n" . $hyperlink;

        } else if ($depth == 1){
            $output .= "<li>\n" . $hyperlink;
        }
    }


    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ($depth == 0){
            $output .= "</div>\n";

        } else if ($depth == 1){
            $output .= "</li>\n";
        }
    }
}

