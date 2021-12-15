<?php

class Count implements Countable {
    protected $items = [];

    public function add($value) {
        $this->items[] = $value;
    }

    public function set($key, $value) {
        $this->items[$key] = $value;
    }

    public function count(){
        return count($this->items);
    }
}
