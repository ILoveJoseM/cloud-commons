<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2022-03-23
 * Time: 09:13
 */

namespace JoseChan\Cloud\Commons\Client\ServiceRegistry;

/**
 * 服务注册器
 * Interface ServiceRegistry
 * @package JoseChan\Cloud\Commons\Client\ServiceRegistry
 */
interface ServiceRegistry
{
    /**
     * 注册服务
     * @param mixed $registration 服务
     * @return mixed
     */
    public function register($registration);

    /**
     * 服务注销
     * @param $registration
     * @return mixed
     */
    public function deregister($registration);
}
