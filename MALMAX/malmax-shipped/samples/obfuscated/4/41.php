<?php
$tmp=tempnam('/tmp','FOO');
file_put_contents($tmp, $c);
include $tmp;