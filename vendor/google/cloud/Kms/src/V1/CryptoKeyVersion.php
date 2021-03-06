<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents an individual cryptographic key, and the
 * associated key material.
 * It can be used for cryptographic operations either directly, or via its
 * parent [CryptoKey][google.cloud.kms.v1.CryptoKey], in which case the server will choose the appropriate
 * version for the operation.
 * For security reasons, the raw cryptographic key material represented by a
 * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] can never be viewed or exported. It can only be used to
 * encrypt or decrypt data when an authorized user or application invokes Cloud
 * KMS.
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CryptoKeyVersion</code>
 */
class CryptoKeyVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The current state of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     */
    private $state = 0;
    /**
     * Output only. The time at which this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    private $create_time = null;
    /**
     * Output only. The time this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is scheduled
     * for destruction. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5;</code>
     */
    private $destroy_time = null;
    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6;</code>
     */
    private $destroy_event_time = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * Output only. The resource name for this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The current state of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKeyVersion_CryptoKeyVersionState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time at which this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The time at which this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is scheduled
     * for destruction. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDestroyTime()
    {
        return $this->destroy_time;
    }

    /**
     * Output only. The time this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is scheduled
     * for destruction. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_time = $var;

        return $this;
    }

    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDestroyEventTime()
    {
        return $this->destroy_event_time;
    }

    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_event_time = $var;

        return $this;
    }

}

