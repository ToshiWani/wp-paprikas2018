<?php
/**
 * Created by PhpStorm.
 * User: toshiomi
 * Date: 11/19/17
 * Time: 11:20 AM
 */

class Walker_Nav_Menu_With_Separator extends Walker_Nav_Menu
{
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $cls = isset($item->classes) ? join(" ", $item->classes) : "";
        $output .= sprintf("<li class='%s'><a href='%s'>%s</a>", $cls, $item->url, $item->title);
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if($item->menu_order != $args->menu->count) {
            $output .= "<span class='menu-delimiter'>|</span>";
        }
        $output .= "</li>";
    }
}