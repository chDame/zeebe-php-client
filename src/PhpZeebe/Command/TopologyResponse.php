<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Camundity\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.TopologyResponse</code>
 */
class TopologyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * list of brokers part of this cluster
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.BrokerInfo brokers = 1;</code>
     */
    private $brokers;
    /**
     * how many nodes are in the cluster
     *
     * Generated from protobuf field <code>int32 clusterSize = 2;</code>
     */
    protected $clusterSize = 0;
    /**
     * how many partitions are spread across the cluster
     *
     * Generated from protobuf field <code>int32 partitionsCount = 3;</code>
     */
    protected $partitionsCount = 0;
    /**
     * configured replication factor for this cluster
     *
     * Generated from protobuf field <code>int32 replicationFactor = 4;</code>
     */
    protected $replicationFactor = 0;
    /**
     * gateway version
     *
     * Generated from protobuf field <code>string gatewayVersion = 5;</code>
     */
    protected $gatewayVersion = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Camundity\PhpZeebe\Command\BrokerInfo>|\Google\Protobuf\Internal\RepeatedField $brokers
     *           list of brokers part of this cluster
     *     @type int $clusterSize
     *           how many nodes are in the cluster
     *     @type int $partitionsCount
     *           how many partitions are spread across the cluster
     *     @type int $replicationFactor
     *           configured replication factor for this cluster
     *     @type string $gatewayVersion
     *           gateway version
     * }
     */
    public function __construct($data = NULL) {
        \Camundity\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * list of brokers part of this cluster
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.BrokerInfo brokers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBrokers()
    {
        return $this->brokers;
    }

    /**
     * list of brokers part of this cluster
     *
     * Generated from protobuf field <code>repeated .gateway_protocol.BrokerInfo brokers = 1;</code>
     * @param array<\Camundity\PhpZeebe\Command\BrokerInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBrokers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Camundity\PhpZeebe\Command\BrokerInfo::class);
        $this->brokers = $arr;

        return $this;
    }

    /**
     * how many nodes are in the cluster
     *
     * Generated from protobuf field <code>int32 clusterSize = 2;</code>
     * @return int
     */
    public function getClusterSize()
    {
        return $this->clusterSize;
    }

    /**
     * how many nodes are in the cluster
     *
     * Generated from protobuf field <code>int32 clusterSize = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setClusterSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->clusterSize = $var;

        return $this;
    }

    /**
     * how many partitions are spread across the cluster
     *
     * Generated from protobuf field <code>int32 partitionsCount = 3;</code>
     * @return int
     */
    public function getPartitionsCount()
    {
        return $this->partitionsCount;
    }

    /**
     * how many partitions are spread across the cluster
     *
     * Generated from protobuf field <code>int32 partitionsCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPartitionsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->partitionsCount = $var;

        return $this;
    }

    /**
     * configured replication factor for this cluster
     *
     * Generated from protobuf field <code>int32 replicationFactor = 4;</code>
     * @return int
     */
    public function getReplicationFactor()
    {
        return $this->replicationFactor;
    }

    /**
     * configured replication factor for this cluster
     *
     * Generated from protobuf field <code>int32 replicationFactor = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setReplicationFactor($var)
    {
        GPBUtil::checkInt32($var);
        $this->replicationFactor = $var;

        return $this;
    }

    /**
     * gateway version
     *
     * Generated from protobuf field <code>string gatewayVersion = 5;</code>
     * @return string
     */
    public function getGatewayVersion()
    {
        return $this->gatewayVersion;
    }

    /**
     * gateway version
     *
     * Generated from protobuf field <code>string gatewayVersion = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->gatewayVersion = $var;

        return $this;
    }

}

