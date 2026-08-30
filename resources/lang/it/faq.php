<?php

return [

    'meta' => [
        'title' => 'FAQ | GastronomIA',
        'description' => 'Trova le risposte alle domande frequenti su GastronomIA.',
    ],

    'hero' => [
        'eyebrow' => 'Centro assistenza',
        'title' => 'Come possiamo aiutarti?',
        'description' => 'Trova le risposte alle domande più frequenti su GastronomIA.',
    ],

    'search' => [
        'placeholder' => 'Cerca nelle FAQ...',
        'no_results_title' => 'Nessun risultato',
        'no_results_text' => 'Prova con un’altra parola chiave o contattaci.',
        'contact' => 'Contattaci',
    ],

    'categories' => [

        [
            'title' => 'Per iniziare',
            'description' => 'Scopri GastronomIA e configura il tuo account.',
            'questions' => [

                [
                    'question' => 'A chi si rivolge GastronomIA? È solo per professionisti?',
                    'answer' => '
                        GastronomIA è pensato sia per i <strong>professionisti della gastronomia</strong> sia per gli appassionati di cucina.
                        <br><br>
                        Gli strumenti si adattano a esigenze diverse: digitalizzare ricette personali, semplificare le attività quotidiane in cucina o gestire l’organizzazione completa di un’attività professionale.
                        <br><br>
                        Sono disponibili diversi livelli di abbonamento per soddisfare le esigenze degli utenti occasionali e delle attività professionali.
                    ',
                ],

                [
                    'question' => 'Da dove devo iniziare dopo il primo accesso?',
                    'answer' => '
                        Dalla schermata iniziale puoi accedere alle principali funzionalità di GastronomIA.
                        <br><br>
                        In alto a destra trovi un accesso rapido al tuo profilo.
                        I due pulsanti principali consentono di accedere alla scansione delle ricette e alla creazione di ricette assistita dall’intelligenza artificiale.
                        <br><br>
                        Le scorciatoie permettono inoltre di accedere ai raccoglitori di ricette, ai preferiti e ai diversi planning.
                        Il menu principale consente di accedere in qualsiasi momento a ricette, menu, strumenti IA, ordini e funzioni di pianificazione.
                    ',
                ],

                [
                    'question' => 'Dove posso modificare le informazioni del mio profilo?',
                    'answer' => '
                        Da qualsiasi schermata, utilizza l’accesso <strong>Profilo</strong> in alto a destra.
                        <br><br>
                        Qui puoi completare i tuoi dati personali, le informazioni della tua attività e accedere alle impostazioni relative a fornitori, ordini o membri del team.
                    ',
                ],

                [
                    'question' => 'Le informazioni sulle attrezzature della cucina migliorano i risultati dell’IA?',
                    'answer' => '
                        Sì. Inserendo le attrezzature disponibili nella tua cucina, GastronomIA può proporre ricette e istruzioni più adatte al tuo ambiente di lavoro.
                        <br><br>
                        Puoi configurare queste informazioni in <strong>Profilo → Ristorante → Gestione cucina</strong>.
                    ',
                ],

            ],
        ],

        [
            'title' => 'Ricette & IA',
            'description' => 'Crea, digitalizza, organizza e utilizza le tue ricette.',
            'questions' => [

                [
                    'question' => 'Come creo la mia prima ricetta?',
                    'answer' => '
                        Dal pulsante per creare o generare una ricetta sono disponibili diversi metodi.
                        <br><br>
                        <strong>Titolo della ricetta</strong><br>
                        Crea una ricetta partendo dal nome di un piatto.
                        <br><br>
                        <strong>Ingredienti</strong><br>
                        Crea una ricetta partendo da uno o più ingredienti.
                        <br><br>
                        <strong>Creazione rapida</strong><br>
                        Genera rapidamente un antipasto, un piatto principale o un dessert utilizzando diversi filtri e criteri.
                        <br><br>
                        Le ricette generate sono poi disponibili nella tua area ricette, dove possono essere organizzate, pianificate o condivise.
                    ',
                ],

                [
                    'question' => 'Posso vedere i suggerimenti dell’IA prima di generare una ricetta?',
                    'answer' => '
                        Sì. Ad ogni generazione, GastronomIA può proporti diversi suggerimenti in base al piatto, agli ingredienti o alla tua ricerca.
                        <br><br>
                        Puoi ritrovare questi suggerimenti in <strong>Le mie ricette → Suggerimenti</strong>.
                        <br><br>
                        Dopo aver selezionato un suggerimento, puoi consultare gli ingredienti e il costo stimato prima di generare la ricetta completa con istruzioni, allergeni e informazioni nutrizionali.
                    ',
                ],

                [
                    'question' => 'Dove vengono salvate tutte le mie ricette?',
                    'answer' => '
                        Ogni ricetta generata o scansionata viene automaticamente salvata nella cronologia delle ricette.
                        <br><br>
                        Puoi quindi organizzare le ricette utilizzando raccoglitori e sottoraccoglitori e ritrovarle nelle diverse sezioni: cronologia, raccoglitori, scansioni, planning e suggerimenti.
                    ',
                ],

                [
                    'question' => 'Come organizzo le ricette con raccoglitori e sottoraccoglitori?',
                    'answer' => '
                        In <strong>Le mie ricette → Raccoglitori</strong> puoi creare un raccoglitore e aggiungere tutti i sottoraccoglitori necessari.
                        <br><br>
                        Ad esempio: <strong>Pasticceria → Gelati & Sorbetti</strong>.
                        <br><br>
                        Puoi quindi archiviare le ricette direttamente dal loro menu delle opzioni.
                    ',
                ],

                [
                    'question' => 'Come archivio una ricetta in un raccoglitore?',
                    'answer' => '
                        Apri il menu delle opzioni <strong>(⋮)</strong> della ricetta e seleziona l’opzione per archiviare il piatto.
                        <br><br>
                        Potrai quindi scegliere il raccoglitore o sottoraccoglitore in cui salvare la ricetta.
                    ',
                ],

                [
                    'question' => 'Posso scansionare ricette scritte a mano o fotografate?',
                    'answer' => '
                        Sì. La funzione di scansione consente di digitalizzare appunti scritti a mano, foto da riviste o libri, screenshot o fotografie di piatti.
                        <br><br>
                        GastronomIA analizza quindi il contenuto e può completare automaticamente le informazioni mancanti, come tempi di preparazione, istruzioni, valori nutrizionali o informazioni sugli ingredienti.
                    ',
                ],

                [
                    'question' => 'Come modifico il numero di porzioni di una ricetta?',
                    'answer' => '
                        Dalla vista principale della ricetta, modifica semplicemente il campo <strong>numero di persone</strong>.
                        <br><br>
                        Le quantità vengono ricalcolate automaticamente in base al nuovo numero di porzioni.
                    ',
                ],

                [
                    'question' => 'Come modifico gli ingredienti di una ricetta?',
                    'answer' => '
                        Dalla vista principale della ricetta puoi aggiungere, modificare o eliminare gli ingredienti.
                        <br><br>
                        Clicca su un ingrediente esistente per modificarlo oppure utilizza l’opzione per aggiungere un nuovo ingrediente.
                    ',
                ],

                [
                    'question' => 'Dove posso vedere le istruzioni, la scheda tecnica ed esportare una ricetta in PDF?',
                    'answer' => '
                        Dalla ricetta seleziona <strong>Crea ricetta</strong> oppure <strong>Visualizza ricetta</strong> se è già stata generata.
                        <br><br>
                        Puoi quindi modificarne il contenuto, visualizzare le istruzioni dettagliate oppure utilizzare l’opzione PDF per esportare, condividere o stampare la scheda.
                    ',
                ],

                [
                    'question' => 'Come posso vedere i valori nutrizionali e gli allergeni?',
                    'answer' => '
                        Dal menu delle opzioni <strong>(⋮)</strong> della ricetta, seleziona la funzione per visualizzare <strong>valori nutrizionali e allergeni</strong>.
                    ',
                ],

                [
                    'question' => 'Come condivido una ricetta o la pubblico sui social network?',
                    'answer' => '
                        Dal menu <strong>(⋮)</strong> di una ricetta, utilizza la funzione di condivisione per condividere il piatto e la sua immagine.
                        <br><br>
                        Quando la ricetta fa parte di un menu pianificato, puoi condividere anche informazioni aggiuntive come il prezzo o il menu completo.
                    ',
                ],

            ],
        ],

        [
            'title' => 'Menu & Planning',
            'description' => 'Crea i tuoi menu, pianifica la settimana e organizza la tua attività.',
            'questions' => [

                [
                    'question' => 'Come creo e gestisco i miei menu o le mie carte?',
                    'answer' => '
                        Nella sezione dedicata a menu e carte puoi creare una nuova carta oppure importare contenuti esistenti.
                        <br><br>
                        Una volta creata, puoi personalizzarla ed esportarla in formato PDF.
                    ',
                ],

                [
                    'question' => 'Posso pianificare e condividere i menu settimanali?',
                    'answer' => '
                        Sì. In <strong>Planning → Menu settimanale</strong> puoi pianificare le ricette per categoria, ad esempio antipasto, piatto principale e dessert.
                        <br><br>
                        Il planning può poi essere esportato in PDF.
                        Puoi inoltre condividere il menu del giorno sui social network aggiungendo informazioni come il prezzo o una foto del piatto.
                    ',
                ],

                [
                    'question' => 'Come pianifico la presenza del personale?',
                    'answer' => '
                        In <strong>Planning → Presenze</strong>, seleziona le fasce orarie desiderate e utilizza lo strumento di gestione degli orari.
                        <br><br>
                        Puoi quindi selezionare i collaboratori e i rispettivi ruoli per assegnarli alle diverse fasce orarie.
                        Gli orari possono essere modificati individualmente o per più collaboratori.
                    ',
                ],

            ],
        ],

        [
            'title' => 'Team & Operazioni',
            'description' => 'Gestisci collaboratori, attività, ordini e ore di lavoro.',
            'questions' => [

                [
                    'question' => 'Come funzionano le attività e la mise en place?',
                    'answer' => '
                        In <strong>Planning → Attività</strong> puoi creare e assegnare attività per team o per giornata.
                        <br><br>
                        Le attività non completate possono essere riportate e riassegnate.
                        I collaboratori possono inoltre contrassegnare le attività come completate.
                        <br><br>
                        Gli amministratori possono creare attività a partire dal planning settimanale oppure aggiungere attività indipendenti e assegnarle ai membri del team.
                    ',
                ],

                [
                    'question' => 'Dove gestisco i miei fornitori e gli ordini?',
                    'answer' => '
                        In <strong>Profilo → I miei fornitori</strong> puoi gestire i dati di contatto dei fornitori.
                        Puoi selezionare fornitori esistenti oppure aggiungerli manualmente.
                        <br><br>
                        Dalla sezione Ordini o direttamente da una ricetta puoi aggiungere prodotti, creare moduli d’ordine e quindi inviarli via e-mail o esportarli in PDF.
                    ',
                ],

                [
                    'question' => 'Esiste un portale dedicato ai dipendenti?',
                    'answer' => '
                        <strong>Sì.</strong> Ogni collaboratore dispone di uno spazio dedicato.
                        <br><br>
                        Può accedere alla timbratura, consultare i planning del team e del personale e il menu settimanale.
                        <br><br>
                        I collaboratori possono inoltre consultare le ricette collegate ai menu o al planning e inviare richieste di ferie o assenza.
                    ',
                ],

                [
                    'question' => 'Come aggiungo membri del team e gestisco ruoli e permessi?',
                    'answer' => '
                        In <strong>Profilo → Team</strong> puoi aggiungere collaboratori, assegnare loro un ruolo o un’area di lavoro e gestire gli accessi.
                        <br><br>
                        Ogni collaboratore dispone di una scheda dettagliata dalla quale puoi gestire il ruolo e consultare i dati relativi alle ore di lavoro.
                        <br><br>
                        Quando viene aggiunto un nuovo collaboratore, riceve un’e-mail che gli consente di accedere al portale dipendenti.
                    ',
                ],

                [
                    'question' => 'GastronomIA permette di gestire le ore di lavoro e la timbratura?',
                    'answer' => '
                        Sì. GastronomIA include una <strong>timbratura</strong> e strumenti per la gestione del tempo disponibili sia per gli amministratori sia per i collaboratori.
                        <br><br>
                        Gli amministratori possono inoltre decidere se i collaboratori sono autorizzati a modificare le proprie registrazioni orarie.
                    ',
                ],

            ],
        ],

        [
            'title' => 'Account & Abbonamento',
            'description' => 'Gestisci il tuo abbonamento e le informazioni del tuo account.',
            'questions' => [

                [
                    'question' => 'Come funzionano gli abbonamenti e la fatturazione?',
                    'answer' => '
                        In <strong>Profilo → Abbonamento</strong> puoi gestire il tuo piano GastronomIA.
                        <br><br>
                        Le offerte comprendono i piani HOME <strong>Freemium</strong> e <strong>Lite</strong> e i piani PRO <strong>Basic</strong>, <strong>Advanced</strong> e <strong>Premium</strong>.
                        <br><br>
                        Puoi inoltre consultare le informazioni di fatturazione e le fatture.
                        I nuovi utenti beneficiano di una <strong>prova gratuita di 30 giorni delle funzionalità PRO</strong>.
                    ',
                ],

                [
                    'question' => 'Come posso eliminare definitivamente il mio account?',
                    'answer' => '
                        Per richiedere l’eliminazione completa del tuo account e dei tuoi dati, scrivi a
                        <strong><a href="mailto:support@gastronomia.ai" class="text-gia-orange hover:underline">support@gastronomia.ai</a></strong>
                        dall’indirizzo e-mail associato al tuo account.
                        <br><br>
                        Fornisci le informazioni necessarie per permetterci di identificare il tuo account e gestire la richiesta.
                    ',
                ],

            ],
        ],

    ],

    'cta' => [
        'title' => 'Non hai trovato la risposta?',
        'description' => 'Il nostro team è a tua disposizione.',
        'button' => 'Contattaci',
    ],

];