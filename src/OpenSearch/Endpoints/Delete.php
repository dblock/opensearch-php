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

namespace OpenSearch\Endpoints;

use OpenSearch\Common\Exceptions\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class Delete extends AbstractEndpoint
{
    public function getURI(): string
    {
        if (!isset($this->id) || $this->id === '') {
            throw new RuntimeException('id is required for delete');
        }
        $id = $this->id;
        if (!isset($this->index) || $this->index === '') {
            throw new RuntimeException('index is required for delete');
        }
        $index = $this->index;

        return "/$index/_doc/$id";
    }

    public function getParamWhitelist(): array
    {
        return [
            'if_primary_term',
            'if_seq_no',
            'refresh',
            'routing',
            'timeout',
            'version',
            'version_type',
            'wait_for_active_shards',
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
}
