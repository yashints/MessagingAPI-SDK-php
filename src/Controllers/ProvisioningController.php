<?php
/*
 * TelstraMessagingAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace TelstraMessagingAPILib\Controllers;

use TelstraMessagingAPILib\APIException;
use TelstraMessagingAPILib\APIHelper;
use TelstraMessagingAPILib\Configuration;
use TelstraMessagingAPILib\Models;
use TelstraMessagingAPILib\Exceptions;
use TelstraMessagingAPILib\Http\HttpRequest;
use TelstraMessagingAPILib\Http\HttpResponse;
use TelstraMessagingAPILib\Http\HttpMethod;
use TelstraMessagingAPILib\Http\HttpContext;
use TelstraMessagingAPILib\OAuthManager;
use TelstraMessagingAPILib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ProvisioningController extends BaseController
{
    /**
     * @var ProvisioningController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ProvisioningController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Delete Subscription
     *
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteSubscription()
    {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/messages/provisioning/subscriptions';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or missing request parameters',
                $_httpContext
            );
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or no credentials passed in the request',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Authorization credentials passed and accepted but account does not have permission',
                $_httpContext
            );
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorErrorError62ErrorException('The requested URI does not exist', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'An internal error occurred when processing the request',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Create Subscription
     *
     * @param Models\ProvisionNumberRequest $body A JSON payload containing the required attributes
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSubscription(
        $body
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/messages/provisioning/subscriptions';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or missing request parameters',
                $_httpContext
            );
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or no credentials passed in the request',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Authorization credentials passed and accepted but account does not have permission',
                $_httpContext
            );
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorErrorError62ErrorException('The requested URI does not exist', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'An internal error occurred when processing the request',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'TelstraMessagingAPILib\\Models\\ProvisionNumberResponse');
    }

    /**
     * Get Subscription
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSubscription()
    {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/messages/provisioning/subscriptions';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or missing request parameters',
                $_httpContext
            );
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Invalid or no credentials passed in the request',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'Authorization credentials passed and accepted but account does not have permission',
                $_httpContext
            );
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorErrorError62ErrorException('The requested URI does not exist', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorErrorError62ErrorException(
                'An internal error occurred when processing the request',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'TelstraMessagingAPILib\\Models\\ProvisionNumberResponse');
    }
}