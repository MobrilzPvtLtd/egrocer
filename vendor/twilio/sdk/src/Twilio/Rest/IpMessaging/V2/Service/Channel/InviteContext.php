<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Ip_messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\IpMessaging\V2\Service\Channel;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class InviteContext extends InstanceContext
    {
    /**
     * Initialize the InviteContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid 
     * @param string $channelSid 
     * @param string $sid 
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $channelSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'channelSid' =>
            $channelSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Channels/' . \rawurlencode($channelSid)
        .'/Invites/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the InviteInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }


    /**
     * Fetch the InviteInstance
     *
     * @return InviteInstance Fetched InviteInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): InviteInstance
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->fetch('GET', $this->uri, [], [], $headers);

        return new InviteInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.IpMessaging.V2.InviteContext ' . \implode(' ', $context) . ']';
    }
}