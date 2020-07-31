<?php 

class Frog{
	public $loncat="hop hop";

	public function jump()
	{
		echo $this->loncat;
	}
}

$kodok = new Frog("");
$kodok->jump();

?>