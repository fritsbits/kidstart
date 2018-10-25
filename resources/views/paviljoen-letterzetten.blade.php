@extends ('layouts.layout')

@section('body_class', 'page_oproep')

@section ('content')

<div class="header">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 d-flex align-items-end">

        <div>
          <h2 class="mt-3">Gezocht</h2>
          <h1 class="h2">Graffiti gastles voor het eerste leerjaar</h1>

          <div class="metas lead text-muted mt-4"> 

            <span class="meta"><i class="fas fa-calendar-alt"></i> 8 of 15 November</span>
            <span class="meta"><i class="fas fa-map-marker-alt"></i> Basisschool Paviljoen in Schaarbeek</span>

          </div>

            {{-- /lead --}}

          </div>

        </div>
      </div>
      {{-- /row --}}
    </div>
  </div>


  <div class="container">

    <div class="row">
      <div class="col-lg-7 col-xl-8">

        <div class="teachers">
          <div class="media">

            <div class="avatars">
              <div class="avatarholder">
                <img src="/img/tmp/profile-nymfe.jpg" alt="Nymfe Berbé" class="avatar img-thumbnail">
                <a href="https://www.facebook.com/rens.gijsen" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </div>
              <div class="avatarholder">
               <img src="/img/tmp/profile-rens.jpg" alt="Rens Gijs" class="avatar img-thumbnail">
               <a href="https://www.facebook.com/rens.gijsen" target="_blank"><i class="fab fa-facebook-f"></i></a>
             </div>
           </div>

           <div class="media-body d-flex align-items-center">
             <p class="mb-0">door <strong>Nymfe Berbé</strong> en <strong>Rens Gijsen</strong><br>
              <span class="text-muted">Leerkrachten eerste leerjaar</span></p>
            </div>
          </div>

        </div>

        <h2 class="h1">Deel je passie voor mooie letters met onze ketjes </h2>

        <div class="description">

          <p>De kinderen van het eerste leerjaar leren letters lezen en schrijven. En ze zien dat groots. Ze willen hun nieuwe vaardigheden graag toepassen op de muren van onze spiksplinternieuwe school. Daar hebben ze hulp voor nodig van een expert. Want hoe doe je dat, graffiti spuiten? Wie kan hen helpen om grote letters op de muur te zetten?</p>

          <p>Ben jij de letterzetter die een namiddag lang de held of heldin van onze ketjes wordt?</p>

        </div>

        <div class="collapse mb-5" id="signupform">
          <div class="card card-body">
            <script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/shrPN7kyAUOwN6znk?backgroundColor=red" frameborder="0" onmousewheel="" width="100%" height="1065" style="background: transparent;"></iframe>
          </div>
        </div>

      </div>

      <div class="col-lg-5 col-xl-4">

        <div class="card bg-outline-light mb-3">
          <h4 class="card-header">Onze school</h4>
          <div class="card-body">
            <h5 class="mb-3">Paviljoen Schaarbeek</h5>
            <div class="media mb-3">
              <i class="fas fa-map-marker-alt text-muted mr-2" style="width:1.25rem;"></i>
              <div class="media-body">
                François-Joseph Navezstraat 59 <br>
                1030 Schaarbeek
                <br>
                <small><a href="https://www.google.com/maps?ll=50.87151,4.372779&z=14&t=m&hl=en-US&gl=BE&mapclient=embed&cid=17929636717930886309" target="_blank">Kaart</a></small>

              </div>
            </div>

            <p class="mb-3"><i class="fas fa-phone text-muted mr-1" style="width:1.25rem;"></i> 02 431 68 11</p>

            <p class="mb-0"><i class="fas fa-globe text-muted mr-1" style="width:1.25rem;"></i> <a href="https://www.paviljoen-schaarbeek.be">Website</a></p>
          </div>
        </div>    


      </div>
    </div>


  </div>


  <div class="container">


    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e-T0sL5mz5A?rel=0" allowfullscreen></iframe>
    </div>

    <div class="row">
      <div class="col-lg-6 description">
        <p class="mt-5 mb-5">Binnenkort gaan de kinderen graag aan de slag met een échte spuitbus met verf. En daar kunnen ze een helpende hand bij gebruiken. Help jij hen om hun eerste graffiti stappen te zetten?</p>

        <p><a class="btn btn-primary" href="https://airtable.com/shrPN7kyAUOwN6znk" target="_blank">Contacteer ons voor meer info</a></p>

      </div>
      <div class="col-lg-6">
        <div class="card bg-outline-light mb-5 mt-5">
          <h4 class="card-header">Hoe werkt het?</h4>
          <div class="card-body">
            <ul>
              <li>Vrijwillige gastles in het eerste leerjaar.</li>
              <li>Donderdag 8 of 14 November</li>
              <li>Tijdens lesuren van 13:40 tot 15:20.</li>
              <li>Telkens groepjes van twee tot drie kinderen.</li>
              <li>Eén van ons begeleidt je. We've got your back.</li>
              <li>We praten alles op voorhand door via Skype.</li>
              <li>De school betaalt jouw materiaal.</li>
            </ul>
          </div>
        </div> 
      </div>
    </div>
  </div>



  <div class="fixed-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="cta">
        <h3>Word jij hun held?</h3>
        <p class="text-muted">Geef je op als gastdocent op 8 of 15 November</p>
      </div>
      <div class="btnholder">
        <a class="btn btn-primary" href="https://airtable.com/shrPN7kyAUOwN6znk" target="_blank"><i class="fas fa-envelope mr-2"></i> Contacteer ons</a>
      </div>
    </div>
  </div>
  @endsection


  @section ('scripts')

  <script>
    $('#signupform').on('shown.bs.collapse', function () {
      this.scrollIntoView();
    });
  </script>

  @endsection
