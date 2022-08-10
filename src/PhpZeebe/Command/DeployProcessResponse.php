<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Community\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.DeployProcessResponse</code>
 */
class DeployProcessResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * the unique key identifying the deployment
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     */
    protected $key = 0;
    /**
     * a list of deployed processes
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.ProcessMetadata processes = 2;</code>
     */
    private $processes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $key
     *           the unique key identifying the deployment
     *     @type array<\Community\PhpZeebe\Command\ProcessMetadata>|\Google\Protobuf\Internal\RepeatedField $processes
     *           a list of deployed processes
     * }
     */
    public function __construct($data = NULL) {
        \Community\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the unique key identifying the deployment
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @return int|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * the unique key identifying the deployment
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->key = $var;

        return $this;
    }

    /**
     * a list of deployed processes
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.ProcessMetadata processes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProcesses()
    {
        return $this->processes;
    }

    /**
     * a list of deployed processes
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.ProcessMetadata processes = 2;</code>
     * @param array<\Community\PhpZeebe\Command\ProcessMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProcesses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Community\PhpZeebe\Command\ProcessMetadata::class);
        $this->processes = $arr;

        return $this;
    }

}
