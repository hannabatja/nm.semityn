<?php

/**
 * Admin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Admin extends BaseAdmin
{
    public function __toString() {
        return $this->getEmail();
    }
    
    public function getUsername() {
        $tmp = explode('@', $this->getEmail());
        return $tmp[0];
    }
}