<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\User_Vehicle;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $users = user::all();
    $brands = Brand::all();
    $user_vehicle = User_Vehicle::all();

    echo "<h1>Les Utilisateurs</h1>";
    echo "<ul>";
    foreach ($users as $user){
        echo "<li> #$user->id $user->name ( $user->score, $user->wallet, $user->role, $user->enabled)</li>";
    }
    echo "</ul>";

    echo "<h1>Les Véhicules</h1>";
    echo "<ul>";
    foreach ($brands as $brand){
        foreach($brand->vehicles as $vehicle)
        {
            echo "<li> #$brand->id $brand->name $vehicle->name </li>";
        }
    }
    echo "</ul>";

    echo "<h1>Les Véhicules</h1>";
    echo "<ul>";
    foreach ($users as $user){
        echo "$user->name";
        foreach($user->user_vehicle as $user_vehicle)
        {
            echo "<li>  $user_vehicle->vehicle_id </li>";
        }
    }
    echo "</ul>";


    return view('welcome');
});
