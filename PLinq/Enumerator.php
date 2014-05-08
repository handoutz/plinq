<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 5/8/2014
 * Time: 8:49 AM
 */

namespace Flucomp\PLinq;


class Enumerator implements IEnumerator
{
    /**
     * @var IEnumerable
     */
    private $internal;

    function __construct(IEnumerable $internal)
    {
        $this->internal = $internal;
    }

    public function moveNext()
    {

    }

    public function reset()
    {
        // TODO: Implement reset() method.
    }

    public function current()
    {
        // TODO: Implement current() method.
    }
}