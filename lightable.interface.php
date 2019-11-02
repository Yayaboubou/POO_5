<?php


interface Lightable {

    /**
     * @return bool
     */
    public function switchOn() : bool;

    /**
     * @return bool
     */
    public function switchOff() : bool;
}
