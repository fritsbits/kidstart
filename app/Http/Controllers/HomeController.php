<?php 

namespace App\Http\Controllers;

use MetaTag;
use Feeds;

class HomeController extends Controller 
{
  public function welcome()
  {
    MetaTag::set('description', 'Kidstart helpt scholen om inspirende mensen in de klas te krijgen. Via de website matchen we scholen met gepassioneerde vrijwilligers uit de buurt.');

    $youtubeFeed = Feeds::make('https://www.youtube.com/feeds/videos.xml?channel_id=UCUg7h-cZEx6I-UZOAWFIlsQ')->get_items();

    $mediumFeed = Feeds::make('https://medium.com/feed/kidstart')->get_items();
    
    return view('welcome', compact('youtubeFeed', 'mediumFeed'));
  }

  public function paviljoenLetterzetten()
  {

    MetaTag::set('title', 'Gezocht: Graffiti gastles voor het eerste leerjaar');
    MetaTag::set('description', 'De kinderen van het eerste leerjaar leren letters lezen en schrijven. En ze zien dat groots. Ze willen hun nieuwe vaardigheden graag toepassen op de muren van onze spiksplinternieuwe school. Daar hebben ze hulp voor nodig van een expert. Want hoe doe je dat, graffiti spuiten? Wie kan hen helpen om grote letters op de muur te zetten?');
    
    MetaTag::set('image', asset('/img/tmp/murenoproep.jpg'));

    return view('paviljoen-letterzetten');
  }

}