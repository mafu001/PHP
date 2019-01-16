<?php

//PRIVATE PROPERTIES
echo "\n \n===========///// 1 end //////=========== \n \n";

class Fund {

    private $taka; //u don't access outside of class because it's private

    function __construct($new1) {
        $this -> taka = $new1;
    }

    function takaAdd($money) {
        $this -> taka += $money;
    }

    function takaWithdrow($money) {
        $this -> taka -= $money;
    }

    function fundTotal() {
        echo "i have total taka {$this -> taka}";
    }
}

$myTaka = new Fund(1000);
// $myTaka -> fundTotal();
// $myTaka -> taka = 800;

$myTaka -> takaAdd(500);
$myTaka -> takaWithdrow(100);

$myTaka -> fundTotal();
