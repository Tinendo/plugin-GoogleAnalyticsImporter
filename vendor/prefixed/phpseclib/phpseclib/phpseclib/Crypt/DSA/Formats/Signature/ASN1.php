<?php

/**
 * ASN1 Signature Handler
 *
 * PHP version 5
 *
 * Handles signatures in the format described in
 * https://tools.ietf.org/html/rfc3279#section-2.2.2
 *
 * @category  Crypt
 * @package   Common
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\Crypt\DSA\Formats\Signature;

use Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1 as Encoder;
use Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\File\ASN1\Maps;
use Matomo\Dependencies\GoogleAnalyticsImporter\phpseclib3\Math\BigInteger;
/**
 * ASN1 Signature Handler
 *
 * @package Common
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class ASN1
{
    /**
     * Loads a signature
     *
     * @access public
     * @param string $sig
     * @return array|bool
     */
    public static function load($sig)
    {
        if (!\is_string($sig)) {
            return \false;
        }
        $decoded = Encoder::decodeBER($sig);
        if (empty($decoded)) {
            return \false;
        }
        $components = Encoder::asn1map($decoded[0], Maps\DssSigValue::MAP);
        return $components;
    }
    /**
     * Returns a signature in the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $r
     * @param \phpseclib3\Math\BigInteger $s
     * @return string
     */
    public static function save(BigInteger $r, BigInteger $s)
    {
        return Encoder::encodeDER(\compact('r', 's'), Maps\DssSigValue::MAP);
    }
}
