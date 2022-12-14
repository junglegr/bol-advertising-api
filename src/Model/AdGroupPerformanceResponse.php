<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class AdGroupPerformanceResponse extends AbstractModel
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
            'adGroupPerformance' => [ 'model' => AdGroupPerformance::class, 'array' => true ],
        ];
    }

    /**
     * @var AdGroupPerformance[]
     */
    public $adGroupPerformance = [];
}
