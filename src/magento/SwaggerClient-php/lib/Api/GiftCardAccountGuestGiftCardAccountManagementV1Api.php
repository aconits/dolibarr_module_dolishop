<?php
/**
 * GiftCardAccountGuestGiftCardAccountManagementV1Api
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
 * GiftCardAccountGuestGiftCardAccountManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftCardAccountGuestGiftCardAccountManagementV1Api
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost
     *
     * @param  string $cart_id cart_id (required)
     * @param  \Swagger\Client\Model\Body108 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body = null)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cart_id, $body);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo
     *
     * @param  string $cart_id (required)
     * @param  \Swagger\Client\Model\Body108 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cart_id, $body = null)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cart_id, $body);

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
                        'bool',
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsync
     *
     * 
     *
     * @param  string $cart_id (required)
     * @param  \Swagger\Client\Model\Body108 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsync($cart_id, $body = null)
    {
        return $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo($cart_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cart_id (required)
     * @param  \Swagger\Client\Model\Body108 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo($cart_id, $body = null)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cart_id, $body);

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
     * Create request for operation 'giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost'
     *
     * @param  string $cart_id (required)
     * @param  \Swagger\Client\Model\Body108 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cart_id, $body = null)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cart_id when calling giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost'
            );
        }

        $resourcePath = '/V1/carts/guest-carts/{cartId}/giftCards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cart_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet
     *
     * @param  string $cart_id cart_id (required)
     * @param  string $gift_card_code gift_card_code (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return float
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cart_id, $gift_card_code);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo
     *
     * @param  string $cart_id (required)
     * @param  string $gift_card_code (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of float, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cart_id, $gift_card_code)
    {
        $returnType = 'float';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cart_id, $gift_card_code);

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
                        'float',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsync
     *
     * 
     *
     * @param  string $cart_id (required)
     * @param  string $gift_card_code (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsync($cart_id, $gift_card_code)
    {
        return $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo($cart_id, $gift_card_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cart_id (required)
     * @param  string $gift_card_code (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo($cart_id, $gift_card_code)
    {
        $returnType = 'float';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cart_id, $gift_card_code);

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
     * Create request for operation 'giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
     *
     * @param  string $cart_id (required)
     * @param  string $gift_card_code (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cart_id, $gift_card_code)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cart_id when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
            );
        }
        // verify the required parameter 'gift_card_code' is set
        if ($gift_card_code === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $gift_card_code when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
            );
        }

        $resourcePath = '/V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params
        if ($gift_card_code !== null) {
            $resourcePath = str_replace(
                '{' . 'giftCardCode' . '}',
                ObjectSerializer::toPathValue($gift_card_code),
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