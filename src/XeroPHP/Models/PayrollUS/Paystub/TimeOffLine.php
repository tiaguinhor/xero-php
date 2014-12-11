<?php

namespace XeroPHP\Models\PayrollUS\Paystub;

use XeroPHP\Remote;


class TimeOffLine extends Remote\Object {

    /**
     * Xero identifier for payroll time off type
     *
     * @property string TimeOffTypeID
     */

    /**
     * Hours of time off
     *
     * @property string[] Hours
     */

    /**
     * Balance for the time off type
     *
     * @property string Balance
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
        return 'TimeOffLine';
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
        return Remote\URL::API_PAYROLL;
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
            'TimeOffTypeID' => array (false, null),
            'Hours' => array (false, null),
            'Balance' => array (false, null)
        );
    }


    /**
     * @return string
     */
    public function getTimeOffTypeID(){
        return $this->_data['TimeOffTypeID'];
    }

    /**
     * @param string $value
     * @return TimeOffLine
     */
    public function setTimeOffTypeID($value){
        $this->_data['TimeOffTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHours(){
        return $this->_data['Hours'];
    }

    /**
     * @param string[] $value
     * @return TimeOffLine
     */
    public function addHour($value){
        $this->_data['Hours'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBalance(){
        return $this->_data['Balance'];
    }

    /**
     * @param string $value
     * @return TimeOffLine
     */
    public function setBalance($value){
        $this->_data['Balance'] = $value;
        return $this;
    }


}