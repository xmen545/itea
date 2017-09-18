<?php
abstract class Photographer  {
    //Action
    public function shot() {
        echo "Photographer  shot a ";
		$this->performMove();
    }
}

//start Photo objects
class Forest extends Photographer {
    protected function performMove() {
        echo "forest..." . PHP_EOL ."";
  
    }
}
class Sky extends Photographer {
    protected function performMove() {
        echo "sky..." . PHP_EOL ."";
    }
    
}
class Man extends Photographer {
    protected function performMove() {
        echo "man..." . PHP_EOL ."";
    }
}
class Pan extends Photographer {
    protected function performMove() {
        echo "pan..." . PHP_EOL ."";
    }
}
//end Photo objects

//start Сall
$photographer_action_1 = new Forest();
$photographer_action_1->shot();

$photographer_action_2 = new Sky();
$photographer_action_2->shot();

$photographer_action_3 = new Man();
$photographer_action_3->shot();

$photographer_action_4 = new Pan();
$photographer_action_4->shot();
//end Call
?> 