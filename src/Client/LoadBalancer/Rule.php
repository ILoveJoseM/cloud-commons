<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2022-03-25
 * Time: 12:17
 */

namespace JoseChan\Cloud\Commons\Client\LoadBalancer;


interface Rule
{
    public function setLoadBalance(LoadBalancedClient $loadBalance);

    public function choose($serviceNodes);
}
