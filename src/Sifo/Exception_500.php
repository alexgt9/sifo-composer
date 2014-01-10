<?php

namespace Sifo;

/**
 * Oooops. Internal server error.
 */
class Exception_500 extends SEO_Exception{
	public function __construct( $message = null, $code = 0 )
	{
		// Log 500 errors only:
		trigger_error( '[ERROR 500]: ' . $message, E_USER_WARNING );
		parent::__construct( $message, $code );
	}
}