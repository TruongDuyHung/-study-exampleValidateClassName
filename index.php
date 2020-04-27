<?php
function validateClassName($classname)
{
    $valadate = '/^[C|A|P]([0-9]{4,4})[G|H|I|K|L|M]$/';
    if (preg_match($valadate, $classname)) {
        echo ("Class name true "."<br>");
    } else {
        echo("Class name fail". "<br>");
    }
}
validateClassName("C0318G");
validateClassName("M0315G");