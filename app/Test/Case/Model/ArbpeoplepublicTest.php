<?php
App::uses('Arbpeoplepublic', 'Model');

/**
 * Arbpeoplepublic Test Case
 */
class ArbpeoplepublicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.arbpeoplepublic',
		'app.arbubigeo',
		'app.arbpeoplepulic_arbrate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Arbpeoplepublic = ClassRegistry::init('Arbpeoplepublic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Arbpeoplepublic);

		parent::tearDown();
	}

}
