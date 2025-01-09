<?php

declare(strict_types=1);

/**
 * Copyright OpenSearch Contributors
 * SPDX-License-Identifier: Apache-2.0
 *
 * OpenSearch PHP client
 *
 * @link      https://github.com/opensearch-project/opensearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

namespace OpenSearch\Endpoints\Indices;

use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class SimulateTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;
        if (isset($name)) {
            return "/_index_template/_simulate/$name";
        }
        return "/_index_template/_simulate";
    }

    public function getParamWhitelist(): array
    {
        return [
            'cause',
            'cluster_manager_timeout',
            'create',
            'master_timeout',
            'pretty',
            'human',
            'error_trace',
            'source',
            'filter_path'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): static
    {
        if (is_null($body)) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setName($name): static
    {
        if (is_null($name)) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }

    protected function getParamDeprecation(): array
    {
        return ['master_timeout' => 'cluster_manager_timeout'];
    }
}
