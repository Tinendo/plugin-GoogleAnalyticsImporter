<?php

namespace Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp;

use Matomo\Dependencies\GoogleAnalyticsImporter\Psr\Http\Message\MessageInterface;
final class BodySummarizer implements \Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp\BodySummarizerInterface
{
    /**
     * @var int|null
     */
    private $truncateAt;
    public function __construct(int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message) : ?string
    {
        return $this->truncateAt === null ? \Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp\Psr7\Message::bodySummary($message) : \Matomo\Dependencies\GoogleAnalyticsImporter\GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
