<?php

interface PriceEventInterface
{
    /**
     * Returns the payload of the event
     *
     * @return array
     */
    public function payload() : array;
}