<?php

Class Color {

public $red = 0;
public $green = 0;
public $blue = 0;

public static $verbose = false;


public static function doc() {

print (file_get_contents('Color.doc.txt')."\n");

}

private function _color_setter($color) {

return ($color % 256);

}

function __construct( array $kwargs ) {
	if ( array_key_exists( 'rgb', $kwargs))
	{
		$this->red = $this->_color_setter($kwargs['rgb'] / (256 * 256));
		$this->green = $this->_color_setter($kwargs['rgb'] >> 8);
		$this->blue = $this->_color_setter($kwargs['rgb']);
	}
	else
	{

	if ( array_key_exists( 'red', $kwargs))
	$this->red = $this->_color_setter($kwargs['red']);
	if ( array_key_exists( 'green', $kwargs))
	$this->green = $this->_color_setter($kwargs['green']);
	if ( array_key_exists( 'blue', $kwargs))
	$this->blue = $this->_color_setter($kwargs['blue']);

}

		if (self::$verbose)
		{
			print ($this->_descriptor()." constructed.\n");
		}
}

private function _descriptor() {

			return(sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));

}

public function __tostring() {

			return ($this->_descriptor()."\n");
}

public function add() {


}

}

?>
