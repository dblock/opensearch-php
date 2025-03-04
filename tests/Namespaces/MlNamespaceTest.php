<?php

declare(strict_types=1);

namespace OpenSearch\Tests\Namespaces;

use OpenSearch\EndpointFactoryInterface;
use OpenSearch\Endpoints\Ml\CreateConnector;
use OpenSearch\Endpoints\Ml\DeleteConnector;
use OpenSearch\Endpoints\Ml\DeleteModel;
use OpenSearch\Endpoints\Ml\DeleteModelGroup;
use OpenSearch\Endpoints\Ml\DeployModel;
use OpenSearch\Endpoints\Ml\GetConnector;
use OpenSearch\Endpoints\Ml\GetConnectors;
use OpenSearch\Endpoints\Ml\GetModel;
use OpenSearch\Endpoints\Ml\GetModelGroups;
use OpenSearch\Endpoints\Ml\GetTask;
use OpenSearch\Endpoints\Ml\Predict;
use OpenSearch\Endpoints\Ml\RegisterModel;
use OpenSearch\Endpoints\Ml\RegisterModelGroup;
use OpenSearch\Endpoints\Ml\SearchModels;
use OpenSearch\Endpoints\Ml\UndeployModel;
use OpenSearch\Endpoints\Ml\UpdateModelGroup;
use OpenSearch\Namespaces\MlNamespace;
use OpenSearch\TransportInterface;
use PHPUnit\Framework\TestCase;

/**
 * Copyright OpenSearch Contributors
 *  SPDX-License-Identifier: Apache-2.0
 *
 *  The OpenSearch Contributors require contributions made to
 *  this file be licensed under the Apache-2.0 license or a
 *  compatible open source license.
 */
class MlNamespaceTest extends TestCase
{
    public function testCreatingConnector(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new CreateConnector());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/connectors/_create', [], [
                'foo' => 'bar',
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->createConnector([
            'body' => [
                'foo' => 'bar',
            ],
        ]);
    }

    public function testGetConnector(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new GetConnector());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('GET', '/_plugins/_ml/connectors/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->getConnector([
            'id' => 'foobar',
            'connector_id' => 'foobar'
        ]);
    }

    public function testGetConnectors(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new GetConnectors());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/connectors/_search', [], [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->getConnectors([
            'body' => [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ],
        ]);
    }

    public function testDeleteConnector(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new DeleteConnector());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('DELETE', '/_plugins/_ml/connectors/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->deleteConnector([
            'connector_id' => 'foobar'
        ]);
    }

    public function testRegisterModelGroup(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new RegisterModelGroup());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/model_groups/_register', [], [
                'foo' => 'bar',
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->registerModelGroup([
            'body' => [
                'foo' => 'bar',
            ],
        ]);
    }

    public function testGetModelGroups(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new GetModelGroups());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/model_groups/_search', [], [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->getModelGroups([
            'body' => [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ],
        ]);
    }

    public function testUpdateModelGroup(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new UpdateModelGroup());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('PUT', '/_plugins/_ml/model_groups/foobar', [], [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->updateModelGroup([
            'id' => 'foobar',
            'model_group_id' => 'foobar',
            'body' => [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ],
        ]);
    }

    public function testDeleteModelGroup(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new DeleteModelGroup());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('DELETE', '/_plugins/_ml/model_groups/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->deleteModelGroup([
            'id' => 'foobar'
        ]);
    }

    public function testRegisterModel(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new RegisterModel());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/models/_register', [], [
                'foo' => 'bar',
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->registerModel([
            'body' => [
                'foo' => 'bar',
            ],
        ]);
    }

    public function testGetModel(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new GetModel());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('GET', '/_plugins/_ml/models/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->getModel([
            'id' => 'foobar',
            'model_id' => 'foobar'
        ]);
    }

    public function testSearchModels(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new SearchModels());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/models/_search', [], [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->searchModels([
            'body' => [
                'query' => [
                    'match_all' => new \StdClass(),
                ],
                'size' => 1000,
            ],
        ]);
    }

    public function testDeployModel(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new DeployModel());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/models/foobar/_deploy', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->deployModel([
            'model_id' => 'foobar',
        ]);
    }

    public function testUnDeployModel(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new UndeployModel());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/models/foobar/_undeploy', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->undeployModel([
            'model_id' => 'foobar',
        ]);
    }

    public function testDeleteModel(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new DeleteModel());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('DELETE', '/_plugins/_ml/models/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->deleteModel([
            'id' => 'foobar',
        ]);
    }

    public function testPredict(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new Predict());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('POST', '/_plugins/_ml/_predict/algo/model', [], [
                'foo' => 'bar',
            ])
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->predict([
            'id' => 'foobar',
            'body' => [
                'foo' => 'bar',
            ],
            'algorithm_name' => 'algo',
            'model_id' => 'model',
        ]);
    }

    public function testGetTask(): void
    {
        $endpointFactory = $this->createMock(EndpointFactoryInterface::class);
        $endpointFactory->method('getEndpoint')
            ->willReturn(new GetTask());

        $transport = $this->createMock(TransportInterface::class);

        $transport->method('sendRequest')
            ->with('GET', '/_plugins/_ml/tasks/foobar', [], null)
            ->willReturn([]);

        (new MlNamespace($transport, $endpointFactory))->getTask([
            'id' => 'foobar',
        ]);
    }
}
