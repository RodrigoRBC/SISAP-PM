<?php
App::uses('ArbpeoplepulicArbrate', 'Model');

/**
 * ArbpeoplepulicArbrate Test Case
 */
class ArbpeoplepulicArbrateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.arbpeoplepulic_arbrate',
		'app.arbpeoplepublic',
		'app.arbubigeo',
		'app.arbrate',
		'app.secperson',
		'app.secassign',
		'app.secproject',
		'app.secorganization',
		'app.secrole',
		'app.secpassword',
		'app.arbpeoplepulic_arbrates_secperson'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArbpeoplepulicArbrate = ClassRegistry::init('ArbpeoplepulicArbrate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArbpeoplepulicArbrate);

		parent::tearDown();
	}

}
