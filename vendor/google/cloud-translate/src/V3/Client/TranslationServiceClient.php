<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/translate/v3/translation_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Translate\V3\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Translate\V3\AdaptiveMtDataset;
use Google\Cloud\Translate\V3\AdaptiveMtFile;
use Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest;
use Google\Cloud\Translate\V3\AdaptiveMtTranslateResponse;
use Google\Cloud\Translate\V3\BatchTranslateDocumentRequest;
use Google\Cloud\Translate\V3\BatchTranslateTextRequest;
use Google\Cloud\Translate\V3\CreateAdaptiveMtDatasetRequest;
use Google\Cloud\Translate\V3\CreateGlossaryRequest;
use Google\Cloud\Translate\V3\DeleteAdaptiveMtDatasetRequest;
use Google\Cloud\Translate\V3\DeleteAdaptiveMtFileRequest;
use Google\Cloud\Translate\V3\DeleteGlossaryRequest;
use Google\Cloud\Translate\V3\DetectLanguageRequest;
use Google\Cloud\Translate\V3\DetectLanguageResponse;
use Google\Cloud\Translate\V3\GetAdaptiveMtDatasetRequest;
use Google\Cloud\Translate\V3\GetAdaptiveMtFileRequest;
use Google\Cloud\Translate\V3\GetGlossaryRequest;
use Google\Cloud\Translate\V3\GetSupportedLanguagesRequest;
use Google\Cloud\Translate\V3\Glossary;
use Google\Cloud\Translate\V3\ImportAdaptiveMtFileRequest;
use Google\Cloud\Translate\V3\ImportAdaptiveMtFileResponse;
use Google\Cloud\Translate\V3\ListAdaptiveMtDatasetsRequest;
use Google\Cloud\Translate\V3\ListAdaptiveMtFilesRequest;
use Google\Cloud\Translate\V3\ListAdaptiveMtSentencesRequest;
use Google\Cloud\Translate\V3\ListGlossariesRequest;
use Google\Cloud\Translate\V3\SupportedLanguages;
use Google\Cloud\Translate\V3\TranslateDocumentRequest;
use Google\Cloud\Translate\V3\TranslateDocumentResponse;
use Google\Cloud\Translate\V3\TranslateTextRequest;
use Google\Cloud\Translate\V3\TranslateTextResponse;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Provides natural language translation operations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface adaptiveMtTranslateAsync(AdaptiveMtTranslateRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchTranslateDocumentAsync(BatchTranslateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchTranslateTextAsync(BatchTranslateTextRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createAdaptiveMtDatasetAsync(CreateAdaptiveMtDatasetRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createGlossaryAsync(CreateGlossaryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAdaptiveMtDatasetAsync(DeleteAdaptiveMtDatasetRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAdaptiveMtFileAsync(DeleteAdaptiveMtFileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteGlossaryAsync(DeleteGlossaryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface detectLanguageAsync(DetectLanguageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAdaptiveMtDatasetAsync(GetAdaptiveMtDatasetRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAdaptiveMtFileAsync(GetAdaptiveMtFileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getGlossaryAsync(GetGlossaryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getSupportedLanguagesAsync(GetSupportedLanguagesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importAdaptiveMtFileAsync(ImportAdaptiveMtFileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAdaptiveMtDatasetsAsync(ListAdaptiveMtDatasetsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAdaptiveMtFilesAsync(ListAdaptiveMtFilesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAdaptiveMtSentencesAsync(ListAdaptiveMtSentencesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listGlossariesAsync(ListGlossariesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface translateDocumentAsync(TranslateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface translateTextAsync(TranslateTextRequest $request, array $optionalArgs = [])
 */
final class TranslationServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.translation.v3.TranslationService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'translate.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'translate.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-translation',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/translation_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/translation_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/translation_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/translation_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * adaptive_mt_dataset resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     *
     * @return string The formatted adaptive_mt_dataset resource.
     */
    public static function adaptiveMtDatasetName(string $project, string $location, string $dataset): string
    {
        return self::getPathTemplate('adaptiveMtDataset')->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * adaptive_mt_file resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     * @param string $file
     *
     * @return string The formatted adaptive_mt_file resource.
     */
    public static function adaptiveMtFileName(string $project, string $location, string $dataset, string $file): string
    {
        return self::getPathTemplate('adaptiveMtFile')->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
            'file' => $file,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a glossary
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $glossary
     *
     * @return string The formatted glossary resource.
     */
    public static function glossaryName(string $project, string $location, string $glossary): string
    {
        return self::getPathTemplate('glossary')->render([
            'project' => $project,
            'location' => $location,
            'glossary' => $glossary,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - adaptiveMtDataset: projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}
     * - adaptiveMtFile: projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}
     * - glossary: projects/{project}/locations/{location}/glossaries/{glossary}
     * - location: projects/{project}/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'translate.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Translate text using Adaptive MT.
     *
     * The async variant is {@see TranslationServiceClient::adaptiveMtTranslateAsync()}
     * .
     *
     * @example samples/V3/TranslationServiceClient/adaptive_mt_translate.php
     *
     * @param AdaptiveMtTranslateRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AdaptiveMtTranslateResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function adaptiveMtTranslate(AdaptiveMtTranslateRequest $request, array $callOptions = []): AdaptiveMtTranslateResponse
    {
        return $this->startApiCall('AdaptiveMtTranslate', $request, $callOptions)->wait();
    }

    /**
     * Translates a large volume of document in asynchronous batch mode.
     * This function provides real-time output as the inputs are being processed.
     * If caller cancels a request, the partial results (for an input file, it's
     * all or nothing) may still be available on the specified output location.
     *
     * This call returns immediately and you can use
     * google.longrunning.Operation.name to poll the status of the call.
     *
     * The async variant is
     * {@see TranslationServiceClient::batchTranslateDocumentAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/batch_translate_document.php
     *
     * @param BatchTranslateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchTranslateDocument(BatchTranslateDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchTranslateDocument', $request, $callOptions)->wait();
    }

    /**
     * Translates a large volume of text in asynchronous batch mode.
     * This function provides real-time output as the inputs are being processed.
     * If caller cancels a request, the partial results (for an input file, it's
     * all or nothing) may still be available on the specified output location.
     *
     * This call returns immediately and you can
     * use google.longrunning.Operation.name to poll the status of the call.
     *
     * The async variant is {@see TranslationServiceClient::batchTranslateTextAsync()}
     * .
     *
     * @example samples/V3/TranslationServiceClient/batch_translate_text.php
     *
     * @param BatchTranslateTextRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchTranslateText(BatchTranslateTextRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchTranslateText', $request, $callOptions)->wait();
    }

    /**
     * Creates an Adaptive MT dataset.
     *
     * The async variant is
     * {@see TranslationServiceClient::createAdaptiveMtDatasetAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/create_adaptive_mt_dataset.php
     *
     * @param CreateAdaptiveMtDatasetRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AdaptiveMtDataset
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createAdaptiveMtDataset(CreateAdaptiveMtDatasetRequest $request, array $callOptions = []): AdaptiveMtDataset
    {
        return $this->startApiCall('CreateAdaptiveMtDataset', $request, $callOptions)->wait();
    }

    /**
     * Creates a glossary and returns the long-running operation. Returns
     * NOT_FOUND, if the project doesn't exist.
     *
     * The async variant is {@see TranslationServiceClient::createGlossaryAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/create_glossary.php
     *
     * @param CreateGlossaryRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createGlossary(CreateGlossaryRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateGlossary', $request, $callOptions)->wait();
    }

    /**
     * Deletes an Adaptive MT dataset, including all its entries and associated
     * metadata.
     *
     * The async variant is
     * {@see TranslationServiceClient::deleteAdaptiveMtDatasetAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/delete_adaptive_mt_dataset.php
     *
     * @param DeleteAdaptiveMtDatasetRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteAdaptiveMtDataset(DeleteAdaptiveMtDatasetRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAdaptiveMtDataset', $request, $callOptions)->wait();
    }

    /**
     * Deletes an AdaptiveMtFile along with its sentences.
     *
     * The async variant is
     * {@see TranslationServiceClient::deleteAdaptiveMtFileAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/delete_adaptive_mt_file.php
     *
     * @param DeleteAdaptiveMtFileRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteAdaptiveMtFile(DeleteAdaptiveMtFileRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAdaptiveMtFile', $request, $callOptions)->wait();
    }

    /**
     * Deletes a glossary, or cancels glossary construction
     * if the glossary isn't created yet.
     * Returns NOT_FOUND, if the glossary doesn't exist.
     *
     * The async variant is {@see TranslationServiceClient::deleteGlossaryAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/delete_glossary.php
     *
     * @param DeleteGlossaryRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteGlossary(DeleteGlossaryRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteGlossary', $request, $callOptions)->wait();
    }

    /**
     * Detects the language of text within a request.
     *
     * The async variant is {@see TranslationServiceClient::detectLanguageAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/detect_language.php
     *
     * @param DetectLanguageRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DetectLanguageResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function detectLanguage(DetectLanguageRequest $request, array $callOptions = []): DetectLanguageResponse
    {
        return $this->startApiCall('DetectLanguage', $request, $callOptions)->wait();
    }

    /**
     * Gets the Adaptive MT dataset.
     *
     * The async variant is
     * {@see TranslationServiceClient::getAdaptiveMtDatasetAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/get_adaptive_mt_dataset.php
     *
     * @param GetAdaptiveMtDatasetRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AdaptiveMtDataset
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAdaptiveMtDataset(GetAdaptiveMtDatasetRequest $request, array $callOptions = []): AdaptiveMtDataset
    {
        return $this->startApiCall('GetAdaptiveMtDataset', $request, $callOptions)->wait();
    }

    /**
     * Gets and AdaptiveMtFile
     *
     * The async variant is {@see TranslationServiceClient::getAdaptiveMtFileAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/get_adaptive_mt_file.php
     *
     * @param GetAdaptiveMtFileRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AdaptiveMtFile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAdaptiveMtFile(GetAdaptiveMtFileRequest $request, array $callOptions = []): AdaptiveMtFile
    {
        return $this->startApiCall('GetAdaptiveMtFile', $request, $callOptions)->wait();
    }

    /**
     * Gets a glossary. Returns NOT_FOUND, if the glossary doesn't
     * exist.
     *
     * The async variant is {@see TranslationServiceClient::getGlossaryAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/get_glossary.php
     *
     * @param GetGlossaryRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Glossary
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getGlossary(GetGlossaryRequest $request, array $callOptions = []): Glossary
    {
        return $this->startApiCall('GetGlossary', $request, $callOptions)->wait();
    }

    /**
     * Returns a list of supported languages for translation.
     *
     * The async variant is
     * {@see TranslationServiceClient::getSupportedLanguagesAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/get_supported_languages.php
     *
     * @param GetSupportedLanguagesRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SupportedLanguages
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSupportedLanguages(GetSupportedLanguagesRequest $request, array $callOptions = []): SupportedLanguages
    {
        return $this->startApiCall('GetSupportedLanguages', $request, $callOptions)->wait();
    }

    /**
     * Imports an AdaptiveMtFile and adds all of its sentences into the
     * AdaptiveMtDataset.
     *
     * The async variant is
     * {@see TranslationServiceClient::importAdaptiveMtFileAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/import_adaptive_mt_file.php
     *
     * @param ImportAdaptiveMtFileRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ImportAdaptiveMtFileResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function importAdaptiveMtFile(ImportAdaptiveMtFileRequest $request, array $callOptions = []): ImportAdaptiveMtFileResponse
    {
        return $this->startApiCall('ImportAdaptiveMtFile', $request, $callOptions)->wait();
    }

    /**
     * Lists all Adaptive MT datasets for which the caller has read permission.
     *
     * The async variant is
     * {@see TranslationServiceClient::listAdaptiveMtDatasetsAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/list_adaptive_mt_datasets.php
     *
     * @param ListAdaptiveMtDatasetsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listAdaptiveMtDatasets(ListAdaptiveMtDatasetsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAdaptiveMtDatasets', $request, $callOptions);
    }

    /**
     * Lists all AdaptiveMtFiles associated to an AdaptiveMtDataset.
     *
     * The async variant is {@see TranslationServiceClient::listAdaptiveMtFilesAsync()}
     * .
     *
     * @example samples/V3/TranslationServiceClient/list_adaptive_mt_files.php
     *
     * @param ListAdaptiveMtFilesRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listAdaptiveMtFiles(ListAdaptiveMtFilesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAdaptiveMtFiles', $request, $callOptions);
    }

    /**
     * Lists all AdaptiveMtSentences under a given file/dataset.
     *
     * The async variant is
     * {@see TranslationServiceClient::listAdaptiveMtSentencesAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/list_adaptive_mt_sentences.php
     *
     * @param ListAdaptiveMtSentencesRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listAdaptiveMtSentences(ListAdaptiveMtSentencesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAdaptiveMtSentences', $request, $callOptions);
    }

    /**
     * Lists glossaries in a project. Returns NOT_FOUND, if the project doesn't
     * exist.
     *
     * The async variant is {@see TranslationServiceClient::listGlossariesAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/list_glossaries.php
     *
     * @param ListGlossariesRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listGlossaries(ListGlossariesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListGlossaries', $request, $callOptions);
    }

    /**
     * Translates documents in synchronous mode.
     *
     * The async variant is {@see TranslationServiceClient::translateDocumentAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/translate_document.php
     *
     * @param TranslateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TranslateDocumentResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function translateDocument(TranslateDocumentRequest $request, array $callOptions = []): TranslateDocumentResponse
    {
        return $this->startApiCall('TranslateDocument', $request, $callOptions)->wait();
    }

    /**
     * Translates input text and returns translated text.
     *
     * The async variant is {@see TranslationServiceClient::translateTextAsync()} .
     *
     * @example samples/V3/TranslationServiceClient/translate_text.php
     *
     * @param TranslateTextRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TranslateTextResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function translateText(TranslateTextRequest $request, array $callOptions = []): TranslateTextResponse
    {
        return $this->startApiCall('TranslateText', $request, $callOptions)->wait();
    }
}
