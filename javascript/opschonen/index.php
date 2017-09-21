<?php
function opschonen($x="   dEZe ZIN klOpt nIEt   ")
{
    $x = strtolower($x);
    $x =  ucwords($x);
    $x =  ltrim($x," ");
    $x =  rtrim($x," ");
    echo $x;
}
opschonen();
