<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Movie') }}</title>
    <link href="{{ mix('css/all.css') }}" rel="stylesheet">
</head>
<body>
<section id="root" class="mvoie-body">
    <header class="movie-header position-relative text-white py-3">
        <h1 class="text-center m-0">Proxima - Ontroerend moeder-dochter drama met Eva Green en Matt Dillon</h1>

        <div class="flag">
            <img src="{{ asset('images/us.svg') }}" alt="">
        </div>
    </header>

    <section class="movie-menu text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <ul>
                        <li><a href="#">Bioscoop pagina</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Synopsis</a></li>
                        <li>#PROXIMATHEMOVIE</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main class="movie-content text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="poster py-3">
                        <img
                            class=""
                            src="https://lh3.googleusercontent.com/-zfakL5H8Rn8/Xto1F8lpgzI/AAAAAAAAGIE/UKNf2H17Eo0dzD9D1LWDWxNKsx7p-9_zgCLcBGAsYHQ/s0/Proxima%2Baffiche.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="showtimes py-3">
                        <form class="search-form">
                            <input type="search" name="search" placeholder="Search.." autocomplete="off" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                        <div class="search-meta text-center my-2">
                            <p>kies uw stad of locatie</p>
                            <p>meer vertoningen in deze steden</p>
                            <p>bekijk de trailer</p>
                        </div>

                        <div class="youtube-trailer">
                            <iframe class="w-100" height="200" src="https://www.youtube.com/embed/eVVHmw3uH2Q"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="synopsis py-3">
                        <h3 class="text-center mb-2">Ontroerend moeder-dochter drama met Eva Green en Matt Dillon</h3>
                        <p>
                            De nuchtere Française Sarah voedt haar jonge dochter Stella alleen op. Sarah is ook een
                            briljante en gedreven astronaut, die geselecteerd wordt voor een ambitieuze – door mannen
                            gedomineerde - ruimtemissie, samen met de chauvinistische Amerikaan Mike en de vredelievende
                            Rus
                            Anton. Ze bereidt zichzelf en Stella voor op haar langdurige afwezigheid en fysiek in
                            topconditie begint ze aan de zware training in Rusland. Het is het begin van een emotionele
                            rollercoaster, waarin ze moet schipperen tussen haar persoonlijke dromen en behoeften en die
                            van
                            haar kind. Nu ze de aarde gaat verlaten, beseft Sarah dat ze zich er meer mee verbonden
                            voelt
                            dan ooit.
                        </p>

                        <div class="synopsis-meta mt-2">
                            <p><span>Directed by:</span> Alice Winocour</p>
                            <p><span>Written by:</span> Alice Winocour, Jean-Stéphane Bron</p>
                            <p><span>Produced by:</span> Nina Frese, Serge Hayat, Isabelle Madelaine, Emilie Tisné</p>
                            <p><span>Casts:</span> Eva Green, Zélie Boulant, Matt Dillon</p>
                            <p><span>Duration:</span> 1 Hour 47 Min</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="movie-footer text-white text-center py-3">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cookies">Cookies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Gebruiksvoorwaarden">Gebruiksvoorwaarden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#privacy-policy">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#credits">Credits</a>
                </li>
            </ul>

            <div class="tab-content pt-3">
                <div id="cookies" class="container tab-pane">
                    <p>
                        Wij maken op deze website gebruik van cookies. Een cookie is een eenvoudig klein bestandje dat
                        met pagina's van deze website wordt meegestuurd en door uw browser op uw harde schrijf van uw
                        computer wordt opgeslagen.U kunt deze cookies uitzetten via uw browser [of via uw profielpagina]
                        maar dit kan het functioneren van onze website negatief aantasten.
                    </p>
                </div>
                <div id="Gebruiksvoorwaarden" class="container tab-pane fade">
                    <p>
                        Het gebruik van de informatie op deze website is gratis zolang u deze informatie niet kopieert,
                        verspreidt of op een andere manier gebruikt of misbruikt. U mag de informatie op deze website
                        alleen hergebruiken volgens de regelingen van het dwingend recht.
                    </p>
                </div>
                <div id="privacy-policy" class="container tab-pane fade">
                    <p>
                        U heeft het recht om te vragen om inzage in en correctie of verwijdering van uw gegevens. Zie
                        hiervoor onze contactpagina. Om misbruik te voorkomen kunnen wij u vragen om u adequaat te
                        identificeren. Wanneer het gaat om inzage in persoonsgegevens gekoppeld aan een cookie, dient u
                        een kopie van het cookie in kwestie mee te sturen.
                    </p>
                </div>
                <div id="credits" class="container tab-pane fade">
                    <p>
                        PROXIMA is geschreven en geregisseerd door de Franse regisseur Alice Winocour met in de
                        hoofdrollen BAFTA winnaar en Golden Globe genomineerde actrice Eva Green (Casino Royale, Miss
                        Peregrine’s home for peculiar children), Matt Dillon en Sandra Hüller.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</section>


<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
