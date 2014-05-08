<?php
namespace Flucomp\PLinq;
class PLinqException extends \Exception
{
    function __construct($code, $msg)
    {
        $this->code = $code;
        $this->message = $msg;
    }
}

class PLinqNotFoundException extends PLinqException
{

}