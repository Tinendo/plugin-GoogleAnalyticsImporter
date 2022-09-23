<?php

/**
 * CertificationRequest
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1\Maps;

use Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1;
/**
 * CertificationRequest
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class CertificationRequest
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['certificationRequestInfo' => \Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1\Maps\CertificationRequestInfo::MAP, 'signatureAlgorithm' => \Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1\Maps\AlgorithmIdentifier::MAP, 'signature' => ['type' => ASN1::TYPE_BIT_STRING]]];
}
