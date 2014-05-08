<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 5/8/2014
 * Time: 8:44 AM
 */

namespace Flucomp\PLinq;

interface IEnumerator
{
    public function moveNext();
    public function reset();
    public function current();
}

interface IEnumerable
{
    public function getEnumerator();
}