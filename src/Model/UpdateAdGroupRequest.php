<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class UpdateAdGroupRequest extends AbstractModel
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
            'name' => [ 'model' => null, 'array' => false ],
            'state' => [ 'model' => null, 'array' => false ],
            'defaultBid' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The name of the ad group.
     */
    public $name;

    /**
     * @var string The state of the ad group.
     */
    public $state;

    /**
     * @var float The default bid price. The price should always have two decimals precision.
     */
    public $defaultBid;
}
