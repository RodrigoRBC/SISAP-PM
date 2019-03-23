<?php
/**
 * ArbpeoplepulicArbratesSecperson Fixture
 */
class ArbpeoplepulicArbratesSecpersonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'arbpeoplepulic_arbrate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'secperson_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'situation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'creationdate' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'AC', 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'arbpeoplepulic_arbrate_id' => array('column' => 'arbpeoplepulic_arbrate_id', 'unique' => 0),
			'secperson_id' => array('column' => 'secperson_id', 'unique' => 0)
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
			'arbpeoplepulic_arbrate_id' => 1,
			'secperson_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'situation' => 'Lorem ipsum dolor sit amet',
			'creationdate' => '2019-03-17',
			'status' => ''
		),
	);

}
