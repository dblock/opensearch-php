<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints\Security;

use OpenSearch\Common\Exceptions\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class DeleteTenant extends AbstractEndpoint
{
    protected $tenant;

    public function getURI(): string
    {
        if (!isset($this->tenant) || $this->tenant === '') {
            throw new RuntimeException('tenant is required for delete_tenant');
        }
        $tenant = $this->tenant;

        return "/_plugins/_security/api/tenants/$tenant";
    }

    public function getParamWhitelist(): array
    {
        return [
            'pretty',
            'human',
            'error_trace',
            'source',
            'filter_path'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setTenant($tenant): static
    {
        if (is_null($tenant)) {
            return $this;
        }
        $this->tenant = $tenant;

        return $this;
    }
}
