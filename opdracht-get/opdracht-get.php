

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht get</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">

        <style>
            .multiple
            {
                float:left;
                width:300px;
                margin:20px;
                padding:20px;
                box-sizing:border-box;
                background-color:#EEEEEE;
            }

            .multiple:nth-child(3n+1)
            {
                margin-left:0px;
            }

            .multiple:nth-child(3n)
            {
                margin-right:0px;
            }

            .single img
            {
                float:right;
                margin-left: 16px;
            }
            
            .multiple h1
            {
                margin:0;
                font-size:18px;
            }

            .read-more
            {
                text-align:right;
            }

            .read-more:after
            {
                padding-left:6px;
                content:">";
            }

        </style>

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht get: deel 1</h1>

            <?php
                $artikels['titel'] = array('IKEA VERKOOPT NU OOK ZONNEPANELEN', 'ZAG JIJ DEZE POOLSE KOPIE VAN K3 AL?', 'ORKAAN OPHELIA IS OPWEG NAAR EUROPA');
                $artikels['inhoud'] = array('De Zweedse meubelketen Ikea gaat vanaf vandaag zonnepanelen verkopen in ons land. 
                Eerst online, en vanaf eind januari ook in de acht Belgische winkels van Ikea. 
                Dat zal goedkoper gebeuren dan de concurrentie, verzekert Ikea. </br></br>
                
                België is daarmee het vijfde land wereldwijd waar Ikea de zonnepanelen gaat verkopen, na het Verenigd Koninkrijk, Polen, Nederland en Zwitserland.
                Ikea kiest er voor de panelen ook in België op de markt te brengen omdat ons land "hoge elektriciteitsprijzen kent, in combinatie met veel mensen die hun eigen woning bezitten", zegt Catherine Bendayan, CEO van Ikea België.
                Ikea ziet voldoende vraag in ons land en wil "met een betaalbaar aanbod" zonnepanelen voor iedereen toegankelijk maken. </br></br>
                
                Ikea gaat samenwerken met de internationale speler Solarcentury. Ikea zal de panelen online, en in de winkels aanbieden, maar Solarcentury zal instaan voor een huisbezoek, 
                de uiteindelijke installatie en administratie. 
                De van oorsprong Britse firma gaat daarvoor in zee met een netwerk van lokale installateurs. </br></br>
                
                Op hoeveel verkochte installaties Ikea mikt, wil het niet kwijt. "Het is een nieuwe markt voor ons. We doen dit niet alleen om zaken te doen. Het maakt deel uit van ons groene beleid. 
                We wilen zonnepanelen betaalbaar en simpel voor iedereen maken", aldus Bendayan.
                Ikea stelde het aanbod voor aan de eigen 4.000 Belgische medewerkers, en kreeg 500 geïnteresseerde kandidaten. "We verwachten veel interesse", aldus nog de CEO van Ikea België. 
                Ikea wil wereldwijd de grootste speler worden in de verkoop van zonnepanelen.', 


                "Een muziekgroepje met drie meisjes: eentje met zwart haar, een met blond haar en een met rood haar. 
                We hebben het niet over de Vlaamse meidengroep K3, maar over een nieuwe Poolse groep My3. Het is een Poolse kopie van Klaasje, Marthe en Hanne. 
                Ook de titel van hun eerste single, ‘Mammaje’, doet heel hard denken aan de titel van het K3-nummer 'MaMaSé. 
                Studio 100 geeft aan VTM NIEUWS toe dat ze aan een Poolse versie werken met een externe partner, maar dat die zo snel gelanceerd zou worden, wisten ze niet. </br></br>

                Natka (blond haar), Julka (zwart haar) en Gefi (rood haar) van de Poolse meidengroep My3 lijken sprekend op Klaasje, Marthe en Hanne van K3. Niet alleen het haarkleur, 
                maar ook de manier waarop het haar geknipt en gestyled is, 
                is exact zoals bij K3. Ook op hun jurkjes zien we dezelfde regenboogkleuren zoals op de populaire K3-kleedjes. </br></br>

                Vandaag lanceerde My3 hun eerste single ‘Mammaje’. Op de coverfoto van die single zien we de meisjes in een kleedje met een regenbooghartje voor een tros ballonnen. 
                Hiervoor hebben ze duidelijk de mosterd gehaald bij de videoclip van ’10.000 luchtballonnen’ van K3.", 


                " Tropische storm Ophelia is door het Amerikaanse nationaal orkaancentrum (NHC) opgewaardeerd tot een orkaan van categorie 1. 
                Het gaat om de tiende orkaan voor het orkaanseizoen 2017 in het Atlantische Oceaan-gebied. Het NHC waarschuwt dat de orkaan, die de komende dagen nog zou kunnen aansterken, 
                komend weekend langs en zelf over de Europese kusten kan razen. </br></br> 
                
                Volgens de modellen van het NHC zal Ophelia dit weekend langs de Portugese Azoren trekken, 
                waar hevige regenbuien worden voorspeld, alvorens het voorbij de kusten van Noord-Spanje raast. Uiteindelijk zal Ophelia ietwat in kracht afnemen wanneer de storm begin volgende week het westen van Ierland aandoet. 
                Het NHC zegt wel dat de route en omvang van Ophelia nog kunnen veranderen de komende dagen. </br></br> 
                
                Ophelia is overigens de tiende orkaan dit seizoen en dat is volgens de Amerikaanse meteoroloog Philip Klotzbach van de Colorado State University een record.");

                $artikels['datum'] = array('12/10/2017', '11/10/2017', '12/10/2017');
                $artikels['afbeelding'] = array('img/IKEA.jpg', 'img/K3.jpg', 'img/STORM.jpg');
                $artikels['afbeeldingBeschrijving'] = array('Gebouw IKEA', 'Poolse K3', "Orkaan Ophelia");
                $artikels['artikelID'] = array('0', '1', '2');
            ?>

            <ul>                       
                        <h1>De krant van vandaag</h1>

                        <section class="articles">
                            
                            <?php 

                                $lengte = count($artikels['titel']);

                                if ( isset ( $_GET['id'] ) ) {                     
                                    $id = $_GET['id'];
                                    //print_r($artikels['artikelID']);
                                    
                                    if (in_array($id, $artikels['artikelID'])) {
                                        echo "<article class='single'>";
                                            echo "<h1>" . $artikels['titel'][$id] . "</h1>";
                                            echo "<p>" . $artikels['datum'][$id] . "</p>";
                                            echo "<img src='" . $artikels['afbeelding'][$id] . "' alt='" . $artikels['afbeeldingBeschrijving'][$id] . "'>";
                                            echo "<p>" . $artikels['inhoud'][$id] . "</p>";
                                        echo "</article>";
                                    } 
                                    else { 
                                        echo "<article class='single'><h1>Artikel met id: " . $id . " bestaat niet."; 
                                    }

                                } 
                                else {
                                    $id = 0;

                                    for ( $i=0; $i < $lengte; $i++ ) {
                                        echo "<article class='multiple'>";
                                            echo "<h1>" . $artikels['titel'][$id] . "</id>";
                                            echo "<p>" . $artikels['datum'][$id] . "</p>";
                                            echo "<img src='" . $artikels['afbeelding'][$id] . "' alt='" . $artikels['afbeeldingBeschrijving'][$id] . "'>";
                                            echo "<p>" . substr($artikels['inhoud'][$id],0, 50) . "...</p>";
                                            echo "<p class='read-more'><a href=opdracht-get.php?id=" . $id . ">Lees meer</a></p>";
                                        echo "</article>";
                                        $id++;
                                    }
                                }
                                    
                            ?>

                        </section>

                <li>
                    <h2>Stap 1: HTML</h2>
                    <ul>
                        <li>maak een HTML document waarin de artikels een leuk uiterlijk krijgen. </li>
                        <li>Werk volgens een vaste structuur (bv: titel - tekst - afbeelding)</li>
                    </ul>
                </li>

                <li>
                    <h2>Stap 2: artikeldata voorbereiden</h2>
                    
                    <ul>
                        <li>Maak een array <code>$artikels</code>. Dit wordt een multidimensionele array</li>
                        <li>Op de values van de array <code>$artikels</code> komt een associatieve array met daarin de volgende keys: <code>'titel'</code>, <code>'datum'</code>, <code>'inhoud'</code>, <code>'afbeelding'</code>, <code>'afbeeldingBeschrijving'</code>
                        </li>
                        <li>De value van deze keys stemt overeen met de inhoud van de drie artikels die je gevonden hebt.</li>
                    </ul>

                </li>

                <li>
                    <h2>Stap 3: artikeldata door PHP uitlezen</h2>
                    <ul>
                        <li>Gebruik nu de <code>$artikels</code> array om op dynamische manier de inhoud voor elk artikel in de HTML-structuur te gieten die je daarnet hebt aangemaakt
                            <ul>
                                <li>Werk in je HTML met een <code>foreach</code> <span class="tip">Gebruik de shorthand-notatie</span></li>
                                <li>In deze <code>foreach</code> zet je de inhoud (titel, inhoud, datum, image-src) op de juiste plaats.</li>
                                <li>Toon in plaats van de volledige inhoud, enkel de eerste 50 karakters, gevolgd door een ellipsis: ...</li>
                                <li>Onder de inhoud komt een link 'lees meer'
                                    <ul>
                                        <li>het <code>a</code> element heeft als <code>href</code> value <code>"index.php?id=0"</code></li>
                                        <li>Waarbij de <code>id</code> value overeenstemt met de key in de <code>$artikels</code> array</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>


                <li>
                    <h2>Stap 4: get-variabele implementeren om individuele artikels op te vragen</h2>
                    <ul>
                        <li>Pas nu het script aan zodat er gecontroleerd wordt of de <code>GET</code> variabele <code>id</code> geset is.
                            <ul>
                                <li>Als dit het geval is, moet het individuele artikel getoont worden ipv het volledige overzicht.</li>
                                <li>De inhoud wordt dan volledig getoond ipv enkel 50 karakters</li>
                                <li>De link 'lees meer' mag niet meer zichtbaar zijn</li>
                                <li>De titel (in de head-tag) van de HTML-pagina moet eveneens aangepast worden naar de titel van het artikel</li>
                                <li>Het resultaat ziet er ongeveer als volgt uit:

                                    <div class="facade-minimal" data-url="http://www.app.local/index.php?id=0">
                                        
                                        <h1>Individueel artikel</h1>

                                            <div class="container">

                                                <article class="single">

                                                    <h1>Acht internetreuzen eisen beperkingen NSA-spionage</h1>

                                                    <p>9 december 2013</p>

                                                    <img src="http://web-backend.local/img/opdracht-get-artikel-01.jpg" alt="Mark Zuckerberg naast het Facebook logo">

                                                    <p>Acht belangrijke technologiebedrijven, zoals Google, Apple en Facebook, hebben in een open brief aan de Amerikaanse president Barack Obama veranderingen geëist in de manier waarop de overheid aan spionage doet. Ze willen het vertrouwen van het publiek in het internet herstellen.</p>

                                                    <p>De internetbedrijven coördineren voor het eerst een grote, gezamenlijke reactie op de onthullingen van klokkenluider Edward Snowden over de praktijken van de Amerikaanse geheime dienst NSA. Het gaat om Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn en Yahoo.</p>

                                                    <p>De brief is gepubliceerd op de website www.reformgovernmentsurveillance.com, maar die is momenteel niet beschikbaar. De bedrijven klagen aan dat de balans overgeheveld is in het voordeel van de overheid, ten koste van de vrijheid van het individu. ‘Een recht dat in de Grondwet staat. Het is tijd voor verandering.’</p>

                                                    <p>Volgens de internetreuzen bedreigt de NSA hun bedrijven, die lijden onder het dalende vertrouwen van het publiek in het internet. ‘Mensen gebruiken geen technologie die ze niet vertrouwen’, zei Brad Smith van Microsoft aan de krant The Guardian. ‘De regeringen hebben dat vertrouwen in gevaar gebracht en de regeringen moeten nu helpen om het te herstellen.’</p>

                                                    <p>‘Rapporten over overheidsspionage hebben aangetoond dat er nood is aan een meer onthullingen en nieuwe limieten aan de informatieverzameling van de overheid’, volgens Mark Zuckerberg, topman van Facebook. ‘De Amerikaanse overheid moet deze kans grijpen om hervormingen aan te vatten en zaken recht te zetten.’‘Big data’</p>

                                                    <p>Belangrijk is dat de bedrijven de hervormingsplannen van enkele politici in Washington nu steunen. Ze zijn het erover eens dat de NSA geen grote hoeveelheden data meer mag verzamelen zonder dat er een reden is om iemand te verdenken van terrorisme. Spionage mag enkel nog toegepast worden voor ‘specifieke, gekende gebruikers, en voor wettige doeleinden’.</p>
                                                
                                                </article>
                    </div>


                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="extension">Zorg ervoor dat wanneer er naar een id gesurft wordt dat niet bestaat (bv. <code>"index.php?id=1nj3ct10n"</code>), er een boodschap "Dit artikel bestaat niet" wordt getoond.</li>

                <li class="extension">Zorg ervoor dat je kan zoeken in de artikels.
                    <ul>
                        <li>Maak een formulier met een zoek-veld.</li>
                        <li>Controleer of het formulier gesubmit is</li>
                        <li>Als het gesubmit is, moet er in de arrays gezocht worden of het woord in de <code>$artikels</code> array voorkomt.
                        <p>Probeer eerst te controleren of het woord in de inhoud voorkomt, als dat werkt kan je eventueel uitbreiden met titel, datum, ...</p>
                        </li>
                        <li>Als het woord voorkomt moeten de betreffende artikels getoond worden.</li>
                        <li>Als het woord niet voorkomt moet de gepaste boodschap getoond worden: "De zoekterm 'zoekterm' komt niet voor in onze krant"</li>
                    </ul>
                </li>
            </ul>

        </section>

    </body>
</html>
