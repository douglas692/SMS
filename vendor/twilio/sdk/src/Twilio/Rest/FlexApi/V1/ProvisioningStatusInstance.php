<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $status
 * @property string|null $url
 */
class ProvisioningStatusInstance extends InstanceResource
{
    /**
     * Initialize the ProvisioningStatusInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'status' => Values::array_get($payload, 'status'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = [];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ProvisioningStatusContext Context for this ProvisioningStatusInstance
     */
    protected function proxy(): ProvisioningStatusContext
    {
        if (!$this->context) {
            $this->context = new ProvisioningStatusContext(
                $this->version
            );
        }

        return $this->context;
    }

    /**
     * Fetch the ProvisioningStatusInstance
     *
     * @return ProvisioningStatusInstance Fetched ProvisioningStatusInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ProvisioningStatusInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.FlexApi.V1.ProvisioningStatusInstance ' . \implode(' ', $context) . ']';
    }
}
