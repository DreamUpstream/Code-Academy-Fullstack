<?php

namespace App\InsideTags;

trait InTag {
    public function input($type, $placeholder, $id) {
        return "<input type=\"{$type}\" placeholder=\"{$placeholder}\" id=\"{$id}\">";
    }

    public function label($id, $name = NULL) {
        return "<label for=\"{$forId}\">{$name}</label>";
    }
}