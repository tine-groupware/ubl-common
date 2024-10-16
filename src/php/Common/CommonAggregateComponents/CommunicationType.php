<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  A class to describe a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{
    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \UBL21\Common\CommonBasicComponents\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \UBL21\Common\CommonBasicComponents\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @var \UBL21\Common\CommonBasicComponents\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \UBL21\Common\CommonBasicComponents\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \UBL21\Common\CommonBasicComponents\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(?\UBL21\Common\CommonBasicComponents\ChannelCode $channelCode = null)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \UBL21\Common\CommonBasicComponents\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \UBL21\Common\CommonBasicComponents\Channel $channel
     * @return self
     */
    public function setChannel(?\UBL21\Common\CommonBasicComponents\Channel $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @return \UBL21\Common\CommonBasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @param \UBL21\Common\CommonBasicComponents\Value $value
     * @return self
     */
    public function setValue(?\UBL21\Common\CommonBasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }
}

