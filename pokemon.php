<?php

class Pokemon
{
	public static $Counter = 0;

	public $Name;
    public $EnergyType;
    public $Health;
    public $Attacks;
    public $Weakness;
    public $Resisitence;

	function __construct($name,$hp,$EnergyType)
	{
	  self::$Counter = self::$Counter + 1;

	  $this->Name =$name;
	  $this->EnergyType = $EnergyType;
	  $this->Health = $hp;
	  $this->Attacks[];

	}
    public function DealDamage($EnergyType,$Damage)
    {
       $CalcDamage = $Damage - $this->EnergyType;

      if ( ) {
      	# code...
      }


    }

}

?>