<?php
require_once 'PHPUnit/Framework.php';

require_once '/Users/mikepearce/Sites/task/models/CurrencyWebservice.php';

/**
 * Test class for CurrencyWebservice.
 * Generated by PHPUnit on 2010-05-24 at 22:33:48.
 */
class CurrencyWebserviceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CurrencyWebservice
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new CurrencyWebservice;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testGetExchangeRate().
     */
    public function testGetExchangeRate()
    {
        $this->assertTrue(
            is_float($this->object->getExchangeRate('$'))
        );
    }
}
?>