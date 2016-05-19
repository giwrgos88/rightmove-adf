<?php
/**
*	This file contains the Details Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\Parkings;
use Frozensheep\RightmoveADF\Values\OutsideSpaces;
use Frozensheep\RightmoveADF\Values\AreaUnits;
use Frozensheep\RightmoveADF\Values\EntranceFloors;
use Frozensheep\RightmoveADF\Values\Conditions;
use Frozensheep\RightmoveADF\Values\Accessibilities;
use Frozensheep\RightmoveADF\Values\Heatings;
use Frozensheep\RightmoveADF\Values\Furnishings;
use Frozensheep\RightmoveADF\Values\CommercialuseClasses;
use Frozensheep\RightmoveADF\Groups\Room;

/**
*	Oversea Details Group Class
*
*	Class to handle Details group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseaDetails implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'objectarray', 'class' => 'Frozensheep\Synthesize\Type\StringObject', 'max' => 10),
		'bedrooms' => array('type' => 'int', 'required' => true, 'min' => 0),
		'bathrooms' => array('type' => 'int', 'min' => 0),
		'reception_rooms' => array('type' => 'int', 'min' => 0),
		'parking' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Parkings'),
		'outside_space' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\OutsideSpaces'),
		'year_built' => array('type' => 'int'),
		'internal_area' => array('type' => 'number'),
		'internal_area_unit' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\AreaUnits'),
		'land_area' => array('type' => 'number'),
		'land_area_unit' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\AreaUnits'),
		'floors' => array('type' => 'int'),
		'entrance_floor' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\EntranceFloors'),
		'condition' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Conditions'),
		'accessibility' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Accessibilites'),
		'heating' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Heatings'),
		'business_for_sale' => array('type' => 'boolean'),
		'golf_course_on_site_or_within_10_minutes_walk' => array('type' => 'boolean'),
		'golf_course_within_a_20_minute_drive' => array('type' => 'boolean'),
		'private_pool' => array('type' => 'boolean'),
		'communal_pool' => array('type' => 'boolean'),
		'at_beach_or_within_10_minute_walk' => array('type' => 'boolean'),
		'beach_within_a_20_minute_drive' => array('type' => 'boolean'),
		'private_beach' => array('type' => 'boolean'),
		'sea_view' => array('type' => 'boolean'),
		'at_ski_field_or_within_10_minutes_walk' => array('type' => 'boolean'),
		'ski_field_within_a_45_minute_drive' => array('type' => 'boolean'),
		'air_conditioning' => array('type' => 'boolean'),
		'security_system' => array('type' => 'boolean'),
		'gated_entry' => array('type' => 'boolean'),
		'balcony' => array('type' => 'boolean'),
		'ground_floor_terrace' => array('type' => 'boolean'),
		'hot_tub' => array('type' => 'boolean'),
		'log_fireplace' => array('type' => 'boolean'),
		'business_for_sale' => array('type' => 'boolean'),
		'comm_use_class' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\CommercialuseClasses'),
		'rooms' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Groups\Room', 'max' => 99)
	);
}