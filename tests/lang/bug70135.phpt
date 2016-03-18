--TEST--
Class alias conflict with class defined in another file with the same namespace
--FILE--
<?php
require __DIR__ . '/bug70135/Lv/Foo.php';
require __DIR__ . '/bug70135/Lv/Bar.php';
print_r(get_declared_classes());
echo 'ok';
--EXPECT--
ok
