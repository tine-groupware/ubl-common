<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing SPUserNoticeType
 *
 *
 * XSD Type: SPUserNoticeType
 */
class SPUserNoticeType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\NoticeReferenceType $noticeRef
     */
    private $noticeRef = null;

    /**
     * @var string $explicitText
     */
    private $explicitText = null;

    /**
     * Gets as noticeRef
     *
     * @return \UBL21\Common\UriEtsi\V132\NoticeReferenceType
     */
    public function getNoticeRef()
    {
        return $this->noticeRef;
    }

    /**
     * Sets a new noticeRef
     *
     * @param \UBL21\Common\UriEtsi\V132\NoticeReferenceType $noticeRef
     * @return self
     */
    public function setNoticeRef(?\UBL21\Common\UriEtsi\V132\NoticeReferenceType $noticeRef = null)
    {
        $this->noticeRef = $noticeRef;
        return $this;
    }

    /**
     * Gets as explicitText
     *
     * @return string
     */
    public function getExplicitText()
    {
        return $this->explicitText;
    }

    /**
     * Sets a new explicitText
     *
     * @param string $explicitText
     * @return self
     */
    public function setExplicitText($explicitText)
    {
        $this->explicitText = $explicitText;
        return $this;
    }
}

