<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * To express dimension or metric filters.
 * The fields in the same FilterExpression need to be either all dimensions or
 * all metrics.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.FilterExpression</code>
 */
class FilterExpression extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    protected $expr;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\FilterExpressionList $and_group
     *           The FilterExpressions in and_group have an AND relationship.
     *     @type \Google\Analytics\Data\V1beta\FilterExpressionList $or_group
     *           The FilterExpressions in or_group have an OR relationship.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $not_expression
     *           The FilterExpression is NOT of not_expression.
     *     @type \Google\Analytics\Data\V1beta\Filter $filter
     *           A primitive filter.
     *           All fields in filter in same FilterExpression needs to be either all
     *           dimensions or metrics.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * The FilterExpressions in and_group have an AND relationship.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpressionList and_group = 1;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpressionList|null
     */
    public function getAndGroup()
    {
        return $this->readOneof(1);
    }
    public function hasAndGroup()
    {
        return $this->hasOneof(1);
    }
    /**
     * The FilterExpressions in and_group have an AND relationship.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpressionList and_group = 1;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpressionList $var
     * @return $this
     */
    public function setAndGroup($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\FilterExpressionList::class);
        $this->writeOneof(1, $var);
        return $this;
    }
    /**
     * The FilterExpressions in or_group have an OR relationship.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpressionList or_group = 2;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpressionList|null
     */
    public function getOrGroup()
    {
        return $this->readOneof(2);
    }
    public function hasOrGroup()
    {
        return $this->hasOneof(2);
    }
    /**
     * The FilterExpressions in or_group have an OR relationship.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpressionList or_group = 2;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpressionList $var
     * @return $this
     */
    public function setOrGroup($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\FilterExpressionList::class);
        $this->writeOneof(2, $var);
        return $this;
    }
    /**
     * The FilterExpression is NOT of not_expression.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression not_expression = 3;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getNotExpression()
    {
        return $this->readOneof(3);
    }
    public function hasNotExpression()
    {
        return $this->hasOneof(3);
    }
    /**
     * The FilterExpression is NOT of not_expression.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression not_expression = 3;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setNotExpression($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->writeOneof(3, $var);
        return $this;
    }
    /**
     * A primitive filter.
     * All fields in filter in same FilterExpression needs to be either all
     * dimensions or metrics.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Filter filter = 4;</code>
     * @return \Google\Analytics\Data\V1beta\Filter|null
     */
    public function getFilter()
    {
        return $this->readOneof(4);
    }
    public function hasFilter()
    {
        return $this->hasOneof(4);
    }
    /**
     * A primitive filter.
     * All fields in filter in same FilterExpression needs to be either all
     * dimensions or metrics.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Filter filter = 4;</code>
     * @param \Google\Analytics\Data\V1beta\Filter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\Filter::class);
        $this->writeOneof(4, $var);
        return $this;
    }
    /**
     * @return string
     */
    public function getExpr()
    {
        return $this->whichOneof("expr");
    }
}
