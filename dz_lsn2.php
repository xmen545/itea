<?php
abstract class Photographer  {
    //Action
    public function shoot() {
        echo "Фотограф... ";
		$this->performMove();
    }
}

//start Photo objects
class Forest extends Photographer {
    protected function performMove() {
        echo "сфотографировал лес..." . PHP_EOL ."<br/>";
  
    }
}
class Sky extends Photographer {
    protected function performMove() {
        echo "сфотографировал небо..." . PHP_EOL ."<br/>";
    }
    
}
class Man extends Photographer {
    protected function performMove() {
        echo "сфотографировал мужчину..." . PHP_EOL ."<br/>";
    }
}
class Pan extends Photographer {
    protected function performMove() {
        echo "сфотографировал ручку..." . PHP_EOL ."<br/>";
    }
}
//end Photo objects

//start Сall
$photographer_action_1 = new Forest();
$photographer_action_1->shoot();

$photographer_action_2 = new Sky();
$photographer_action_2->shoot();

$photographer_action_3 = new Man();
$photographer_action_3->shoot();

$photographer_action_4 = new Pan();
$photographer_action_4->shoot();
//end Call
?>