<?php
/* Practica en PHP */

/* Vamos a contar la palabra molino, y ver cuantas veces sale */

?>
<?php

/*primero creo la funcion necesaria para contar la palabra */
    
function cuentamolino($contenido, string $palabra){
    $sumamolino = substr_count(strtoupper($contenido), strtoupper($palabra));
    echo  $sumamolino;    
}

    
?>

<?php
    
    $quijote = fopen("/home/vant/Escritorio/FullStack/PHP/el_quijote.txt", "r");

    while (($contenido = fgets($quijote)) !== false){
        echo cuentamolino($contenido, "molino"); 
    }

?>