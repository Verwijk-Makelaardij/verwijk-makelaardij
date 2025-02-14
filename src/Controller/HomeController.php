<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        /*
            Om de secties onder te koop, aangekocht, verkocht, en verhuurd aan te passen heeft u de volgende informatie nodig.
            Ik heb de code zo geschreven dat het makkelijk zou moeten maken om nieuwe huizen toe te voegen of te verwijderen als dit nodig is.
            Elk stukje staat apart in '[]', dit laat de code weten wat er in een stukje zit
            Tussen elke '[]' moet een komma (,) komen, dit laat de code weten dat er een nieuw stukje komt
            Om te zorgen dat nieuwe toevoegingen goed werken, moet de volgende volgorde worden toegepast
            Op de eerste lijn komt de titel van het stuk
            Op de tweede lijn komt de link of naam van de foto
            Op de derde lijn komt te staan of de foto intern is opgeslagen ('internal') of via een link van een andere website komt ('external')
            Op de vierde lijn komt een link naar een artikel of pagina van de verkoop, deze lijn is optioneel en kan worden weggelaten

            Ik geef hieronder een voorbeeld hoe dit eruit moet zien:

        [
            "Heerhugowaard, De Wende, Fase 6",
            "heerhugowaard-dewende-fase-6.jpg",
            "internal",
            "https://www.nieuwbouw-dewende.nl/nieuws"
        ]
        
            OPMERKING:
            Voor de afbeeldingen heeft u de volledige naam nodig, dus als de afbeelding heet 'afbeelding.png', moet u 'afbeelding.png' schrijven en niet 'afbeelding'
            Voor links heeft u de volledige link nodig, als voorbeeld need ik het logo van Google, 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png'
        */
        $huizenTeKoop = $this->teKoop();
        $huizenAankoop = $this->aangekocht();
        $huizenVerkocht = $this->verkocht();
        $huizenVerhuurd = $this->verhuurd();
        return $this->render('home/home.html.twig', [
            'teKoop' => $huizenTeKoop,
            'aankoop' => $huizenAankoop,
            'verkocht' => $huizenVerkocht,
            'verhuurd' => $huizenVerhuurd,
        ]);
    }

    private function teKoop()
    {
        //Hierin komen de stukjes onder 'Te koop'
        $beschikbaar = array(
            [
                "Heerhugowaard, De Wende, Fase 6",
                "heerhugowaard-dewende-fase-6.jpg",
                "internal",
                "https://www.nieuwbouw-dewende.nl/nieuws"
            ]
        );

        return $beschikbaar;
    }

    private function aangekocht()
    {
        //Hierin komen de stukjes onder 'Aangekocht'
        $aankooping = array(
            [
                "Monnickendam, Houtrib 61",
                "houtrib_monnickendam.avif",
                "internal"
            ],
            [
                "Monnickendam, Kerkstraat 53A",
                "kerkstraat_monnickendam.avif",
                "internal"
            ]
        );

        return $aankooping;
    }

    private function verkocht()
    {
        //Hierin komen de stukjes onder 'Verkocht'
        $verkocht = array(
            [
                "Heerhugowaard, De Wende, Fase 5",
                "de-wende_heerhugowaard_f5.avif",
                "internal"
            ],
            [
                "Beets, Voorkamp 6",
                "voorkamp_beets.avif",
                "internal"
            ],
            [
                "De Goorn, Trilgras 22",
                "trilgras_de-goorn.avif",
                "internal"
            ],
            [
                "Monnickendam, H. Reyntjeslaan 80B",
                "h-reyntjeslaan_monnickendam.avif",
                "internal"
            ],
            [
                "Monnickendam, Dissel 27",
                "dissel_monnickendam.avif",
                "internal"
            ]
        );

        return $verkocht;
    }

    private function verhuurd()
    {
        //Hierin komen de stukjes onder 'Verhuurd'

        $verhuurd = array(
            [
                "Monnickendam, Kloosterdijk 2",
                "kloosterdijk_monnickendam.avif",
                "internal"
            ]
        );
        
        return $verhuurd;
    }
}
