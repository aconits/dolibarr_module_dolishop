<?php
/**
 * SalesOrderItemRepositoryV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise Edition 2.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * SalesOrderItemRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderItemRepositoryV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGet
     *
     * @param  int $id The order item ID. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SalesDataOrderItemInterface
     */
    public function salesOrderItemRepositoryV1GetGet($id)
    {
        list($response) = $this->salesOrderItemRepositoryV1GetGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGetWithHttpInfo
     *
     * @param  int $id The order item ID. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SalesDataOrderItemInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderItemRepositoryV1GetGetWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\SalesDataOrderItemInterface';
        $request = $this->salesOrderItemRepositoryV1GetGetRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SalesDataOrderItemInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGetAsync
     *
     * 
     *
     * @param  int $id The order item ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderItemRepositoryV1GetGetAsync($id)
    {
        return $this->salesOrderItemRepositoryV1GetGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $id The order item ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderItemRepositoryV1GetGetAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\SalesDataOrderItemInterface';
        $request = $this->salesOrderItemRepositoryV1GetGetRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderItemRepositoryV1GetGet'
     *
     * @param  int $id The order item ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesOrderItemRepositoryV1GetGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderItemRepositoryV1GetGet'
            );
        }

        $resourcePath = '/V1/orders/items/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGet
     *
     * @param  string $search_criteria_filter_groups_filters_field Field (optional)
     * @param  string $search_criteria_filter_groups_filters_value Value (optional)
     * @param  string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SalesDataOrderItemSearchResultInterface
     */
    public function salesOrderItemRepositoryV1GetListGet($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        list($response) = $this->salesOrderItemRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
        return $response;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGetWithHttpInfo
     *
     * @param  string $search_criteria_filter_groups_filters_field Field (optional)
     * @param  string $search_criteria_filter_groups_filters_value Value (optional)
     * @param  string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SalesDataOrderItemSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderItemRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        $returnType = '\Swagger\Client\Model\SalesDataOrderItemSearchResultInterface';
        $request = $this->salesOrderItemRepositoryV1GetListGetRequest($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SalesDataOrderItemSearchResultInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGetAsync
     *
     * 
     *
     * @param  string $search_criteria_filter_groups_filters_field Field (optional)
     * @param  string $search_criteria_filter_groups_filters_value Value (optional)
     * @param  string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderItemRepositoryV1GetListGetAsync($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        return $this->salesOrderItemRepositoryV1GetListGetAsyncWithHttpInfo($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $search_criteria_filter_groups_filters_field Field (optional)
     * @param  string $search_criteria_filter_groups_filters_value Value (optional)
     * @param  string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderItemRepositoryV1GetListGetAsyncWithHttpInfo($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        $returnType = '\Swagger\Client\Model\SalesDataOrderItemSearchResultInterface';
        $request = $this->salesOrderItemRepositoryV1GetListGetRequest($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderItemRepositoryV1GetListGet'
     *
     * @param  string $search_criteria_filter_groups_filters_field Field (optional)
     * @param  string $search_criteria_filter_groups_filters_value Value (optional)
     * @param  string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesOrderItemRepositoryV1GetListGetRequest($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {

        $resourcePath = '/V1/orders/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search_criteria_filter_groups_filters_field !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_filters_field);
        }
        // query params
        if ($search_criteria_filter_groups_filters_value !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_filters_value);
        }
        // query params
        if ($search_criteria_filter_groups_filters_condition_type !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_filters_condition_type);
        }
        // query params
        if ($search_criteria_sort_orders_field !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = ObjectSerializer::toQueryValue($search_criteria_sort_orders_field);
        }
        // query params
        if ($search_criteria_sort_orders_direction !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = ObjectSerializer::toQueryValue($search_criteria_sort_orders_direction);
        }
        // query params
        if ($search_criteria_page_size !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($search_criteria_page_size);
        }
        // query params
        if ($search_criteria_current_page !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($search_criteria_current_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
