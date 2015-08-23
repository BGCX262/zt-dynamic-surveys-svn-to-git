<?php
	class AppController extends Controller{
	
		var $helpers = array('Html','Form','Session','Utilities');
		var $components = array('Auth', 'Session');
		
			
		/** 
		 * Career Model 
		 * 
		 * @var Career 
		 */ 
		 var $Career; 
		 
		/** 
		 * Survey Model 
		 * 
		 * @var Survey 
		 */ 
		 var $Survey; 
		 
		/** 
		 * Type Model 
		 * 
		 * @var Type 
		 */ 
		 var $Type; 
		
		/** 
		 * User Model 
		 * 
		 * @var User 
		 */ 
		 var $User; 
		
		 /** 
		 * Group Model 
		 * 
		 * @var Group 
		 */ 
		 var $Group; 
		  
		 /** 
		 * AuthComponent 
		 * 
		 * @var AuthComponent 
		 */ 
		 var $Auth; 
		  
		 /** 
		 * SessionComponent 
		 * 
		 * @var SessionComponent 
		 */ 
		 var $Session; 
		  
		  /** 
		 * RequestHandlerComponent 
		 * 
		 * @var RequestHandlerComponent 
		 */ 
		 var $RequestHandler; 


	}
	
?>