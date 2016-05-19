<?php
/**
*	This file contains the Address Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\CountryCode;

/**
*	Oversea Address Group Class
*
*	Class to handle Address group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseaAddress implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'country_code' => array('type' => 'string', 'required' => true , 'max'=>2),
		'region' => array('type' => 'string', 'max' => 100),
		'sub_region' => array('type' => 'string', 'max' => 100),
		'town_city' => array('type' => 'string', 'max' => 100),
		'latitude' => array('type' => 'number'),
		'longitude' => array('type' => 'number')
	);
}