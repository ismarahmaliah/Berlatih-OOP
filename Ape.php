<?php 

class new Ape{
	public $yell="Auooo";

	public function yell()
	{
		echo $this->yell;
	}
}

$ungokong = new Ape("kera sakti");
$ungokong->yell();

?>