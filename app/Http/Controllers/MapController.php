<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 19.036572,
                    'lng' => 73.077424
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 19.031123,
                    'lng' => 73.058103
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 19.032101,
                    'lng' => 73.067904
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        return view('map', compact('initialMarkers'));
    }
}
