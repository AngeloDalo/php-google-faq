<?php
/**
 * Consegna: Riscrivere questa pagina del sito google https://policies.google.com/faq.
 * Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP
 */

//evitare nomi faqn, si può fare anche array in array
$faq = [
    'faq1' => [
        [
            'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            'risposta' => "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa.La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome.Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.   

            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.  
            
            Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.  
            
            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.  
            
            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
        ],
    ],
    'faq2' => [
        [
            'domanda' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
            'risposta' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.  

            Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.  
            
            Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online</a>.  
            
            Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
        ]
    ],
    'faq3' => [
        [
            'domanda' => "Perché il mio account è associato a un paese?",
            'risposta' => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:

            <ol>
                <li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:</li>
                <ol type='a'>
                    <li>    Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                    <li>    Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
                </ol>
                <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.  </li>
            </ol>
            Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
        ],
    ],
    'faq4' => [
        [
            'domanda' => "Stabilire il paese associato al tuo account",
            'risposta' => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.  

            I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.  
            
            Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.",
        ],
    ],
    'faq5' => [
        [
            'domanda' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
            'risposta' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.",
        ],
    ],
    'faq6' => [
        [
            'domanda' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
            'risposta' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
        ],
    ],
];
$array_paragrafo = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@400;700&family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <title>GOOGLE</title>
</head>
<body>
    <header>
        <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <img class="google-logo" src="img\google-logo-attuale-scritta-multicolore.png" alt="google-logo">
                            <a id="privacy" href="#">Privacy e termini</a>
                        </div>
                    </div>
                    <div class="row link-row">
                        <div class="col-12">
                            <a href="#">Introduzione</a>
                            <a href="#">Norme sulla privacy</a>
                            <a href="#">Termini di servizio</a>
                            <a href="#">Tecnologie</a>
                            <a href="#">Domande frequenti</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center mb-5">
                    <i class="fas fa-bars"></i>
                    <div class="avatar">
                        <img src="img\avatar.jpg" alt="avatar.jpg">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="div">
            <?php
            foreach ($faq as $key => $single_faq) {
                //divido la risposta in più pagrafi andando a capo alla fine del paragrafo
                foreach ($single_faq as $value) {
                    echo '<h1 class="faq-request">' . $value["domanda"].'</h1>' ;
                    $array_paragrafo = (explode(".  ", $value["risposta"]));
                    //metterlo nello stesso ciclo del riempimento dei paragrafi funziona comunque
                    for ($i=0; $i<count($array_paragrafo); $i++) {
                        //var_dump($array_paragrafo[$i]);
                            echo '<p class="paragraph">' . $array_paragrafo[$i] ."</p></br>";
                    }
                }
                //primo ciclo per stampare la domanda successivamente vengono stampati i paragrafi della rispettiva domanda
                //foreach ($single_faq as $value) {
                    //echo '<h1 class="faq-request">' . $value["domanda"].'</h1>' ;
                    //ciclo for in questa posizione stampa paragrafo correttamente
                    //prima riempie con foreach successivamente stampa i paragrafi della corrispettiva domanda
                    //for ($i=0; $i<count($array_paragrafo); $i++) {
                        //var_dump($array_paragrafo[$i]);
                            //echo '<p class="paragraph">' . $array_paragrafo[$i] ."</p></br>";
                    //}
                    //echo '<p>' . $value["risposta"].'</p>' ;
                    //var_dump($single_faq);
                    //var_dump($value);
                //}
            }
            //Se metto ciclo for con array paragrafo viene stampato solamente ultimo paragrafo
            ?>
        </div>
    </main>
    <footer>
        <div class="container-fluid container-footer">
            <div class="row">
                <div class="col-8">
                    <a href="#">Google</a>
                    <span>-</span>
                    <a href="#">Tutto su google</a>
                    <span>-</span>
                    <a href="#">Privacy</a>
                    <span>-</span>
                    <a href="#">Termini</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <i class="fas fa-comment-alt"></i>
                    <select data-placeholder="Choose a Language...">
                        <option value="IT">Italian</option>
                        <option value="AF">Afrikaans</option>
                        <option value="SQ">Albanian</option>
                        <option value="AR">Arabic</option>
                        <option value="HY">Armenian</option>
                        <option value="EU">Basque</option>
                        <option value="BN">Bengali</option>
                        <option value="BG">Bulgarian</option>
                        <option value="CA">Catalan</option>
                        <option value="KM">Cambodian</option>
                        <option value="ZH">Chinese (Mandarin)</option>
                        <option value="HR">Croatian</option>
                        <option value="CS">Czech</option>
                        <option value="DA">Danish</option>
                        <option value="NL">Dutch</option>
                        <option value="EN">English</option>
                        <option value="ET">Estonian</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finnish</option>
                        <option value="FR">French</option>
                        <option value="KA">Georgian</option>
                        <option value="DE">German</option>
                        <option value="EL">Greek</option>
                        <option value="GU">Gujarati</option>
                        <option value="HE">Hebrew</option>
                        <option value="HI">Hindi</option>
                        <option value="HU">Hungarian</option>
                        <option value="IS">Icelandic</option>
                        <option value="ID">Indonesian</option>
                        <option value="GA">Irish</option>
                        <option value="JA">Japanese</option>
                        <option value="JW">Javanese</option>
                        <option value="KO">Korean</option>
                        <option value="LA">Latin</option>
                        <option value="LV">Latvian</option>
                        <option value="LT">Lithuanian</option>
                        <option value="MK">Macedonian</option>
                        <option value="MS">Malay</option>
                        <option value="ML">Malayalam</option>
                        <option value="MT">Maltese</option>
                        <option value="MI">Maori</option>
                        <option value="MR">Marathi</option>
                        <option value="MN">Mongolian</option>
                        <option value="NE">Nepali</option>
                        <option value="NO">Norwegian</option>
                        <option value="FA">Persian</option>
                        <option value="PL">Polish</option>
                        <option value="PT">Portuguese</option>
                        <option value="PA">Punjabi</option>
                        <option value="QU">Quechua</option>
                        <option value="RO">Romanian</option>
                        <option value="RU">Russian</option>
                        <option value="SM">Samoan</option>
                        <option value="SR">Serbian</option>
                        <option value="SK">Slovak</option>
                        <option value="SL">Slovenian</option>
                        <option value="ES">Spanish</option>
                        <option value="SW">Swahili</option>
                        <option value="SV">Swedish </option>
                        <option value="TA">Tamil</option>
                        <option value="TT">Tatar</option>
                        <option value="TE">Telugu</option>
                        <option value="TH">Thai</option>
                        <option value="BO">Tibetan</option>
                        <option value="TO">Tonga</option>
                        <option value="TR">Turkish</option>
                        <option value="UK">Ukrainian</option>
                        <option value="UR">Urdu</option>
                        <option value="UZ">Uzbek</option>
                        <option value="VI">Vietnamese</option>
                        <option value="CY">Welsh</option>
                        <option value="XH">Xhosa</option>
                        </select>
                </div>
            </div>
         </div>
    </footer>
</body>
</html>