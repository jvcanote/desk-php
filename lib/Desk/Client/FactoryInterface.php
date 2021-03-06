<?php

namespace Desk\Client;

interface FactoryInterface
{

    /**
     * Factory method to create a new client
     *
     * @param array|\Guzzle\Common\Collection $config Configuration options
     *
     * @return \Desk\Client
     */
    public function factory($config = array());
}
