<?php

class Test
{
	protected $a;
	protected $b;
	protected $c;

	public function one() {
		echo "one";
	}

	public function two() {
		echo "two";
	}

	public function three() {
		echo "three";
	}

	public function four()
	{
		if(true) {
			echo "three";
		}
		else {
			echo "empty";
		}
	}

	public function five()
	{
		while(true){
			if(true){
				echo "1";
				break;
			}
		}
	}

	public function seven()
	{
		echo "seven";
	}

}

?>