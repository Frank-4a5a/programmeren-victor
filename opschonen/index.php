<?php
function opschonen($a="   dEZe ZIN klOpt nIEt   ")
{
    $a = strtolower($a);
    $a =  ucwords($a);
    $a =  ltrim($a," ");
    $a =  rtrim($a," ");
    echo $a;
}
opschonen();
