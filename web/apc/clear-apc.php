<?php
echo "PHP APC CLEANER \n\n" ;
foreach(array('user','opcode',) as $v ){
    apc_clear_cache($v);
    echo " cache " . $v . " clear ! \n";
}
