<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Feedback', 'doctrine');

/**
 * BaseFeedback
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $organization
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property timestamp $created_at
 * @property integer $created_aid
 * @property integer $updated_aid
 * 
 * @method integer   getId()           Returns the current record's "id" value
 * @method string    getOrganization() Returns the current record's "organization" value
 * @method string    getName()         Returns the current record's "name" value
 * @method string    getEmail()        Returns the current record's "email" value
 * @method string    getPhone()        Returns the current record's "phone" value
 * @method string    getMessage()      Returns the current record's "message" value
 * @method timestamp getCreatedAt()    Returns the current record's "created_at" value
 * @method integer   getCreatedAid()   Returns the current record's "created_aid" value
 * @method integer   getUpdatedAid()   Returns the current record's "updated_aid" value
 * @method Feedback  setId()           Sets the current record's "id" value
 * @method Feedback  setOrganization() Sets the current record's "organization" value
 * @method Feedback  setName()         Sets the current record's "name" value
 * @method Feedback  setEmail()        Sets the current record's "email" value
 * @method Feedback  setPhone()        Sets the current record's "phone" value
 * @method Feedback  setMessage()      Sets the current record's "message" value
 * @method Feedback  setCreatedAt()    Sets the current record's "created_at" value
 * @method Feedback  setCreatedAid()   Sets the current record's "created_aid" value
 * @method Feedback  setUpdatedAid()   Sets the current record's "updated_aid" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFeedback extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('feedback');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('organization', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('message', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}