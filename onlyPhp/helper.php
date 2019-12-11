 <?php 
 
 /* funzione stampa */
 function printElem($elem){
 echo "<h2>" . $elem["title"] . "</h2>" . $elem["author"];
 }

    function printArr($arr)
    {
        foreach ($arr as $elem) {
            printElem($elem);
        }
    }
 
 ?>
 