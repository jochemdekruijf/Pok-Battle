<?php

class Pokemon
{
	public $Name;
    public $EnergyType;
    public $Hitpoints;
    public $Health;
    public $Attacks[];
    public $Weakness;
    public $Resisitence;

	function __construct($Name,$EnergyType,$Hitpoints,$Health,$Attacks,$Weakness,$Resisitence)
	{
	 $this->Name =$Name;
	 $this->EnergyType = $EnergyType;
	 $this->Hitpoints = $Hitpoints;
	 $this->Health = $Health;
	 $this->Attacks = $Attacks;
	 $this->Weakness = $Weakness;
     $this->Resisitence = $Resisitence
	}
   
   // public function Tackle($Damage,$EnergyType,$Hitpoints,$Weakness, $Resisitence){
    
   // }

}



class Pikachu extends Pokemon
{
	public $Name = "pikachu";
	public $EnergyType = "lightning"
	public $Hitpoints = 60;
	public $Health = 60;
	public $Attacks = ;  // Electric ring 50 , Pika Punch 20
	public $Weakness = "fire";
	public $Resisitence = ;// fighting res: 20


	function __construct(argument)
	{
		# code...
	}
}

?>