<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Camundity\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.DeployResourceRequest</code>
 */
class DeployResourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * list of resources to deploy
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.Resource resources = 1;</code>
     */
    private $resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Camundity\PhpZeebe\Command\Resource>|\Google\Protobuf\Internal\RepeatedField $resources
     *           list of resources to deploy
     * }
     */
    public function __construct($data = NULL) {
        \Camundity\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * list of resources to deploy
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.Resource resources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * list of resources to deploy
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.Resource resources = 1;</code>
     * @param array<\Camundity\PhpZeebe\Command\Resource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Camundity\PhpZeebe\Command\Resource::class);
        $this->resources = $arr;

        return $this;
    }

}

