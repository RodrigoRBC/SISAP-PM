<?php
/**
 * ArbpeoplepulicArbrate Fixture
 */
class ArbpeoplepulicArbrateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'arbpeoplepublic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'arbrate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'period' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'creationdate' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'AC', 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'arbrate_id' => array('column' => 'arbrate_id', 'unique' => 0),
			'arbpeoplepublic_id' => array('column' => 'arbpeoplepublic_id', 'unique' => 0)
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
			'arbpeoplepublic_id' => 1,
			'arbrate_id' => 1,
			'fecha' => '2019-03-17',
			'period' => 'Lor',
			'description' => 'Lorem ipsum dolor sit amet',
			'creationdate' => '2019-03-17',
			'status' => ''
		),
	);

}
