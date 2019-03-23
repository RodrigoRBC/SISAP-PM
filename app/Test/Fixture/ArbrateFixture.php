<?php
/**
 * Arbrate Fixture
 */
class ArbrateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'total_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'numper_people' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'calculate_rate' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'creationdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'AC', 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'total_cost' => 1,
			'numper_people' => 1,
			'calculate_rate' => 1,
			'creationdate' => '2019-03-17',
			'status' => ''
		),
	);

}
