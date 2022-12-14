<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class SingleCampaignResponse extends AbstractModel
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
            'campaignId' => [ 'model' => null, 'array' => false ],
            'name' => [ 'model' => null, 'array' => false ],
            'startDate' => [ 'model' => null, 'array' => false ],
            'endDate' => [ 'model' => null, 'array' => false ],
            'state' => [ 'model' => null, 'array' => false ],
            'targetingType' => [ 'model' => null, 'array' => false ],
            'dailyBudget' => [ 'model' => null, 'array' => false ],
            'totalBudget' => [ 'model' => null, 'array' => false ],
            'countries' => [ 'model' => CampaignCountry::class, 'array' => true ],
            'bidding' => [ 'model' => BiddingModel::class, 'array' => false ],
        ];
    }

    /**
     * @var string Unique identifier for the campaign.
     */
    public $campaignId;

    /**
     * @var string The name of the campaign.
     */
    public $name;

    /**
     * @var string The start date of the campaign. Must be a current or future date and will always be one full day.
     */
    public $startDate;

    /**
     * @var string The end date of the campaign. Must be a future date that is at least one day after the start date of
     * the campaign, and will always be one full day.
     */
    public $endDate;

    /**
     * @var string The state of the campaign.
     */
    public $state;

    /**
     * @var string The type of keyword targeting for the campaign.
     */
    public $targetingType;

    /**
     * @var float The maximum amount that can be spend in one day for this campaign. The amount should always have two
     * decimals precision.
     */
    public $dailyBudget;

    /**
     * @var float The total budget that can be spend for this campaign. The amount should always have two decimals
     * precision.
     */
    public $totalBudget;

    /**
     * @var CampaignCountry[]
     */
    public $countries = [];

    /**
     * @var BiddingModel
     */
    public $bidding;

    /**
     * Returns an array with the countryCodes from countries.
     * @return string[] CountryCodes from countries.
     */
    public function getCountriesCountryCodes(): array
    {
        return array_map(function ($model) {
            return $model->countryCode;
        }, $this->countries);
    }

    /**
     * Sets countries by an array of countryCodes.
     * @param string[] $countryCodes CountryCodes for countries.
     */
    public function setCountriesCountryCodes(array $countryCodes): void
    {
        $this->countries = array_map(function ($countryCode) {
            return CampaignCountry::constructFromArray(['countryCode' => $countryCode]);
        }, $countryCodes);
    }

    /**
     * Adds a new CampaignCountry to countries by countryCode.
     * @param string $countryCode CountryCode for the CampaignCountry to add.
     */
    public function addCountriesCountryCode(string $countryCode): void
    {
        $this->countries[] = CampaignCountry::constructFromArray(['countryCode' => $countryCode]);
    }
}
