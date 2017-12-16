<?php
/**
 * Created by PhpStorm.
 * User: toshiomi
 * Date: 11/19/17
 * Time: 11:20 AM
 */

class Walker_Nav_Menu_With_Separator extends Walker_Nav_Menu
{
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {

        if(isset($item->menu_order) && isset($args->menu->count) && $item->menu_order == $args->menu->count) {
            $output .= '</li>';
        } else {
            $output .= '<span> | </span></li>';
        }
    }
}