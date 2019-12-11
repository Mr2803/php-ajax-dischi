 <?php 
 
 /* funzione stampa */
 function printElem($elem){
 echo "<div class='song' >"."<img src='".$elem["poster"]."'alt=''>"  ."<p>". $elem["title"]. "</p>"."<p>".$elem["author"] . "</p>"."<p>". $elem["year"]. "</p>"."</div>";
 }

    function printArr($arr)
    {
        foreach ($arr as $elem) {
            printElem($elem);
        }
    }
 
 ?>
 