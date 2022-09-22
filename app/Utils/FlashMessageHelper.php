<?php

namespace App\Utils;

class FlashMessageHelper
{
    public static function alert($icon, $title = '', $text = '')
    {
        session()->flash('alert', 'alert');
        session()->flash('alert-icon', $icon);
        session()->flash('alert-title', $title);
        session()->flash('alert-text', $text);
    }
}
