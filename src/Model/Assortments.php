<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Assortments extends AbstractModel
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
            'products' => [ 'model' => Assortment::class, 'array' => true ],
        ];
    }

    /**
     * @var Assortment[]
     */
    public $products = [];

    /**
     * Returns an array with the eans from products.
     * @return string[] Eans from products.
     */
    public function getProductsEans(): array
    {
        return array_map(function ($model) {
            return $model->ean;
        }, $this->products);
    }

    /**
     * Sets products by an array of eans.
     * @param string[] $eans Eans for products.
     */
    public function setProductsEans(array $eans): void
    {
        $this->products = array_map(function ($ean) {
            return Assortment::constructFromArray(['ean' => $ean]);
        }, $eans);
    }

    /**
     * Adds a new Assortment to products by ean.
     * @param string $ean Ean for the Assortment to add.
     */
    public function addProductsEan(string $ean): void
    {
        $this->products[] = Assortment::constructFromArray(['ean' => $ean]);
    }
}
