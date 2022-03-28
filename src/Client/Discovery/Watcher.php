<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2022-03-25
 * Time: 11:12
 */

namespace JoseChan\Cloud\Commons\Client\Discovery;


interface Watcher
{
    public function __invoke(...$args);
}
