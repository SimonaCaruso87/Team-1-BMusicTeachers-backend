<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            "È davvero bravo, sa come insegnare la musica in modo coinvolgente. Lo consiglio vivamente.",
            "Molto professionale e competente, ha reso le lezioni di musica divertenti e interessanti.",
            "Un insegnante fantastico, ha fatto un ottimo lavoro nell'insegnarmi a suonare lo strumento.",
            "Le sue lezioni sono stimolanti e istruttive, sono migliorato molto grazie a lui.",
            "Un vero talento nel campo della musica, le sue lezioni sono sempre un piacere.",
            "Insegnante eccezionale, le lezioni sono state un'esperienza straordinaria.",
            "Ho imparato molto con lui, è molto paziente e appassionato della musica.",
            "Le lezioni sono ben strutturate e mi ha aiutato a sviluppare le mie abilità musicali.",
            "Un insegnante appassionato e competente, consiglio a tutti di prendere lezioni da lui.",
            "Le sue lezioni sono state una rivelazione, ha reso la musica accessibile a tutti.",
            "Insegnante straordinario, ha una conoscenza approfondita della musica e sa come insegnarla.",
            "È un maestro nel vero senso della parola, le sue lezioni sono preziose.",
            "Molto professionale e preparato, ha reso il mio viaggio musicale molto piacevole.",
            "Ho apprezzato ogni lezione, è un insegnante incredibile e inspirante.",
            "Un insegnante fantastico, le sue lezioni sono divertenti e istruttive.",
            "Ha reso la musica facile da capire e imparare, sono molto grato per le sue lezioni.",
            "Un insegnante molto talentuoso, ha reso la mia passione per la musica ancora più forte.",
            "Le sue lezioni sono sempre entusiasmanti, lo consiglio a chiunque voglia imparare la musica.",
            "È un insegnante straordinario, ha cambiato il mio modo di vedere la musica.",
            "Gli devo molto, è un maestro della musica e dell'insegnamento.",
            "Le sue lezioni sono sempre un piacere, è un vero esperto della musica.",
            "Molto paziente e appassionato, ha fatto un lavoro incredibile nel farmi progredire.",
            "Insegnante eccellente, ha reso la mia esperienza musicale indimenticabile.",
            "Sono molto grato per le sue lezioni, ha fatto emergere il mio talento musicale.",
            "Le sue lezioni sono divertenti e istruttive, sono diventato un musicista migliore grazie a lui.",
            "Ha una profonda comprensione della musica, le sue lezioni sono state illuminanti.",
            "Un insegnante appassionato e competente, è stato un piacere imparare da lui.",
            "Le sue lezioni hanno cambiato la mia vita musicale, è un vero mentore.",
            "Sono così contento di aver avuto lui come insegnante, è davvero un professionista della musica.",
            "Insegnante eccezionale, le sue lezioni sono un'esperienza da non perdere."
        ];

        foreach($reviews as $review) {
            Review::create([
                'content' => $review
            ]);
        }
    }
}
