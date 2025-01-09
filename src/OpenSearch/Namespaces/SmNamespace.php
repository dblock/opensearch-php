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

namespace OpenSearch\Namespaces;

/**
 * Class SmNamespace
 *
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class SmNamespace extends AbstractNamespace
{
    /**
     * Creates a snapshot management policy.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function createPolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\CreatePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Deletes a snapshot management policy.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deletePolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\DeletePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);

        return $this->performRequest($endpoint);
    }

    /**
     * Explains the state of the snapshot management policy.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function explainPolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\ExplainPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);

        return $this->performRequest($endpoint);
    }

    /**
     * Retrieves all snapshot management policies with optional pagination and filtering.
     *
     * $params['from']        = (integer) The starting index (default: 0)
     * $params['queryString'] = (string) A query string to filter policies.
     * $params['size']        = (integer) The number of policies to return.
     * $params['sortField']   = (string) The field to sort on.
     * $params['sortOrder']   = (enum) The order of sorting. (Options = asc,desc) (Default = asc)
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getPolicies(array $params = [])
    {
        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\GetPolicies::class);
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Retrieves a specific snapshot management policy by name.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getPolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\GetPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);

        return $this->performRequest($endpoint);
    }

    /**
     * Starts a snapshot management policy.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function startPolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\StartPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);

        return $this->performRequest($endpoint);
    }

    /**
     * Stops a snapshot management policy.
     *
     * $params['policy_name'] = (string) The name of the snapshot management policy.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function stopPolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\StopPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);

        return $this->performRequest($endpoint);
    }

    /**
     * Updates an existing snapshot management policy. Requires `if_seq_no` and `if_primary_term`.
     *
     * $params['policy_name']     = (string) The name of the snapshot management policy.
     * $params['if_primary_term'] = (integer) The primary term of the policy to update.
     * $params['if_seq_no']       = (integer) The sequence number of the policy to update.
     * $params['pretty']          = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']           = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace']     = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']          = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']     = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function updatePolicy(array $params = [])
    {
        $policy_name = $this->extractArgument($params, 'policy_name');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Sm\UpdatePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyName($policy_name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

}
