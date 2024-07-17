<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for listing Adaptive MT sentences from a Dataset/File.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ListAdaptiveMtSentencesRequest</code>
 */
class ListAdaptiveMtSentencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project from which to list the Adaptive
     * MT files. The following format lists all sentences under a file.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
     * The following format lists all sentences within a dataset.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * ListAdaptiveMtSentencesRequest.next_page_token returned from the
     * previous call to `ListTranslationMemories` method. The first page is
     * returned if `page_token` is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. The resource name of the project from which to list the Adaptive
     *                       MT files. The following format lists all sentences under a file.
     *                       `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
     *                       The following format lists all sentences within a dataset.
     *                       `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
     *                       Please see {@see TranslationServiceClient::adaptiveMtFileName()} for help formatting this field.
     *
     * @return \Google\Cloud\Translate\V3\ListAdaptiveMtSentencesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the project from which to list the Adaptive
     *           MT files. The following format lists all sentences under a file.
     *           `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
     *           The following format lists all sentences within a dataset.
     *           `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
     *     @type int $page_size
     *     @type string $page_token
     *           A token identifying a page of results the server should return.
     *           Typically, this is the value of
     *           ListAdaptiveMtSentencesRequest.next_page_token returned from the
     *           previous call to `ListTranslationMemories` method. The first page is
     *           returned if `page_token` is empty or missing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project from which to list the Adaptive
     * MT files. The following format lists all sentences under a file.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
     * The following format lists all sentences within a dataset.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the project from which to list the Adaptive
     * MT files. The following format lists all sentences under a file.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
     * The following format lists all sentences within a dataset.
     * `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * ListAdaptiveMtSentencesRequest.next_page_token returned from the
     * previous call to `ListTranslationMemories` method. The first page is
     * returned if `page_token` is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * ListAdaptiveMtSentencesRequest.next_page_token returned from the
     * previous call to `ListTranslationMemories` method. The first page is
     * returned if `page_token` is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
