<?php

class Tag {

    private $tag;
    private $attributes = "";
    private $text = "";

    function __construct($tag) {
        $this->tag = $tag;
    }

    public function setText ($text) {
        $this->text = $text;
        return $this;
    }

    public function setAttr ($attr, $content) {
        if(isset($this->attributes))
        $this->attributes .= " " . $attr . "=" . "\"" . $content . "\"";
        else {
            $this->attributes = "";
            $this->attributes .= " " . $attr . "=" . "\"" . $content . "\"";
        }
        return $this;
    }

    public function show () {
        echo $this->get();
    }

    public function get () {
        return "<" . $this->tag . $this->attributes . ">". $this->text . "</" . $this->tag . ">";
    }

    public function getOpen() {
        return "<" . $this->tag . $this->attributes . ">";
    }

    public function getClose() {
        return "</" . $this->tag . ">";
    }

}