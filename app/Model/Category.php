<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property User $User
 */
class Category extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	public function getKeyWordsByUserId($userId = null) {
	    if(empty($userId)) return false;
	    $keywords = $this->find('all', array(
	        'joins' => array(
	             array('table' => 'keywords_users',
	                'alias' => 'KeywordUsers',
	                'type' => 'INNER',
	                'conditions' => array(
	                    'KeywordUsers.user_id' => $userId,
	                    'KeywordUsers.keyword_id = keyword.id'
	                )
	            )
	        ),
	        'group' => 'keyword.id'
	    ));
	    return $keywords;
	}
}
