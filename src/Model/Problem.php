<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Problem extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'type' => [ 'model' => null, 'array' => false ],
            'title' => [ 'model' => null, 'array' => false ],
            'status' => [ 'model' => null, 'array' => false ],
            'detail' => [ 'model' => null, 'array' => false ],
            'host' => [ 'model' => null, 'array' => false ],
            'instance' => [ 'model' => null, 'array' => false ],
            'violations' => [ 'model' => Violation::class, 'array' => true ],
        ];
    }

    /**
     * @var string Type URI for this problem. Fixed value: https://api.bol.com/problems.
     */
    public $type;

    /**
     * @var string Title describing the nature of the problem.
     */
    public $title;

    /**
     * @var int HTTP status returned from the endpoint causing the problem.
     */
    public $status;

    /**
     * @var string Detailed error message describing in additional detail what caused the service to return this
     * problem.
     */
    public $detail;

    /**
     * @var string Host identifier describing the server instance that reported the problem.
     */
    public $host;

    /**
     * @var string Full URI path of the resource that reported the problem.
     */
    public $instance;

    /**
     * @var Violation[]
     */
    public $violations = [];
}
