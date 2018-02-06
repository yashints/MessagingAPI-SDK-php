<?php
/**
 * Status
 *
 * PHP version 5
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Telstra Messaging API
 *
 * The Telstra SMS Messaging API allows your applications to send and receive SMS text messages from Australia's leading network operator.  It also allows your application to track the delivery status of both sent and received SMS messages.
 *
 * OpenAPI spec version: 2.2.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Telstra_Messaging\Model;
use \Telstra_Messaging\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Status
{
    /**
     * Possible values of this enum
     */
    const PEND = 'PEND';
    const SENT = 'SENT';
    const DELIVRD = 'DELIVRD';
    const EXPIRED = 'EXPIRED';
    const DELETED = 'DELETED';
    const UNDVBL = 'UNDVBL';
    const REJECTED = 'REJECTED';
    const READ = 'READ';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PEND,
            self::SENT,
            self::DELIVRD,
            self::EXPIRED,
            self::DELETED,
            self::UNDVBL,
            self::REJECTED,
            self::READ,
        ];
    }
}


