<?php 
namespace App\Models;

class Listing {
    public static function all(){
        return [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ipsum dolor sit amet consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ips nostrud ex ea commodo consequat. Lorem ipsum dolor sit'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ipsum dolor sit amet consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ips nostrud ex ea commodo consequat. Lorem ipsum dolor sit'
        ],
        [
            'id' => 3,
            'title' => 'Listing Three',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ipsum dolor sit amet consectetur adip incididunt ut labore et dolore magna aliqu. Lorem ips nostrud ex ea commodo consequat. Lorem ipsum dolor sit'
        ]
        ];
    }
}