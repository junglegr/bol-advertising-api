<?php

namespace Coralion\BolAdvertisingV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class AdvertiserPerformance extends AbstractModel
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
            'date' => [ 'model' => null, 'array' => false ],
            'impressions' => [ 'model' => null, 'array' => false ],
            'clicks' => [ 'model' => null, 'array' => false ],
            'ctr' => [ 'model' => null, 'array' => false ],
            'sales' => [ 'model' => null, 'array' => false ],
            'conversions' => [ 'model' => null, 'array' => false ],
            'conversionRate' => [ 'model' => null, 'array' => false ],
            'spent' => [ 'model' => null, 'array' => false ],
            'cpc' => [ 'model' => null, 'array' => false ],
            'acos' => [ 'model' => null, 'array' => false ],
            'roas' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The date to which all campaign results are aggregated.
     */
    public $date;

    /**
     * @var int The total number of impressions for ads in all campaigns.
     */
    public $impressions;

    /**
     * @var int The total number of clicks on ads in all campaigns.
     */
    public $clicks;

    /**
     * @var float The Click-Through Rate is a ratio of clicks versus impressions, with four decimals of precision.
     */
    public $ctr;

    /**
     * @var float The value of sales in EUR that happened up to 14 days after the visitor viewed an ad, with two
     * decimals of precision.
     */
    public $sales;

    /**
     * @var int The total number of product sales that resulted from visitors viewing ads, up to 14 days after they saw
     * the ad.
     */
    public $conversions;

    /**
     * @var float The conversion rate is a ratio of the number of visitors who bought the product up to 14 days after
     * viewing the ad, versus those who only viewed the ad, with four decimals of precision.
     */
    public $conversionRate;

    /**
     * @var float The total amount spent on all campaign ads in EUR, with two decimals of precision.
     */
    public $spent;

    /**
     * @var float The average Cost Per Click in EUR, with two decimals of precision.
     */
    public $cpc;

    /**
     * @var float The Advertising Cost of Sale is a ratio of the ad spend versus sales revenue for all ads, with four
     * decimals of precision.
     */
    public $acos;

    /**
     * @var float The Return on Advertising Spent is a ratio of sales revenue versus ad spend, with four decimals of
     * precision.
     */
    public $roas;
}
