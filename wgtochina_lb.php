<?php

class Point {
    private $longitude;
    private $latitude;
    private $x;
    private $y;

    public function setX( $x ) {
        $this->x = $x;
    }

    public function getX() {
        return $this->x;
    }

    public function setY( $y ) {
        $this->y = $y;
    }

    public function getY() {
        return $this->y;
    }

    public function setLongitude( $longitude ) {
        $this->longitude = $longitude;
    }

    public function setLatitude( $latitude ) {
        $this->latitude = $latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getLatitude() {
        return $this->latitude;
    }

}

