<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Community\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    protected $Metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Community\PhpZeebe\Command\ProcessMetadata $process
     *           metadata of a deployed process
     *     @type \Community\PhpZeebe\Command\DecisionMetadata $decision
     *           metadata of a deployed decision
     *     @type \Community\PhpZeebe\Command\DecisionRequirementsMetadata $decisionRequirements
     *           metadata of a deployed decision requirements
     * }
     */
    public function __construct($data = NULL) {
        \Community\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * metadata of a deployed process
     *
     * Generated from protobuf field <code>.gateway_protocol.ProcessMetadata process = 1;</code>
     * @return \Community\PhpZeebe\Command\ProcessMetadata|null
     */
    public function getProcess()
    {
        return $this->readOneof(1);
    }

    public function hasProcess()
    {
        return $this->hasOneof(1);
    }

    /**
     * metadata of a deployed process
     *
     * Generated from protobuf field <code>.gateway_protocol.ProcessMetadata process = 1;</code>
     * @param \Community\PhpZeebe\Command\ProcessMetadata $var
     * @return $this
     */
    public function setProcess($var)
    {
        GPBUtil::checkMessage($var, \Community\PhpZeebe\Command\ProcessMetadata::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * metadata of a deployed decision
     *
     * Generated from protobuf field <code>.gateway_protocol.DecisionMetadata decision = 2;</code>
     * @return \Community\PhpZeebe\Command\DecisionMetadata|null
     */
    public function getDecision()
    {
        return $this->readOneof(2);
    }

    public function hasDecision()
    {
        return $this->hasOneof(2);
    }

    /**
     * metadata of a deployed decision
     *
     * Generated from protobuf field <code>.gateway_protocol.DecisionMetadata decision = 2;</code>
     * @param \Community\PhpZeebe\Command\DecisionMetadata $var
     * @return $this
     */
    public function setDecision($var)
    {
        GPBUtil::checkMessage($var, \Community\PhpZeebe\Command\DecisionMetadata::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * metadata of a deployed decision requirements
     *
     * Generated from protobuf field <code>.gateway_protocol.DecisionRequirementsMetadata decisionRequirements = 3;</code>
     * @return \Community\PhpZeebe\Command\DecisionRequirementsMetadata|null
     */
    public function getDecisionRequirements()
    {
        return $this->readOneof(3);
    }

    public function hasDecisionRequirements()
    {
        return $this->hasOneof(3);
    }

    /**
     * metadata of a deployed decision requirements
     *
     * Generated from protobuf field <code>.gateway_protocol.DecisionRequirementsMetadata decisionRequirements = 3;</code>
     * @param \Community\PhpZeebe\Command\DecisionRequirementsMetadata $var
     * @return $this
     */
    public function setDecisionRequirements($var)
    {
        GPBUtil::checkMessage($var, \Community\PhpZeebe\Command\DecisionRequirementsMetadata::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("Metadata");
    }

}
