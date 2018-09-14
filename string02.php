<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.<br>
EOD;

class foo{
    var $foo;
    var $bar;
    function foo(){
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}
$foo = new foo();
$name = 'Achmatim';

echo <<<EOT
<u>$str</u><br>
My name is "<b><i>$name</i></b>". I am printing some <b><i>$foo->foo</i></b>.
Now, I am printing some <b><i>{$foo->bar[0]}</i></b>.
This should print a capital 'a' : \x41
EOT;
?>