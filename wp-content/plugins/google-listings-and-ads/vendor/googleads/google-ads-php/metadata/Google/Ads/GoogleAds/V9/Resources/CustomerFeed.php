<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/customer_feed.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class CustomerFeed
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v9/enums/matching_function_context_type.protogoogle.ads.googleads.v9.enums"�
MatchingFunctionContextTypeEnum"t
MatchingFunctionContextType
UNSPECIFIED 
UNKNOWN
FEED_ITEM_ID
DEVICE_NAME
FEED_ITEM_SET_IDB�
!com.google.ads.googleads.v9.enumsB MatchingFunctionContextTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
>google/ads/googleads/v9/enums/matching_function_operator.protogoogle.ads.googleads.v9.enums"�
MatchingFunctionOperatorEnum"u
MatchingFunctionOperator
UNSPECIFIED 
UNKNOWN
IN
IDENTITY

EQUALS
AND
CONTAINS_ANYB�
!com.google.ads.googleads.v9.enumsBMatchingFunctionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
6google/ads/googleads/v9/common/matching_function.protogoogle.ads.googleads.v9.common>google/ads/googleads/v9/enums/matching_function_operator.protogoogle/api/annotations.proto"�
MatchingFunction
function_string (	H �f
operator (2T.google.ads.googleads.v9.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator>
left_operands (2\'.google.ads.googleads.v9.common.Operand?
right_operands (2\'.google.ads.googleads.v9.common.OperandB
_function_string"�
OperandS
constant_operand (27.google.ads.googleads.v9.common.Operand.ConstantOperandH ^
feed_attribute_operand (2<.google.ads.googleads.v9.common.Operand.FeedAttributeOperandH S
function_operand (27.google.ads.googleads.v9.common.Operand.FunctionOperandH `
request_context_operand (2=.google.ads.googleads.v9.common.Operand.RequestContextOperandH �
ConstantOperand
string_value (	H 

long_value (H 
boolean_value (H 
double_value (H B
constant_operand_valuen
FeedAttributeOperand
feed_id (H �
feed_attribute_id (H�B

_feed_idB
_feed_attribute_id^
FunctionOperandK
matching_function (20.google.ads.googleads.v9.common.MatchingFunction�
RequestContextOperandp
context_type (2Z.google.ads.googleads.v9.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextTypeB
function_argument_operandB�
"com.google.ads.googleads.v9.commonBMatchingFunctionProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/common;common�GAA�Google.Ads.GoogleAds.V9.Common�Google\\Ads\\GoogleAds\\V9\\Common�"Google::Ads::GoogleAds::V9::Commonbproto3
�
4google/ads/googleads/v9/enums/placeholder_type.protogoogle.ads.googleads.v9.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
!com.google.ads.googleads.v9.enumsBPlaceholderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
4google/ads/googleads/v9/enums/feed_link_status.protogoogle.ads.googleads.v9.enums"^
FeedLinkStatusEnum"H
FeedLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBFeedLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
5google/ads/googleads/v9/resources/customer_feed.proto!google.ads.googleads.v9.resources4google/ads/googleads/v9/enums/feed_link_status.proto4google/ads/googleads/v9/enums/placeholder_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerFeedD
resource_name (	B-�A�A\'
%googleads.googleapis.com/CustomerFeed8
feed (	B%�A�A
googleads.googleapis.com/FeedH �]
placeholder_types (2B.google.ads.googleads.v9.enums.PlaceholderTypeEnum.PlaceholderTypeK
matching_function (20.google.ads.googleads.v9.common.MatchingFunctionU
status (2@.google.ads.googleads.v9.enums.FeedLinkStatusEnum.FeedLinkStatusB�A:[�AX
%googleads.googleapis.com/CustomerFeed/customers/{customer_id}/customerFeeds/{feed_id}B
_feedB�
%com.google.ads.googleads.v9.resourcesBCustomerFeedProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

