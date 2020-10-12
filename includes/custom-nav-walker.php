<?php
class Elablee_Custom_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="flex flex-col lg:flex-row list-none ml-auto">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="nav-item">';
        $output .= $args->before;
        $output .= '<a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="' . $item->url . '">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}