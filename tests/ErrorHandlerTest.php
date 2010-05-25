<?php
require_once 'PHPUnit/Framework.php';

require_once '/Users/mikepearce/Sites/task/models/ErrorHandler.php';

/**
 * Test class for ErrorHandler.
 * Generated by PHPUnit on 2010-05-24 at 22:34:13.
 */
class ErrorHandlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ErrorHandler
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ErrorHandler;
    }

    /**
     */
    public function testSetAppName()
    {
        $this->assertEquals(
            NULL,
            $this->object->setAppName('xxx')
        );
    }

    /**
     */
    public function testLogError()
    {
        $this->assertTrue(
            $this->object->logError('XXXXXXXx---XXXXX')
        );
    }

    /**
     */
    public function testShowUsage()
    {
        ob_start();
        $this->object->showUsage();
        $buff = ob_get_contents();
        ob_end_clean();
        $this->assertEquals(
            "Usage: php -f report.php [merchant_id] OR [all]\n",
            $buff
        );
    }

    /**
     */
    public function testLogInfo()
    {
        $this->assertTrue(
            $this->object->logInfo('XXXXXXXx---XXXXX')
        );
    }
}
?>