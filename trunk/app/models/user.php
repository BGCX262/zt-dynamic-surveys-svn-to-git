<?php
	class User extends AppModel{
		
		var $belongsTo = array(
			'Career' => array(
				'className' => 'Career'
			),
			'Type' => array(
				'className' => 'Type'
			)
		);
		
		var $hasMany = array(
			'UsersSurvey' => array(                
				'className' => 'UsersSurvey',
				'counterCache' => 'true',
				'finderQuery' => 'select UsersSurvey.user_id,count(UsersSurvey.user_id) as num_surveys from users_surveys as UsersSurvey group by UsersSurvey.user_id'
			)
		);
	}
?>