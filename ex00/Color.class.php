<?php

Class Color {

public $red = 0;
public $green = 0;
public $blue = 0;

public static $verbose = false;


public static function doc() {

	echo "

<- Color ----------------------------------------------------------------------
The Color class handles RGB colors.

An instance can be contructed from either a RGB value:
new Color( array( 'rgb' => 12345 ) );

Or from distinct red, green, blue constitutives:
new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255 ) );

Red, green, blue constitutives and RGB values are converted to intergers.
Negative or > to 255 color constitutives are left as is.
Any other use is undefined behaviour.

The class provides the following methods :

Color   add( Color \$rhs );
Adds each color constitutive and returns a new Color instance.

Color   sub( Color \$rhs );
Substracts each color constitutive and returns a new Color instance.

Color   mult( \$f );
Multiplies each color constitutive by factor \$f and returns a new Color
instance.
---------------------------------------------------------------------- Color ->\n";

}


function __construct( array $kwargs ) {
	//if ( array_key_exists( 'rgb', $kwargs)

	//else if

		if (self::$verbose)
		{
			$this->_descriptor();
			print (" constructed.\n");
		}
}

private function _descriptor() {

			printf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);

}

public function __tostring() {

			$this->_descriptor();
			print ("\n");
}


}

?>
