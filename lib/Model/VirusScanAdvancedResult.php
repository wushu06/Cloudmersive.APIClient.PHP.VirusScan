<?php
/**
 * VirusScanAdvancedResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * virusapi
 *
 * The Cloudmersive Virus Scan API lets you scan files and content for viruses and identify security issues with content.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * VirusScanAdvancedResult Class Doc Comment
 *
 * @category Class
 * @description Result of running an advanced virus scan
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirusScanAdvancedResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VirusScanAdvancedResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clean_result' => 'bool',
        'contains_executable' => 'bool',
        'contains_invalid_file' => 'bool',
        'contains_script' => 'bool',
        'contains_password_protected_file' => 'bool',
        'contains_restricted_file_format' => 'bool',
        'contains_macros' => 'bool',
        'verified_file_format' => 'string',
        'found_viruses' => '\Swagger\Client\Model\VirusFound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clean_result' => null,
        'contains_executable' => null,
        'contains_invalid_file' => null,
        'contains_script' => null,
        'contains_password_protected_file' => null,
        'contains_restricted_file_format' => null,
        'contains_macros' => null,
        'verified_file_format' => null,
        'found_viruses' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'clean_result' => 'CleanResult',
        'contains_executable' => 'ContainsExecutable',
        'contains_invalid_file' => 'ContainsInvalidFile',
        'contains_script' => 'ContainsScript',
        'contains_password_protected_file' => 'ContainsPasswordProtectedFile',
        'contains_restricted_file_format' => 'ContainsRestrictedFileFormat',
        'contains_macros' => 'ContainsMacros',
        'verified_file_format' => 'VerifiedFileFormat',
        'found_viruses' => 'FoundViruses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clean_result' => 'setCleanResult',
        'contains_executable' => 'setContainsExecutable',
        'contains_invalid_file' => 'setContainsInvalidFile',
        'contains_script' => 'setContainsScript',
        'contains_password_protected_file' => 'setContainsPasswordProtectedFile',
        'contains_restricted_file_format' => 'setContainsRestrictedFileFormat',
        'contains_macros' => 'setContainsMacros',
        'verified_file_format' => 'setVerifiedFileFormat',
        'found_viruses' => 'setFoundViruses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clean_result' => 'getCleanResult',
        'contains_executable' => 'getContainsExecutable',
        'contains_invalid_file' => 'getContainsInvalidFile',
        'contains_script' => 'getContainsScript',
        'contains_password_protected_file' => 'getContainsPasswordProtectedFile',
        'contains_restricted_file_format' => 'getContainsRestrictedFileFormat',
        'contains_macros' => 'getContainsMacros',
        'verified_file_format' => 'getVerifiedFileFormat',
        'found_viruses' => 'getFoundViruses'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['clean_result'] = isset($data['clean_result']) ? $data['clean_result'] : null;
        $this->container['contains_executable'] = isset($data['contains_executable']) ? $data['contains_executable'] : null;
        $this->container['contains_invalid_file'] = isset($data['contains_invalid_file']) ? $data['contains_invalid_file'] : null;
        $this->container['contains_script'] = isset($data['contains_script']) ? $data['contains_script'] : null;
        $this->container['contains_password_protected_file'] = isset($data['contains_password_protected_file']) ? $data['contains_password_protected_file'] : null;
        $this->container['contains_restricted_file_format'] = isset($data['contains_restricted_file_format']) ? $data['contains_restricted_file_format'] : null;
        $this->container['contains_macros'] = isset($data['contains_macros']) ? $data['contains_macros'] : null;
        $this->container['verified_file_format'] = isset($data['verified_file_format']) ? $data['verified_file_format'] : null;
        $this->container['found_viruses'] = isset($data['found_viruses']) ? $data['found_viruses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets clean_result
     *
     * @return bool
     */
    public function getCleanResult()
    {
        return $this->container['clean_result'];
    }

    /**
     * Sets clean_result
     *
     * @param bool $clean_result True if the scan contained no viruses, false otherwise
     *
     * @return $this
     */
    public function setCleanResult($clean_result)
    {
        $this->container['clean_result'] = $clean_result;

        return $this;
    }

    /**
     * Gets contains_executable
     *
     * @return bool
     */
    public function getContainsExecutable()
    {
        return $this->container['contains_executable'];
    }

    /**
     * Sets contains_executable
     *
     * @param bool $contains_executable True if the scan contained an executable (application code), which can be a significant risk factor
     *
     * @return $this
     */
    public function setContainsExecutable($contains_executable)
    {
        $this->container['contains_executable'] = $contains_executable;

        return $this;
    }

    /**
     * Gets contains_invalid_file
     *
     * @return bool
     */
    public function getContainsInvalidFile()
    {
        return $this->container['contains_invalid_file'];
    }

    /**
     * Sets contains_invalid_file
     *
     * @param bool $contains_invalid_file True if the scan contained an invalid file (such as a PDF that is not a valid PDF, Word Document that is not a valid Word Document, etc.), which can be a significant risk factor
     *
     * @return $this
     */
    public function setContainsInvalidFile($contains_invalid_file)
    {
        $this->container['contains_invalid_file'] = $contains_invalid_file;

        return $this;
    }

    /**
     * Gets contains_script
     *
     * @return bool
     */
    public function getContainsScript()
    {
        return $this->container['contains_script'];
    }

    /**
     * Sets contains_script
     *
     * @param bool $contains_script True if the scan contained a script (such as a PHP script, Python script, etc.) which can be a significant risk factor
     *
     * @return $this
     */
    public function setContainsScript($contains_script)
    {
        $this->container['contains_script'] = $contains_script;

        return $this;
    }

    /**
     * Gets contains_password_protected_file
     *
     * @return bool
     */
    public function getContainsPasswordProtectedFile()
    {
        return $this->container['contains_password_protected_file'];
    }

    /**
     * Sets contains_password_protected_file
     *
     * @param bool $contains_password_protected_file True if the scan contained a password protected or encrypted file, which can be a significant risk factor
     *
     * @return $this
     */
    public function setContainsPasswordProtectedFile($contains_password_protected_file)
    {
        $this->container['contains_password_protected_file'] = $contains_password_protected_file;

        return $this;
    }

    /**
     * Gets contains_restricted_file_format
     *
     * @return bool
     */
    public function getContainsRestrictedFileFormat()
    {
        return $this->container['contains_restricted_file_format'];
    }

    /**
     * Sets contains_restricted_file_format
     *
     * @param bool $contains_restricted_file_format True if the uploaded file is of a type that is not allowed based on the optional restrictFileTypes parameter, false otherwise; if restrictFileTypes is not set, this will always be false
     *
     * @return $this
     */
    public function setContainsRestrictedFileFormat($contains_restricted_file_format)
    {
        $this->container['contains_restricted_file_format'] = $contains_restricted_file_format;

        return $this;
    }

    /**
     * Gets contains_macros
     *
     * @return bool
     */
    public function getContainsMacros()
    {
        return $this->container['contains_macros'];
    }

    /**
     * Sets contains_macros
     *
     * @param bool $contains_macros True if the uploaded file contains embedded Macros of other embedded threats within the document, which can be a significant risk factor
     *
     * @return $this
     */
    public function setContainsMacros($contains_macros)
    {
        $this->container['contains_macros'] = $contains_macros;

        return $this;
    }

    /**
     * Gets verified_file_format
     *
     * @return string
     */
    public function getVerifiedFileFormat()
    {
        return $this->container['verified_file_format'];
    }

    /**
     * Sets verified_file_format
     *
     * @param string $verified_file_format For file format verification-supported file formats, the contents-verified file format of the file.  Null indicates that the file format is not supported for contents verification.  If a Virus or Malware is found, this field will always be set to Null.
     *
     * @return $this
     */
    public function setVerifiedFileFormat($verified_file_format)
    {
        $this->container['verified_file_format'] = $verified_file_format;

        return $this;
    }

    /**
     * Gets found_viruses
     *
     * @return \Swagger\Client\Model\VirusFound[]
     */
    public function getFoundViruses()
    {
        return $this->container['found_viruses'];
    }

    /**
     * Sets found_viruses
     *
     * @param \Swagger\Client\Model\VirusFound[] $found_viruses Array of viruses found, if any
     *
     * @return $this
     */
    public function setFoundViruses($found_viruses)
    {
        $this->container['found_viruses'] = $found_viruses;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


