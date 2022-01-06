<?php

namespace App\OutsideTags;

trait OutTag {
    function open($destination, $method) {
        return "<form action=\"{$destination}\" method=\"{$method}\">";
    }
    function close() {
        return '</form>';
    }
}