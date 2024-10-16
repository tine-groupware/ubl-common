<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ClauseType
 *
 * ABIE
 *  Clause. Details
 *  A class to define a clause (a distinct article or provision) in a contract, treaty, will, or other formal or legal written document requiring compliance.
 *  Clause
 * XSD Type: ClauseType
 */
class ClauseType
{
    /**
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Content[] $content
     */
    private $content = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\UBL21\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Content $content
     */
    public function addToContent(\UBL21\Common\CommonBasicComponents\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Content[] $content
     * @return self
     */
    public function setContent(array $content = null)
    {
        $this->content = $content;
        return $this;
    }
}

