<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TelecommunicationsServiceType
 *
 * ABIE
 *  Telecommunications Service. Details
 *  A class to describe a telecommunications service (e.g., a telephone call or a video on demand service).
 *  Telecommunications Service
 * XSD Type: TelecommunicationsServiceType
 */
class TelecommunicationsServiceType
{
    /**
     * BBIE
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @var \DateTime $callDate
     */
    private $callDate = null;

    /**
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @var \DateTime $callTime
     */
    private $callTime = null;

    /**
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @var \UBL21\Common\CommonBasicComponents\ServiceNumberCalled $serviceNumberCalled
     */
    private $serviceNumberCalled = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     */
    private $telecommunicationsServiceCategory = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     */
    private $telecommunicationsServiceCategoryCode = null;

    /**
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @var \UBL21\Common\CommonBasicComponents\MovieTitle $movieTitle
     */
    private $movieTitle = null;

    /**
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\RoamingPartnerName $roamingPartnerName
     */
    private $roamingPartnerName = null;

    /**
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PayPerView $payPerView
     */
    private $payPerView = null;

    /**
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall
     */
    private $telecommunicationsServiceCall = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     */
    private $telecommunicationsServiceCallCode = null;

    /**
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CallBaseAmount $callBaseAmount
     */
    private $callBaseAmount = null;

    /**
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @var \UBL21\Common\CommonBasicComponents\CallExtensionAmount $callExtensionAmount
     */
    private $callExtensionAmount = null;

    /**
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @var \UBL21\Common\CommonAggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @var \UBL21\Common\CommonAggregateComponents\Country $country
     */
    private $country = null;

    /**
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \UBL21\Common\CommonAggregateComponents\ExchangeRate[] $exchangeRate
     */
    private $exchangeRate = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \UBL21\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @var \UBL21\Common\CommonAggregateComponents\CallDuty[] $callDuty
     */
    private $callDuty = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @var \UBL21\Common\CommonAggregateComponents\TimeDuty[] $timeDuty
     */
    private $timeDuty = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
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
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
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
     * Gets as callDate
     *
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @return \DateTime
     */
    public function getCallDate()
    {
        return $this->callDate;
    }

    /**
     * Sets a new callDate
     *
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @param \DateTime $callDate
     * @return self
     */
    public function setCallDate(\DateTime $callDate)
    {
        $this->callDate = $callDate;
        return $this;
    }

    /**
     * Gets as callTime
     *
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @return \DateTime
     */
    public function getCallTime()
    {
        return $this->callTime;
    }

    /**
     * Sets a new callTime
     *
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @param \DateTime $callTime
     * @return self
     */
    public function setCallTime(\DateTime $callTime)
    {
        $this->callTime = $callTime;
        return $this;
    }

    /**
     * Gets as serviceNumberCalled
     *
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @return \UBL21\Common\CommonBasicComponents\ServiceNumberCalled
     */
    public function getServiceNumberCalled()
    {
        return $this->serviceNumberCalled;
    }

    /**
     * Sets a new serviceNumberCalled
     *
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @param \UBL21\Common\CommonBasicComponents\ServiceNumberCalled $serviceNumberCalled
     * @return self
     */
    public function setServiceNumberCalled(\UBL21\Common\CommonBasicComponents\ServiceNumberCalled $serviceNumberCalled)
    {
        $this->serviceNumberCalled = $serviceNumberCalled;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategory
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategory
     */
    public function getTelecommunicationsServiceCategory()
    {
        return $this->telecommunicationsServiceCategory;
    }

    /**
     * Sets a new telecommunicationsServiceCategory
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     * @return self
     */
    public function setTelecommunicationsServiceCategory(?\UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory = null)
    {
        $this->telecommunicationsServiceCategory = $telecommunicationsServiceCategory;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategoryCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategoryCode
     */
    public function getTelecommunicationsServiceCategoryCode()
    {
        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * Sets a new telecommunicationsServiceCategoryCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     * @return self
     */
    public function setTelecommunicationsServiceCategoryCode(?\UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode = null)
    {
        $this->telecommunicationsServiceCategoryCode = $telecommunicationsServiceCategoryCode;
        return $this;
    }

    /**
     * Gets as movieTitle
     *
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @return \UBL21\Common\CommonBasicComponents\MovieTitle
     */
    public function getMovieTitle()
    {
        return $this->movieTitle;
    }

    /**
     * Sets a new movieTitle
     *
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @param \UBL21\Common\CommonBasicComponents\MovieTitle $movieTitle
     * @return self
     */
    public function setMovieTitle(?\UBL21\Common\CommonBasicComponents\MovieTitle $movieTitle = null)
    {
        $this->movieTitle = $movieTitle;
        return $this;
    }

    /**
     * Gets as roamingPartnerName
     *
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\RoamingPartnerName
     */
    public function getRoamingPartnerName()
    {
        return $this->roamingPartnerName;
    }

    /**
     * Sets a new roamingPartnerName
     *
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\RoamingPartnerName $roamingPartnerName
     * @return self
     */
    public function setRoamingPartnerName(?\UBL21\Common\CommonBasicComponents\RoamingPartnerName $roamingPartnerName = null)
    {
        $this->roamingPartnerName = $roamingPartnerName;
        return $this;
    }

    /**
     * Gets as payPerView
     *
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\PayPerView
     */
    public function getPayPerView()
    {
        return $this->payPerView;
    }

    /**
     * Sets a new payPerView
     *
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\PayPerView $payPerView
     * @return self
     */
    public function setPayPerView(?\UBL21\Common\CommonBasicComponents\PayPerView $payPerView = null)
    {
        $this->payPerView = $payPerView;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @return \UBL21\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @param \UBL21\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL21\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCall
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCall
     */
    public function getTelecommunicationsServiceCall()
    {
        return $this->telecommunicationsServiceCall;
    }

    /**
     * Sets a new telecommunicationsServiceCall
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall
     * @return self
     */
    public function setTelecommunicationsServiceCall(?\UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall = null)
    {
        $this->telecommunicationsServiceCall = $telecommunicationsServiceCall;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCallCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCallCode
     */
    public function getTelecommunicationsServiceCallCode()
    {
        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * Sets a new telecommunicationsServiceCallCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     * @return self
     */
    public function setTelecommunicationsServiceCallCode(?\UBL21\Common\CommonBasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode = null)
    {
        $this->telecommunicationsServiceCallCode = $telecommunicationsServiceCallCode;
        return $this;
    }

    /**
     * Gets as callBaseAmount
     *
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CallBaseAmount
     */
    public function getCallBaseAmount()
    {
        return $this->callBaseAmount;
    }

    /**
     * Sets a new callBaseAmount
     *
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CallBaseAmount $callBaseAmount
     * @return self
     */
    public function setCallBaseAmount(?\UBL21\Common\CommonBasicComponents\CallBaseAmount $callBaseAmount = null)
    {
        $this->callBaseAmount = $callBaseAmount;
        return $this;
    }

    /**
     * Gets as callExtensionAmount
     *
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @return \UBL21\Common\CommonBasicComponents\CallExtensionAmount
     */
    public function getCallExtensionAmount()
    {
        return $this->callExtensionAmount;
    }

    /**
     * Sets a new callExtensionAmount
     *
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @param \UBL21\Common\CommonBasicComponents\CallExtensionAmount $callExtensionAmount
     * @return self
     */
    public function setCallExtensionAmount(?\UBL21\Common\CommonBasicComponents\CallExtensionAmount $callExtensionAmount = null)
    {
        $this->callExtensionAmount = $callExtensionAmount;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @return \UBL21\Common\CommonAggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @param \UBL21\Common\CommonAggregateComponents\Price $price
     * @return self
     */
    public function setPrice(?\UBL21\Common\CommonAggregateComponents\Price $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @return \UBL21\Common\CommonAggregateComponents\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @param \UBL21\Common\CommonAggregateComponents\Country $country
     * @return self
     */
    public function setCountry(?\UBL21\Common\CommonAggregateComponents\Country $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ExchangeRate $exchangeRate
     */
    public function addToExchangeRate(\UBL21\Common\CommonAggregateComponents\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * isset exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \UBL21\Common\CommonAggregateComponents\ExchangeRate[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \UBL21\Common\CommonAggregateComponents\ExchangeRate[] $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\UBL21\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \UBL21\Common\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \UBL21\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\CallDuty $callDuty
     */
    public function addToCallDuty(\UBL21\Common\CommonAggregateComponents\CallDuty $callDuty)
    {
        $this->callDuty[] = $callDuty;
        return $this;
    }

    /**
     * isset callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCallDuty($index)
    {
        return isset($this->callDuty[$index]);
    }

    /**
     * unset callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCallDuty($index)
    {
        unset($this->callDuty[$index]);
    }

    /**
     * Gets as callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @return \UBL21\Common\CommonAggregateComponents\CallDuty[]
     */
    public function getCallDuty()
    {
        return $this->callDuty;
    }

    /**
     * Sets a new callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param \UBL21\Common\CommonAggregateComponents\CallDuty[] $callDuty
     * @return self
     */
    public function setCallDuty(array $callDuty = null)
    {
        $this->callDuty = $callDuty;
        return $this;
    }

    /**
     * Adds as timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TimeDuty $timeDuty
     */
    public function addToTimeDuty(\UBL21\Common\CommonAggregateComponents\TimeDuty $timeDuty)
    {
        $this->timeDuty[] = $timeDuty;
        return $this;
    }

    /**
     * isset timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeDuty($index)
    {
        return isset($this->timeDuty[$index]);
    }

    /**
     * unset timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeDuty($index)
    {
        unset($this->timeDuty[$index]);
    }

    /**
     * Gets as timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @return \UBL21\Common\CommonAggregateComponents\TimeDuty[]
     */
    public function getTimeDuty()
    {
        return $this->timeDuty;
    }

    /**
     * Sets a new timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param \UBL21\Common\CommonAggregateComponents\TimeDuty[] $timeDuty
     * @return self
     */
    public function setTimeDuty(array $timeDuty = null)
    {
        $this->timeDuty = $timeDuty;
        return $this;
    }
}

