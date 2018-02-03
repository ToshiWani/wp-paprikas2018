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
        $menu_content = "";
        $is_pseudo_link = $item->url == "#";
        $classes = isset($item->classes) ? join(" ", $item->classes) : "";

        // Add hyperlink
        if($is_pseudo_link){
            $menu_content .= sprintf(
                "<a href='%s' class='dropdown-toggle %s' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>\n",
                $item->url,
                $classes
            );

        } else {
            $menu_content .= sprintf(
                "<a href='%s' class='%s'>\n",
                $item->url,
                $classes
            );
        }


        // Add icon into the menu content
        if(!empty($item->thumbnail_id)) {

            $is_current_page_item = (isset($item->current) && $item->current) ||
                                    (isset($item->current_item_ancestor) && $item->current_item_ancestor) ||
                                    (isset($item->current_item_parent) && $item->current_item_parent);

            $menu_content .= sprintf(
                "<img class='nav-icon' src='%s' />\n<br />\n",
                $is_current_page_item ? wp_get_attachment_url($item->thumbnail_hover_id)
                                           : wp_get_attachment_url($item->thumbnail_id)
            );
        }


        // Add menu title
        $menu_content .= $item->title . "\n</a>\n";


        // Wrap the menu content
        if ($depth == 0){
            $output .= $is_pseudo_link
                ? "<div class='col-xs-3 text-center dropdown mobile-menu-item'>\n" . $menu_content
                : "<div class='col-xs-3 text-center'>\n" . $menu_content;

        } else if ($depth == 1){
            $output .= "<li>\n" . $menu_content;
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

