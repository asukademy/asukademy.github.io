<?php
/**
 * Part of asukademy project. 
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace PhroznPlugin\Provider;

use Symfony\Component\Yaml\Yaml;

/**
 * The Courses class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class Courses extends \Phrozn\Provider\Base implements \Phrozn\Provider
{
	/**
	 * Get generated content
	 *
	 * @return mixed
	 */
	public function get()
	{
		$file = __DIR__ . '/courses.yml';

		return Yaml::parse(file_get_contents($file));
	}
}
