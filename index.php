<!-- Creare una variabile con un paragrafo di testo a vostra scelta.

<?php 
    
    $text = "Non è facile pensare di andar via
    E portarsi dietro la malinconia
    Non è facile partire e poi morire
    Per rinascere in un'altra situazione
    Un mondo migliore
    Non è facile pensare di cambiare
    Le abitudini di tutta una stagione
    Di una vita che è passata come un lampo
    E che fila dritta verso la stazione
    Di un mondo migliore
    E un mondo migliore
    Sai, essere libero
    Costa soltanto
    Qualche rimpianto
    Sì, tutto è possibile
    Perfino credere
    Che possa esistere
    Un mondo migliore
    Un mondo migliore
    Un mondo migliore
    Un mondo migliore
    Non è facile trovarsi su una strada
    Quando passa la necessità di andare
    Quando è ora, è ora, è ora di partire
    E non puoi, non puoi, non puoi più rimandare
    Il mondo migliore
    Un mondo migliore
    Sai, essere libero
    Costa soltanto
    Qualche rimpianto
    Sì, tutto è possibile
    Perfino credere
    Che possa esistere
    Un mondo migliore
    Un mondo migliore
    Un mondo migliore
    Un mondo migliore";
    
    $word = $_GET["word"]; 
    
?>

 Stampare a schermo il paragrafo e la sua lunghezza. -->
<h2><?php echo $text  ?></h2>
<h2>In questo testo ci sono <?php echo strlen($text) ?> lettere e spazi</h2>
<!-- str_word_count ritorna il numero di parole  della stringa -->
<h2>In questo testo ci sono <?php echo $text8 = str_word_count($text) ?> parole</h2>

<!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
<h2><?php echo $text2 = str_replace("Un mondo", $_GET["word"], $text)?></h2>
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<h2><?php echo $text3 = str_replace($word, "***", $text2)?></h2>
<h2>Adesso in questo testo ci sono <?php echo strlen($text3) ?> lettere e spazi</h2>
<h2>Adesso in questo testo ci sono <?php echo $text9 = str_word_count($text3) ?> parole</h2>


<!-- Esperimenti -->
<!-- explode trasforma in array una stringa che separo allo spazio vuoto -->
<h2><?php echo $text4 = explode(" ", $text) ?></h2>
<h2><?php echo $text5 = var_dump($text4) ?></h2>
<!-- str_split trasforma in array una stringa e separa ogni elemento -->
<h2><?php echo $text6 = str_split($text) ?></h2>
<h2><?php echo $text7 = var_dump($text6) ?></h2>

