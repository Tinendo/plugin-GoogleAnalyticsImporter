<?php

namespace Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp\Exception;

/**
 * Exception when a server error is encountered (5xx codes)
 */
class ServerException extends \Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp\Exception\BadResponseException
{
}
