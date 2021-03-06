<?php
/**
 * LICENSE
 *
 * Copyright 2010 Albert Lombarte
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Sifo;

class FilterServer extends Filter
{
	/**
	 * Singleton object.
	 *
	 * @var Filter
	 */
	static protected $instance;

	/**
	 * Filters variables passed by Server (Apache SetEnv for instance)
	 * @return FilterServer
	 */
	public static function getInstance()
	{
		if ( !self::$instance )
		{
			self::$instance = new self ( $_SERVER );
			//$_SERVER = array();		//Too soon to remove the $_SERVER variable. It's being used in lots of places yet.
			// ¡Lombarte! ¡Lombarte!, ¡Lombarte es cojonudo!, ¡como Lombarte no hay ninguno!
		}
		return self::$instance;
	}

	/**
	 * Mocks the host for use in scripts.
	 * @param string $mocked_host
	 */
	public function setHost( $mocked_host )
	{
		$this->request['HTTP_HOST'] = $mocked_host;
	}

}