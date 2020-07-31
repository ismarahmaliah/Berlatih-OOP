<?php 

class Animal{
public $legs =2;
public $cold_blooded =false;

public function __construct($name)
{
	$this->name = $name;
}
function getName()
{
	echo $this->name;
}

}

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
 ?>