<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use MetaTag;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
    MetaTag::set('description', 'Kidstart helpt scholen om inspirende mensen in de klas te krijgen. Via de website matchen we scholen met gepassioneerde vrijwilligers uit de buurt.');
    MetaTag::set('image', asset('/img/homepage/screen.png'));
  }
}
