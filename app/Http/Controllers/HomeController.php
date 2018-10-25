<?php 

namespace App\Http\Controllers;

use MetaTag;

class HomeController extends Controller 
{
  public function welcome()
  {
    MetaTag::set('description', 'Kidstart helpt scholen om inspirende mensen in de klas te krijgen. Via de website matchen we scholen met gepassioneerde vrijwilligers uit de buurt.');

    return view('welcome');
  }

  public function paviljoenLetterzetten()
  {

    MetaTag::set('title', 'Gezocht: Graffiti gastles voor het eerste leerjaar');
    MetaTag::set('description', 'De kinderen van het eerste leerjaar leren letters lezen en schrijven. En ze zien dat groots. Ze willen hun nieuwe vaardigheden graag toepassen op de muren van onze spiksplinternieuwe school. Daar hebben ze hulp voor nodig van een expert. Want hoe doe je dat, graffiti spuiten? Wie kan hen helpen om grote letters op de muur te zetten?');
    
    MetaTag::set('image', asset('/img/tmp/murenoproep.jpg'));

    return view('paviljoen-letterzetten');
  }

}