--TEST--
#684: Unable to find test class when no test methods exists
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue684Test';
$_SERVER['argv'][3] = 'Regression/684/Issue684Test.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

F

Time: %i %s

There was 1 failure:

1) Warning
No tests found in class "Foo_Bar_Issue684Test".
%s/684.php:%i

FAILURES!
Tests: 1, Assertions: 0, Failures: 1.
