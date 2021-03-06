<?php
namespace Models;

/**
 * @desc Contains mostly injection handlers.
 * @author Mike Pearce <mike@mikepearce.net>
 * @package data-reader
 * @since 23/05/10
 */
class BaseClass
{

    /**
     * @desc Contains the error handler
     * @var object
     */
    protected $_eHand;

    /**
     * @desc The transaction table oibject
     * @var object
     */
    protected $_transTable;

    /**
     * @desc The currency converter object
     * @var object
     */
    protected $_converter;

    /**
     * @desc Set the transaction table
     * @param TransactionTable $o
     */
    public function setTransactionTable(\Models\Core\abstractCore $o)
    {
        $this->_transTable = $o;
    }

    /**
     * @desc set the error handler
     * @param errorHandler $o
     */
    public function setErrorHandler(\Models\Error\abstractError $o)
    {
        $this->_eHand = $o;
    }

    /**
     * @desc Injector for currency converter
     * @param CurrencyConverter $o
     */
    public function setCurrencyConverter(\Models\Currency\abstractCurrency $o)
    {
        $this->_converter = $o;
    }

    /**
     * Magic setter
     * Don't really like these, but as a quick method of doing injection
     * it works quite well.
     */
    public function __set($variable, $value)
    {
        if (method_exists($this, $method = 'set'. $variable))
        {
            $this->$method($value);
        }

    }
    
}
