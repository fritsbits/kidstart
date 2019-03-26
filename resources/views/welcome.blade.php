@extends ('layouts.layout')

@section ('content')

<section class="header">
  <img src="/img/kidstart-logo.svg" alt="" class="logo">
  <h1>Breng specialisten in de klas</h1>
</section>


<section class="intro container-fluid">

    <div class="row">
        <div class="col-md-4 pl-0 d-none d-md-block d-lg-block d-xl-block">
            <img src="/img/homepage/rocketkid.jpg" alt="" class="img-rocketkid img-fluid">
        </div>
        <div class="col-md-6">
            <p class="lead">Jongeren kiezen in hun schoolcarrière veel te zelden een  studierichting op basis van hun interesses. Hoe kunnen we hen inspireren om hun passies vroeg te ontdekken?</p>


            <img src="/img/homepage/rocketkid.jpg" alt="" class="img-rocketkid img-fluid d-md-none d-lg-none d-xl-none">


            <p>Er is een Afrikaans spreekwoord dat zegt: </p>


            <blockquote><p>It takes a community to raise a child.</p></blockquote>

            <p>Daar ligt de sleutel tot succes. In een gedeelde verantwoordelijkheid tussen school, ouders, buurt, verenigingen en bedrijven.</p>

            <p>Dat toekomstbeeld willen wij waarmaken met Kidstart.</p>
        </div>
        
    </div>
    
</section>


<section class="product container">

    <h2 class="text-center">Haal specialisten in de klas</h2>
    <p class="subtitle text-center">Gepassioneerde mensen die de horizon van kinderen verbreden</p>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <img src="/img/homepage/screen.png" alt="" class="img-fluid mx-auto">    
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-2">
            <h3>Matchmaking</h3>
            <p>Kidstart helpt scholen om inspirende mensen in de klas te krijgen. Via de website matchen we scholen met gepassioneerde vrijwilligers uit de buurt.</p>
        </div>

        <div class="col-md-4">
            <h3>Begeleiding</h3>
            <p>Leerkrachten en gastdocenten krijgen met Kidstart ook toolkits om snel goede gastlessen te organiseren.</p>
        </div>
    </div>
    
</section>


<img src="/img/homepage/paviljoenbollen.jpg" class="img-fluid d-md-none d-lg-none d-xl-none mb-5" alt="Paviljoen Schaarbeek">

<section class="pilot container-fluid">

    <div class="row">
        <div class="col-md-7 col-lg-5 offset-lg-1">
            <h2>Piloot project in Schaarbeek</h2>
            <p class="subtitle">Stap voor stap richting een open school</p>

            <p>Kidstart is nog in de beginfase. Momenteel doorlopen we een piloottraject met lagere school  <a href="http://paviljoen-schaarbeek.be" target="_blank">Paviljoen Schaarbeek</a> en worden we mee ondersteund door de directeur Sven Moens, die ook het <a href="http://tada.brussels" target="_blank">ToekomstAtelierDelavenir</a> ondersteunde.</p>

            <div class="embed-responsive embed-responsive-16by9 mt-4 mb-5">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z1Ud2H-8-6w?rel=0" allowfullscreen=""></iframe>
            </div>

        </div>

        <div class="col-md-5 col-lg-6 pr-0 text-right d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img src="/img/homepage/paviljoenbollen.jpg" class="img-fluid" alt="">
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-6 col-lg-5 offset-lg-1">
            <h3>Eerste gastles: graffiti</h3>

            <p>De kinderen van het eerste leerjaar leren letters schrijven. En dat doen ze graag groot op de muren van de spiksplinternieuwe school. <a href="/paviljoen-schaarbeek/letterzetten/">We nodigden graffiti artiesten uit</a> om de leerlingen onder te dompelen in de wereld van graffiti letters.</p>

            <p>Twee artiesten kwamen langs op een donderdag in Oktober om hun passie te delen. Hoe leuk was dat. Een onvergetelijk moment voor de leerlingen, voor altijd vastgelegd in een graffiti kunstwerk in de school.</p>
        </div>
        <div class="col-md-6">
         <div class="embed-responsive embed-responsive-16by9 mt-4 mb-5">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uBxeyq14uMk?rel=0" allowfullscreen=""></iframe>
        </div>
    </div>

</section>


<section class="videos container pb-5">

   <h2>Paviljoen traject in beeld</h2>

   <div class="row">
       @foreach($youtubeFeed as $youtubePost)

       @if ($enclosure = $youtubePost->get_enclosure())

       <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3">

        <img src="{{ $enclosure->get_thumbnail() }}" class="rounded img-fluid mb-2 mt-3" />

        <p><a href="{{ $youtubePost->get_permalink() }}">{{ $youtubePost->get_title() }}</a>
            <br>
            <span class="small text-muted">{{ $youtubePost->get_date('m/Y') }}</span></p>

    </div>


    @endif


    @endforeach

</div>

</section>


<section class="news container-fluid">

    <div class="row">
        <div class="col-md-4 pl-0">
            <img src="/img/homepage/newsbollen.svg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">

            <h2>Updates</h2>

            @foreach($mediumFeed as $mediumPost)

            <p><span class="small text-muted mr-2">{{ $mediumPost->get_date('m/Y') }}</span><a href="{{ $mediumPost->get_permalink() }}">{{ $mediumPost->get_title() }}</a></p>

            @endforeach

            <h2 class="mt-5 pt-5" id="nieuwsbrief">Blijf op de hoogte</h2>
            <p class="text-muted">Weet als eerste wanneer materiaal beschikbaar is voor jouw school</p>

            @include('partials/_mailchimp')

        </div>
        
    </div>
    
</section>


<section class="team">

    <img src="/img/homepage/hackbelgium.jpg" alt="Kidstart op Hack Belgium" class="w-100">
    
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-lg-4">
                <h2>Team Kidstart</h2>
                <p class="mb-5">Kidstart ontstond op <a href="http://www.hackbelgium.be" target="_blank">Hack Belgium</a>, de grootste hackathon van België, waar ons project laureaat was. Oprichters Ilse en Pieter-Jan bedachtten er het project. Frederik kwam er bij nadat hij <a href="https://www.youtube.com/watch?v=4Ql0QwyUx5g&feature=youtu.be&t=25" target="_blank">hun pitch</a> zag op Hack Belgium.</p>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4 team-member">
                        <img src="/img/homepage/profile-pieterjan.jpg" alt="Pieter-Jan Herman" class="img-fluid">
                        <h4><a href="https://www.linkedin.com/in/pieterjanherman/" target="_blank">Pieter-Jan Herman</a></h4>
                        <p class="team-member-function">Leerkracht middelbaar onderwijs</p>
                    </div>
                    <div class="col-md-4 team-member">
                        <img src="/img/homepage/profile-ilse.jpg" alt="Ilse Taildeman" class="img-fluid">
                        <h4><a href="https://www.linkedin.com/in/ilse-taildeman-5b990448/" target="_blank">Ilse Taildeman</a></h4>
                        <p class="team-member-function">Projectmanager duurzame ontwikkeling</p>
                    </div>
                    <div class="col-md-4 team-member">
                        <img src="/img/homepage/profile-frederik.jpg" alt="Pieter-Jan Herman" class="img-fluid">
                        <h4><a href="https://www.linkedin.com/in/frederikvincx/" target="_blank">Frederik Vincx</a></h4>
                        <p class="team-member-function">Social service designer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<section class="newsletter container-fluid d-none">


    <div class="row">
        <div class="col-md-4 pl-0 text-right">
            <img src="/img/homepage/logocircle.png" alt="" class="img-fluid img-logocircle">
        </div>
        <div class="col-md-6">
         <h2>Blijf op de hoogte</h2>
         <p class="subtitle">Weet als eerste wanneer we in nieuwe scholen lanceren</p>

     </div>

 </div>

</section>

@endsection