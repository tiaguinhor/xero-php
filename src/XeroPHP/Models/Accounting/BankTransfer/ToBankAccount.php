<?php

namespace XeroPHP\Models\Accounting\BankTransfer;

use XeroPHP\Remote;


class ToBankAccount extends Remote\Object {

    /**
     * The Account Code of the Bank Account
     *
     * @property string Code
     */

    /**
     * The ID of the Bank Account
     *
     * @property string AccountID
     */

    /**
     * The Name Bank Account
     *
     * @property string Name
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'ToBankAccount';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Hintable type
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'Code' => array (true, null),
            'AccountID' => array (true, null),
            'Name' => array (true, null)
        );
    }


    /**
     * @return string
     */
    public function getCode(){
        return $this->_data['Code'];
    }

    /**
     * @param string $value
     * @return ToBankAccount
     */
    public function setCode($value){
        $this->_data['Code'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountID(){
        return $this->_data['AccountID'];
    }

    /**
     * @param string $value
     * @return ToBankAccount
     */
    public function setAccountID($value){
        $this->_data['AccountID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return ToBankAccount
     */
    public function setName($value){
        $this->_data['Name'] = $value;
        return $this;
    }


}