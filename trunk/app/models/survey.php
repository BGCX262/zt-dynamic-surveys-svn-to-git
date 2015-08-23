<?php

	class Survey extends AppModel{
		var $hasAndBelongsToMany = array(
			'Type' => array(                
				'className' => 'Type',
				'joinTable' => 'surveys_types',
				'foreignKey' => 'survey_id',
				'associationForeignKey' => 'type_id',
				'unique' => true,
				/*'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'finderQuery' => '',
				'deleteQuery' => '',
				'insertQuery' => ''*/
			),
			'Career' => array(                
				'className' => 'Career',
				'joinTable' => 'careers_surveys',
				'foreignKey' => 'survey_id',
				'associationForeignKey' => 'career_id',
				'unique' => true,
				/*'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'finderQuery' => '',
				'deleteQuery' => '',
				'insertQuery' => ''*/
			),
			'User' => array(                
				'className' => 'User',
				'joinTable' => 'users_surveys',
				'foreignKey' => 'survey_id',
				'associationForeignKey' => 'user_id',
				'unique' => true,
				/*'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'finderQuery' => '',
				'deleteQuery' => '',
				'insertQuery' => ''*/
			)
		);
	}

?>