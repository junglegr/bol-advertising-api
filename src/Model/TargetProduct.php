<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class TargetProduct extends AbstractModel
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
            'targetProductId' => [ 'model' => null, 'array' => false ],
            'campaignId' => [ 'model' => null, 'array' => false ],
            'adGroupId' => [ 'model' => null, 'array' => false ],
            'ean' => [ 'model' => null, 'array' => false ],
            'state' => [ 'model' => null, 'array' => false ],
            'bid' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The identifier of the target product.
     */
    public $targetProductId;

    /**
     * @var string The identifier of the parent campaign.
     */
    public $campaignId;

    /**
     * @var string The identifier of the parent ad group.
     */
    public $adGroupId;

    /**
     * @var string The EAN associated with the target product.
     */
    public $ean;

    /**
     * @var string The current state of the target product.
     */
    public $state;

    /**
     * @var float The bid price. The price should always have two decimals of precision.
     */
    public $bid;
}
