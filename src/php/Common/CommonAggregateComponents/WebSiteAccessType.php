<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing WebSiteAccessType
 *
 * ABIE
 *  Web Site Access. Details
 *  A class to describe access to a web site.
 *  Web Site Access
 * XSD Type: WebSiteAccessType
 */
class WebSiteAccessType
{
    /**
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @var \UBL21\Common\CommonBasicComponents\Password $password
     */
    private $password = null;

    /**
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @var \UBL21\Common\CommonBasicComponents\Login $login
     */
    private $login = null;

    /**
     * Gets as uRI
     *
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\UBL21\Common\CommonBasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as password
     *
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @return \UBL21\Common\CommonBasicComponents\Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @param \UBL21\Common\CommonBasicComponents\Password $password
     * @return self
     */
    public function setPassword(\UBL21\Common\CommonBasicComponents\Password $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as login
     *
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @return \UBL21\Common\CommonBasicComponents\Login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @param \UBL21\Common\CommonBasicComponents\Login $login
     * @return self
     */
    public function setLogin(\UBL21\Common\CommonBasicComponents\Login $login)
    {
        $this->login = $login;
        return $this;
    }
}

