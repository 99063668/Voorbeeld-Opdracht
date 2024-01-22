<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  /**
   * Get the requested data and return it to the view
   * 
   * @param object $request the current residence
   * @return view 
   */
  public function store(Request $request)
  {
    $residence = $request->residence;
    $users = $this->retrieveData($residence);

    return view('welcome', ['data' => $users, 'residence' => $residence]);
  }

  /**
   * Retrieve the correct users from the database
   * 
   * @param string $residence the current requested residence
   * @return object 
   */
  protected function retrieveData($residence)
  { 
    // SELECT * FROM locations JOIN residents ON locations.id = residents.location_id WHERE locations.name = '..';
    return Location::with('residents')
      ->where('name', $residence)
      ->get();
  }
}