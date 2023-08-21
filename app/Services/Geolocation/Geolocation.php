<?php 

namespace App\Services\Geolocation;

use App\Services\Satellite\Satellite;
use App\Services\Map\Map;

class Geolocation 
{
    private $map; // Corrected property name
    private $satellite; // Corrected property name

public function __construct (Map $map, Satellite $satellite) {
    $this->map = $map;
    $this->satellite = $satellite;
}

public function search(string $name) {
 return this->satellite->pinpoint(this->map->findAddress($name));
}
}
