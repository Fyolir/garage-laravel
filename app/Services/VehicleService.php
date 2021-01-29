<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    /**
     * Enregistre un véhicule en base de donnée
     */
    public function saveVehicle(array $inputs): void
    {
        if($imputs['name'] && $imputs['brand_id'] && $imputs['price'] && $imputs['status'] && $imputs['odometer'] && $imputs['type']){
            $newVehicle= Vehicle::create($inputs);
            var_dump($inputs);
        }
    }
}
