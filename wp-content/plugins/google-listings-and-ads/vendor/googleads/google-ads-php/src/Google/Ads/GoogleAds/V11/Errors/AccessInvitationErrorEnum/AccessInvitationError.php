<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/access_invitation_error.proto

namespace Google\Ads\GoogleAds\V11\Errors\AccessInvitationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible AccessInvitation errors.
 *
 * Protobuf type <code>google.ads.googleads.v11.errors.AccessInvitationErrorEnum.AccessInvitationError</code>
 */
class AccessInvitationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The email address is invalid for sending an invitation.
     *
     * Generated from protobuf enum <code>INVALID_EMAIL_ADDRESS = 2;</code>
     */
    const INVALID_EMAIL_ADDRESS = 2;
    /**
     * Email address already has access to this customer.
     *
     * Generated from protobuf enum <code>EMAIL_ADDRESS_ALREADY_HAS_ACCESS = 3;</code>
     */
    const EMAIL_ADDRESS_ALREADY_HAS_ACCESS = 3;
    /**
     * Invalid invitation status for the operation.
     *
     * Generated from protobuf enum <code>INVALID_INVITATION_STATUS = 4;</code>
     */
    const INVALID_INVITATION_STATUS = 4;
    /**
     * Email address cannot be like abc+foo&#64;google.com.
     *
     * Generated from protobuf enum <code>GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED = 5;</code>
     */
    const GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED = 5;
    /**
     * Invalid invitation ID.
     *
     * Generated from protobuf enum <code>INVALID_INVITATION_ID = 6;</code>
     */
    const INVALID_INVITATION_ID = 6;
    /**
     * Email address already has a pending invitation.
     *
     * Generated from protobuf enum <code>EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION = 7;</code>
     */
    const EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION = 7;
    /**
     * Pending invitation limit exceeded for the customer.
     *
     * Generated from protobuf enum <code>PENDING_INVITATIONS_LIMIT_EXCEEDED = 8;</code>
     */
    const PENDING_INVITATIONS_LIMIT_EXCEEDED = 8;
    /**
     * Email address doesn't conform to the email domain policy. Please see
     * https://support.google.com/google-ads/answer/2375456
     *
     * Generated from protobuf enum <code>EMAIL_DOMAIN_POLICY_VIOLATED = 9;</code>
     */
    const EMAIL_DOMAIN_POLICY_VIOLATED = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_EMAIL_ADDRESS => 'INVALID_EMAIL_ADDRESS',
        self::EMAIL_ADDRESS_ALREADY_HAS_ACCESS => 'EMAIL_ADDRESS_ALREADY_HAS_ACCESS',
        self::INVALID_INVITATION_STATUS => 'INVALID_INVITATION_STATUS',
        self::GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED => 'GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED',
        self::INVALID_INVITATION_ID => 'INVALID_INVITATION_ID',
        self::EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION => 'EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION',
        self::PENDING_INVITATIONS_LIMIT_EXCEEDED => 'PENDING_INVITATIONS_LIMIT_EXCEEDED',
        self::EMAIL_DOMAIN_POLICY_VIOLATED => 'EMAIL_DOMAIN_POLICY_VIOLATED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessInvitationError::class, \Google\Ads\GoogleAds\V11\Errors\AccessInvitationErrorEnum_AccessInvitationError::class);

