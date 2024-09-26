<?php

$counter = apcu_fetch('counter') ?: 1;

$next = $counter + 1;
apcu_store('counter', $next);


var_dump($counter);
var_dump($next);
