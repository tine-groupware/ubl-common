<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing LineResponseType
 *
 * ABIE
 *  Line Response. Details
 *  A class to describe responses to a line in a document.
 *  Line Response
 * XSD Type: LineResponseType
 */
class LineResponseType
{
    /**
     * ASBIE
     *  Line Response. Line Reference
     *  A reference to the line being responded to.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\LineReference $lineReference
     */
    private $lineReference = null;

    /**
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @var \UBL21\Common\CommonAggregateComponents\Response[] $response
     */
    private $response = [
        
    ];

    /**
     * Gets as lineReference
     *
     * ASBIE
     *  Line Response. Line Reference
     *  A reference to the line being responded to.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\LineReference
     */
    public function getLineReference()
    {
        return $this->lineReference;
    }

    /**
     * Sets a new lineReference
     *
     * ASBIE
     *  Line Response. Line Reference
     *  A reference to the line being responded to.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\LineReference $lineReference
     * @return self
     */
    public function setLineReference(\UBL21\Common\CommonAggregateComponents\LineReference $lineReference)
    {
        $this->lineReference = $lineReference;
        return $this;
    }

    /**
     * Adds as response
     *
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Response $response
     */
    public function addToResponse(\UBL21\Common\CommonAggregateComponents\Response $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @return \UBL21\Common\CommonAggregateComponents\Response[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * ASBIE
     *  Line Response. Response
     *  A response to the referenced line.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *  Response
     *
     * @param \UBL21\Common\CommonAggregateComponents\Response[] $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;
        return $this;
    }
}

