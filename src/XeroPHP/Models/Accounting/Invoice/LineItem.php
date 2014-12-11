<?php

namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;


class LineItem extends Remote\Object {

    /**
     * LineItem Description
     *
     * @property string Description
     */

    /**
     * LineItem Quantity
     *
     * @property string Quantity
     */

    /**
     * Lineitem unit amount. By default, unit amount will be rounded to two decimal places. You can opt in
     * to use four decimal places by adding the querystring parameter unitdp=4 to your query. See the
     * Rounding in Xero guide for more information.
     *
     * @property float UnitAmount
     */

    /**
     * See Items
     *
     * @property string ItemCode
     */

    /**
     * See Accounts
     *
     * @property string AccountCode
     */

    /**
     * Used as an override if the default Tax Code for the selected <AccountCode> is not correct – see
     * TaxTypes.
     *
     * @property string TaxType
     */

    /**
     * The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax
     * rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     *
     * @property float TaxAmount
     */

    /**
     * If you wish to omit either of the <Quantity> or <UnitAmount> you can provide a LineAmount and Xero
     * will calculate the missing amount for you. The line amount reflects the discounted price if a
     * DiscountRate has been used . i.e LineAmount = Quantity * Unit Amount * ((100 – DiscountRate)/100)
     *
     * @property float LineAmount
     */

    /**
     * Optional Tracking Category – see Tracking.  Any LineItem can have a maximum of 2
     * <TrackingCategory> elements.
     *
     * @property string Tracking
     */

    /**
     * Percentage discount being applied to a line item (only supported on ACCREC invoices – ACC PAY
     * invoices and credit notes in Xero do not support discounts
     *
     * @property string DiscountRate
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
        return 'LineItem';
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
            'Description' => array (false, null),
            'Quantity' => array (false, null),
            'UnitAmount' => array (false, null),
            'ItemCode' => array (false, null),
            'AccountCode' => array (false, null),
            'TaxType' => array (false, null),
            'TaxAmount' => array (false, null),
            'LineAmount' => array (false, null),
            'Tracking' => array (false, null),
            'DiscountRate' => array (false, null)
        );
    }


    /**
     * @return string
     */
    public function getDescription(){
        return $this->_data['Description'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setDescription($value){
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity(){
        return $this->_data['Quantity'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setQuantity($value){
        $this->_data['Quantity'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitAmount(){
        return $this->_data['UnitAmount'];
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setUnitAmount($value){
        $this->_data['UnitAmount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemCode(){
        return $this->_data['ItemCode'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setItemCode($value){
        $this->_data['ItemCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode(){
        return $this->_data['AccountCode'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setAccountCode($value){
        $this->_data['AccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType(){
        return $this->_data['TaxType'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setTaxType($value){
        $this->_data['TaxType'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount(){
        return $this->_data['TaxAmount'];
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setTaxAmount($value){
        $this->_data['TaxAmount'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineAmount(){
        return $this->_data['LineAmount'];
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setLineAmount($value){
        $this->_data['LineAmount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTracking(){
        return $this->_data['Tracking'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setTracking($value){
        $this->_data['Tracking'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountRate(){
        return $this->_data['DiscountRate'];
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setDiscountRate($value){
        $this->_data['DiscountRate'] = $value;
        return $this;
    }


}