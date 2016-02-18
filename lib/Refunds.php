<?php
/**
 * Refunds
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace CyberSource;

use \CyberSource\Configuration;
use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\ObjectSerializer;

/**
 * Refunds Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Refunds
{

    /**
     * API Client
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    function __construct($config)
    {
        $this->apiClient = new ApiClient($config);
    }
  
    /**
     * Get API client
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \CyberSource\ApiClient $apiClient set the API client
     * @return Refunds
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getCaptureRefunds
     *
     * List refunds for a capture
     *
     * @param string $capture_id The ID of the capture to refund (required)
     * @param int $offset offset (optional)
     * @param int $limit limit (optional)
     * @return \CyberSource\Model\RefundCollection[]
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function getCaptureRefunds($capture_id, $offset=null, $limit=null)
    {
        
        // verify the required parameter 'capture_id' is set
        if ($capture_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $capture_id when calling getCaptureRefunds');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/captures/{id}/refunds";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        // path params
        if ($capture_id !== null) {
            $resourcePath = str_replace(
                "{" . "captureId" . "}",
                $this->apiClient->getSerializer()->toPathValue($capture_id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\RefundCollection[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RefundCollection[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RefundCollection[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * refundCapture
     *
     * Refund a captured payment
     *
     * @param string $id ID of the capture to refund (required)
     * @param \CyberSource\Model\RefundRequest $request Capture request data (optional)
     * @return \CyberSource\Model\Refund
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function refundCapture($id, $request=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refundCapture');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/captures/{id}/refunds";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\Refund'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\Refund', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Refund', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * getRefunds
     *
     * List refunds
     *
     * @param int $offset offset (optional)
     * @param int $limit limit (optional)
     * @return \CyberSource\Model\RefundCollection
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function getRefunds($offset=null, $limit=null)
    {
        
  
        // parse inputs
        $resourcePath = "payments/v1/refunds";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\RefundCollection'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RefundCollection', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RefundCollection', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * getRefund
     *
     * Retrieve a refund
     *
     * @param string $id The ID of the refund (required)
     * @return \CyberSource\Model\GetRefund
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function getRefund($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getRefund');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/refunds/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\GetRefund'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\GetRefund', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\GetRefund', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * getSaleRefunds
     *
     * List refunds for a sale
     *
     * @param string $sale_id The ID of the sale to refund (required)
     * @param int $offset offset (optional)
     * @param int $limit limit (optional)
     * @return \CyberSource\Model\RefundCollection
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function getSaleRefunds($sale_id, $offset=null, $limit=null)
    {
        
        // verify the required parameter 'sale_id' is set
        if ($sale_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sale_id when calling getSaleRefunds');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/sales/{id}/refunds";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        // path params
        if ($sale_id !== null) {
            $resourcePath = str_replace(
                "{" . "saleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($sale_id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\RefundCollection'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RefundCollection', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RefundCollection', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * refundSale
     *
     * Refund a sale payment
     *
     * @param string $id ID of the sale to refund (required)
     * @param \CyberSource\Model\RefundRequest $request sale request data (optional)
     * @return \CyberSource\Model\Refund
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function refundSale($id, $request=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refundSale');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/sales/{id}/refunds";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\Refund'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\Refund', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Refund', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}