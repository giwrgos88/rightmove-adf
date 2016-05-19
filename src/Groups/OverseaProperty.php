<?php
/**
*	This file contains the Oversea Property Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\OverseaAddress;
use Frozensheep\RightmoveADF\Groups\OverseaPrice;
use Frozensheep\RightmoveADF\Groups\OverseaDetails;
use Frozensheep\RightmoveADF\Groups\Principal;
use Frozensheep\RightmoveADF\Values\PropertyTypes;
use Frozensheep\RightmoveADF\Values\Statuses;
use Frozensheep\RightmoveADF\Values\LetTypes;

/**
*	Oversea Property Group Class
*
*	Class to handle Oversea Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseaProperty implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\PropertyTypes', 'required' => true),
		'os_status' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Statuses', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'address' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseaAddress', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseaPrice', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseaDetails', 'required' => true),
		'date_available' => array('type' => 'datetime', 'format' => 'd-m-Y', 'autoinit' => false),
		'contract_months' => array('type' => 'int'),
		'minimum_term' => array('type' => 'int'),
		'let_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\LetTypes'),
		'media' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Groups\Media', 'max' => 999),
		'principal' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Principal')
	);
}