<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Community\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.ResolveIncidentRequest</code>
 */
class ResolveIncidentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the unique ID of the incident to resolve
     *
     * Generated from protobuf field <code>int64 incidentKey = 1;</code>
     */
    protected $incidentKey = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $incidentKey
     *           the unique ID of the incident to resolve
     * }
     */
    public function __construct($data = NULL) {
        \Community\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the unique ID of the incident to resolve
     *
     * Generated from protobuf field <code>int64 incidentKey = 1;</code>
     * @return int|string
     */
    public function getIncidentKey()
    {
        return $this->incidentKey;
    }

    /**
     * the unique ID of the incident to resolve
     *
     * Generated from protobuf field <code>int64 incidentKey = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIncidentKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->incidentKey = $var;

        return $this;
    }

}
