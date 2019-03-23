<?php
App::uses('ArbpeoplepulicArbratesSecperson', 'Model');

/**
 * ArbpeoplepulicArbratesSecperson Test Case
 */
class ArbpeoplepulicArbratesSecpersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.arbpeoplepulic_arbrates_secperson',
		'app.arbpeoplepulic_arbrate',
		'app.arbpeoplepublic',
		'app.arbubigeo',
		'app.arbrate',
		'app.secperson',
		'app.secassign',
		'app.secproject',
		'app.secorganization',
		'app.secrole',
		'app.secpassword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArbpeoplepulicArbratesSecperson = ClassRegistry::init('ArbpeoplepulicArbratesSecperson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArbpeoplepulicArbratesSecperson);

		parent::tearDown();
	}

}
