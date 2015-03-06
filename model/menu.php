<?php
class menu {
    private $id, $title, $path, $icon;

    public function __construct($title, $path, $icon) {
        $this->title = $title;
        $this->path = $path;
        $this->icon = $icon;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($value) {
        $this->title = $value;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($value) {
        $this->path = $value;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($value) {
        $this->icon = $value;
    }

}