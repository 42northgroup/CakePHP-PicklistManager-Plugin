<?php
/**
 * Picklist options model class which deals with managring picklist option for picklists. Manages basic CRUD and more.
 * 
 * Copyright 2012, Zubin Khavarian (http://zubink.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2012, Zubin Khavarian (https://github.com/zubinkhavarian)
 * @link http://zubink.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @package Plugin\PicklistManager
 */

App::uses('AppModel', 'Model');

/**
 * Picklist options model class which deals with managring picklist option for picklists. Manages basic CRUD and more.
 *
 * @package Plugin\PicklistManager
 * @author Zubin Khavarian
 */
class PicklistOption extends PicklistManagerAppModel
{
    /**
     * Model name
     * 
     * @var string
     * @access public
     */
    public $name = 'PicklistOption';

    
    /**
     * Validates data on save
     * 
     * @var array
     * @access public
     */
    public $validate = array();


    /**
     * hasMany realtionship
     * 
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Fetch a picklist option given its ID
     * 
     * @access public
     * @param string $picklistOptionId
     * @return PicklistOption
     */
    public function fetchPicklistOption($picklistOptionId)
    {
        $picklistOption = $this->find('first', array(
            'contain' => array(),

            'conditions' => array(
                'PicklistOption.id' => $picklistOptionId
            )
        ));

        return $picklistOption;
    }
}