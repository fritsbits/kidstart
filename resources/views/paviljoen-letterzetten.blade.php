@extends ('layouts.layout')

@section('body_class', 'page_oproep')

@section ('content')

<div class="header">
  <div class="container">

    <div class="row">
      <div class="col-lg-3 d-flex align-items-end">
        <div>
          <img src="/img/tmp/profile-rens.jpg" alt="Rens Gijs" class="avatar mb-3"><br>
          <p class="mb-0">door <strong>Rens Gijsen</strong> <br>
            <span class="text-muted">Leerkracht eerste leerjaar <br>   
            Paviljoen Schaarbeek</span></p>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-end">

          <div>
            <h2 class="text-muted h4 mt-3">Gezocht</h2>
            <h1>Graffiti artiesten die hun passie willen delen met de kinderen van het eerste leerjaar</h1>

            <div class="text-muted mt-4"> 
              <i class="fas fa-calendar mr-1"></i> 8 of 15 November
              <i class="fas fa-map-marker-alt ml-3"></i> Schaarbeek
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    

<div class="container">

  <div class="row">
    <div class="col-lg-8">
      <div class="description">

        <p>De kinderen van het eerste leerjaar leren letters lezen en schrijven. En ze zien dat groots. Ze willen hun nieuwe vaardigheden graag toepassen op de muren van onze spiksplinternieuwe school. Daar hebben ze hulp voor nodig van een expert. Want hoe doe je dat, graffiti spuiten? Wie kan hen helpen om grote letters op de muur te zetten?</p>

        <p>Ben jij de letterzetter die een namiddag lang de held of heldin van onze ketjes wordt?</p>

      </div>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e-T0sL5mz5A?rel=0" allowfullscreen></iframe>
      </div>

      <h3 class="mt-5">Word jij hun held?</h3>
      <p>Introduceer jij de kinderen op 8 of 15 November tot de kunst van graffiti en mooie letters zetten?</p>
      <p>
        <a class="btn btn-primary mb-5" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Contacteer ons</a>
      </p>
      <div class="collapse mb-5" id="collapseExample">
        <div class="card card-body">
          <script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/shrPN7kyAUOwN6znk?backgroundColor=red" frameborder="0" onmousewheel="" width="100%" height="1065" style="background: transparent;"></iframe>
        </div>
      </div>

    </div>

    <div class="col-lg-4">

      <div class="card bg-outline-light mb-3" style="margin-top:-4rem">
        <h4 class="card-header">Hoe werkt het?</h4>
        <div class="card-body">
          <ul>
            <li>Vrijwillige gastles in het eerste leerjaar.</li>
            <li>Tijdens lesuren van 13:40 tot 15:20.</li>
            <li>Telkens groepjes van twee tot drie kinderen.</li>
            <li>Vier opeenvolgende lessen van twintig minuten.</li>
            <li>De school betaalt jouw materiaal.</li>
            <li>Op voorhand alles doorpraten met de leerkracht.</li>
          </ul>
        </div>
      </div>   

      <div class="card bg-outline-light mb-3">
        <h4 class="card-header">Over Basisschool Paviljoen</h4>
        <div class="card-body">
          <p>François-Joseph Navezstraat 59 
            <small><a href="https://www.google.com/maps?ll=50.87151,4.372779&z=14&t=m&hl=en-US&gl=BE&mapclient=embed&cid=17929636717930886309" target="_blank">Kaart</a></small>
            <br>
          1030 Schaarbeek</p>

          <p class="mb-0"><i class="fas fa-globe text-muted mr-1"></i> <a href="https://www.paviljoen-schaarbeek.be">Website</a></p>
        </div>
      </div>    

      
    </div>
  </div>


</div>
@endsection