--TEST--
Bug #68765 (Optimisation of constant definitions can cause incorrect output)
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.optimization_level=-1
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
define('FOO','hello');
include('bug68765.inc');
var_dump(ANOTHER_FOO);
--EXPECTF--
Notice: Constant FOO already defined in %s/ext/opcache/tests/bug68765.inc on line 3
string(11) "hello world"
