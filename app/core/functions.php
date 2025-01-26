<?php
// Muestra los arrays de una forma más legible
function show($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function esc($str)
{
    return htmlspecialchars(trim(stripslashes($str)));
}
