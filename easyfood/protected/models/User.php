<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class User extends EMongoDocument
    {
        public $first_name;
        public $last_name;
        public $email;
        public $password;
        public $full_name;
        public $id;
        
        public static function model($className=__Class__)
        {
            return parent::model($className);
        }
        
        public function getCollectionName()
        {        
            return 'users';
        }
        
        public function primaryKey()
        {
            return 'email';
        }
        
        public function rules()
        {
          return array(
            array('first_name, last_name, email, password', 'required'),
            array('password', 'length', 'max' => 20),
            array('first_name, last_name', 'length', 'max' => 255),
          );
        }
 
        public function attributeLabels()
        {
          return array(
            'email'  => 'User Email',
            'first_name'   => 'First Name',
            'last_name' => 'Last Name',
            'password'   => 'Password',
          );
        }
        
        public function get_full_name(){
            return $first_name ? $first_name : ''.' '.$last_name ? $last_name : '';
        }
        
        
    }
?>
