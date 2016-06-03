<?php
App::uses('KeywordsUser', 'Model');

/**
 * KeywordsUser Test Case
 */
class KeywordsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.keywords_user',
		'app.keyword',
		'app.user',
		'app.category',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KeywordsUser = ClassRegistry::init('KeywordsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KeywordsUser);

		parent::tearDown();
	}

}
