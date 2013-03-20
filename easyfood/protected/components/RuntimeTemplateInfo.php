<?php

/*
 * Provides template to passin processed session values such as is_admin, is_logged_in, etc.
 */

class RuntimeTemplateInfo{
    
    public $session;
    
    public function __construct(){
        $this->session = Yii::app()->session;
    }
    
    public function isAdmin(){
        if(array_key_exists( 'is_admin',$this->session))
        {
            return $this->session['is_admin'];
        }
        
        return false;
    }
    
    public function isLoggedIn(){
        if(array_key_exists('is_logged_in',$this->session))
        {
            return $this->session['is_logged_in'];
        }
        
        return false;
    }
    
}
?>
