<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;


class MapController extends Controller
{
      // Show the form for updating the map URL
      public function showUpdateMapForm()
      {
          $map = Map::first(); // Retrieve the first map record
          $mapUrl = $map ? $map->map_url : '';
  
          return view('backend.pages.map.update-map', compact('mapUrl'));
      }
  
      // Handle the form submission to update the map URL
      public function updateMap(Request $request)
      {
          $request->validate([
              'map_url' => 'required|url',
          ]);
  
          $map = Map::first(); // Retrieve the first map record
          if (!$map) {
              // If no record exists, create a new one
              $map = new Map();
          }
  
          $map->map_url = $request->input('map_url');
          $map->save();
  
          return redirect()->route('admin.showUpdateMapForm')->with('success', 'Map URL updated successfully.');
      }
}
