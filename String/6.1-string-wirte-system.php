<?php

//DIFFERENT WAY TO WRITE STRING

$name = 'mahfuz';

echo 'my name is $name \n'; //single quotation show all just a para or line
echo PHP_EOL;

//be carefull, plz u make gap with press enter but not space into nulldoc
$nulldoc = <<<'EOD'
my name is $name \n

EOD;

echo $nulldoc;  //nulldoc works like a single quotation

echo "\n \n===========///// 1 end //////=========== \n \n";

$name2 = 'mahfuz';

echo "my name is $name \n"; //double quotation show there won value
echo PHP_EOL;

//be carefull, plz u make gap with press enter but not space into heredoc
$heredoc = <<<EOD
my name 
is $name \n
EOD;

echo $heredoc;  //heredoc works like a double quotation