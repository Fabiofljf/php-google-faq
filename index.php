<!-- 
Ci sono diverse domande con relative risposte.

Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
 -->

<?php
// Imposto struttura dati menu.

$menu = ["Introduzione", "Norme sulla privacy", "Termini di servizio", "Tecnologie", "Domande frequenti"];

// Imposto la struttura dati.

$dati = [
    [
        "domanda" =>    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        "risposta" =>
        [
            "paragrafo1" => "La recente <span class='c_text'> <a href='#null'>decisione della Corte di giustizia dell'Unione europea</a> </span> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "paragrafo2" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "paragrafo3" => "Per presentare una richiesta di rimozione, compila questo <span class='c_text'> <a href='#null'>modulo web</a> </span>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
            "paragrafo4" => "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
            "paragrafo5" => "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
        ],
    ],
    [
        "domanda" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        "risposta" =>
        [
            "paragrafo1" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "paragrafo2" => "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
            "paragrafo3" => "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, <span class='c_text'> <a href='#null'>nel Centro Google per la sicurezza online</a> </span>.",
            "paragrafo4" => " <span class='c_text'> <a href='#null'>Scopri</a> </span> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ],
    ],
    [
        "domanda" => "Perché il mio account è associato a un paese?",
        "risposta" =>
        [
            "paragrafo1" => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
            "paragrafo2" => " <ol> <li> La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:",
            "paragrafo3" => "<ol type='a'><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>",
            "paragrafo4" => "<li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol>",
            "paragrafo5" => "</li><li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali. </li> </ol>",
            "paragrafo6" => "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
            "paragrafo7" => "<h5>Stabilire il paese associato al tuo account</h5>",
            "paragrafo8" => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",
            "paragrafo9" => "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
            "paragrafo10" => "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <span class='c_text'> <a href='#null'>Contattaci</a> </span> se ritieni che il paese associato al tuo account sia sbagliato.",

        ],
    ],
    [
        "domanda" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        "risposta" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <span class='c_text'> <a href='#null'>contattare il webmaster</a> </span> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <span class='c_text'> <a href='#null'>fai clic qui</a> </span>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <span class='c_text'> <a href='#null'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a> </span> ."
    ],
    [
        "domanda" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        "risposta" => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <span class='c_text'> <a href='#null'>URL referrer</a> </span> . Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <span class='c_text'> <a href='#null'>qui</a> </span>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
    ]
];

// var_dump($dati);

foreach ($dati as $array) {
    // var_dump($array); // - Singole array complete.
    // var_dump($array['domanda']); // Domande delle singole array.
    // var_dump($array['risposta']); // Risposte delle singole array.
    foreach ($array['risposta'] as $key => $value) {
        // var_dump($key); // - I "Paragrafi".
        // var_dump($value); // - Il contenuto dei paragrafi.
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- TITLE -->
    <title>Document</title>
</head>

<body>

    <section id="site_header">
        <div id="Upheader" class="d-flex p-3">
            <img style="width:150px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Google_logo_%282010-2013%29.svg/2560px-Google_logo_%282010-2013%29.svg.png" alt="logo google">
            <h1 class="ms-2">Privacy e Termini</h1>
        </div>
        <!-- /#Upheader -->

        <div id="Downheader">
            <ul class="d-flex m-0 mt-2 ps-3 border-bottom">
                <?php for ($i = 0; $i <= count($menu); $i++) { ?>
                    <li class="me-3 list_special <?php echo ($menu[$i] === 'Domande frequenti') ? 'active' : '' ?>">
                        <?php echo $menu[$i] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /#Downheader -->
    </section>
    <!-- /#site_header -->

    <section id="site_main">
        <section id="questions" class="mt-5">
            <div class="container">
                <div class="row flex-column">
                    <?php foreach ($dati as $array) : ?>
                        <div class="col">
                            <h2> <?php echo $array['domanda'] ?> </h2>
                            <?php foreach ($array['risposta'] as $key => $value) : ?>
                                <p> <?php echo $value ?> </p>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- /#questions -->
    </section>
    <!-- /#site_main -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>