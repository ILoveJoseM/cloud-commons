<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2022-03-23
 * Time: 10:37
 */

namespace JoseChan\Cloud\Commons\Client\LoadBalancer;


use JoseChan\Cloud\Commons\Client\Discovery\DiscoveryClient;

interface LoadBalancedClient
{
    public function choose($service);

    public function getDiscovery() : DiscoveryClient;
}
