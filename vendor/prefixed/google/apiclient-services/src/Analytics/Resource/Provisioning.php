<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Analytics\Resource;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Analytics\AccountTicket;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Analytics\AccountTreeRequest;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Analytics\AccountTreeResponse;
/**
 * The "provisioning" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google\Service\Analytics(...);
 *   $provisioning = $analyticsService->provisioning;
 *  </code>
 */
class Provisioning extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Resource
{
    /**
     * Creates an account ticket. (provisioning.createAccountTicket)
     *
     * @param AccountTicket $postBody
     * @param array $optParams Optional parameters.
     * @return AccountTicket
     */
    public function createAccountTicket(AccountTicket $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('createAccountTicket', [$params], AccountTicket::class);
    }
    /**
     * Provision account. (provisioning.createAccountTree)
     *
     * @param AccountTreeRequest $postBody
     * @param array $optParams Optional parameters.
     * @return AccountTreeResponse
     */
    public function createAccountTree(AccountTreeRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('createAccountTree', [$params], AccountTreeResponse::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Matomo\Dependencies\GoogleAnalyticsImporter\Google\Service\Analytics\Resource\Provisioning::class, 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google_Service_Analytics_Resource_Provisioning');
