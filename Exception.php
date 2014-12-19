<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace drenty\inwebo;

class Exception extends \yii\base\Exception
{
    /**
     * @var array the error info provided by a PDO exception. This is the same as returned
     * by [PDO::errorInfo](http://www.php.net/manual/en/pdo.errorinfo.php).
     */
    public $requestInfo = [];
    public $errorInfo = [];


    /**
     * Constructor.
     * @param string $message PDO error message
     * @param array $errorInfo PDO error info
     * @param integer $code PDO error code
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message, $requestInfo = [], $errorInfo = [], $code = 0, \Exception $previous = null)
    {
    	$this->requestInfo = $requestInfo;
        $this->errorInfo = $errorInfo;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Inwebo Exception';
    }

    /**
     * @return string readable representation of exception
     */
    public function __toString()
    {
        $string = parent::__toString() . PHP_EOL
        . 'Request Information:' . PHP_EOL . print_r($this->requestInfo, true);

        if (!empty($this->errorInfo)) {
        	$string .= PHP_EOL . 'Error Information:' . PHP_EOL . print_r($this->errorInfo, true);
    	}

    	return $string;
    }
}
