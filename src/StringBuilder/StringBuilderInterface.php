<?php


namespace Acme\StringBuilder;


/**
 * Interface StringBuilderInterface
 * @package Acme\StringBuilder
 */
interface StringBuilderInterface
{
    /**
     * @param string $string
     * @return $this
     */
    function append(string $string):self;

    /**
     * @return string
     */
    function toString():string;
}