<!-- Create un array per salvare tutte le faq (domande frequenti)che trovate in questa pagina:
https://policies.google.com/faq
Stampate in pagina tutte le domande dinamicamente con un ciclo in php.
BONUS: stilare la pagina
Nome repo: php-google-faq -->
<?php
// echo 'ciao';
$arrayFaq = [
    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
    "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?"
];

foreach ($arrayFaq as $question) {
    echo '<p>';
    echo $question;
    echo '</p>';
}


 ?>
