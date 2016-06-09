<?php
App::uses('AppModel', 'Model');
/**
 * Keyword Model
 *
 * @property User $User
 */
class Keyword extends AppModel {

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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'keywords_users',
			'foreignKey' => 'keyword_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
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
