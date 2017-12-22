<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MonthlyData Entity
 *
 * @property int $id
 * @property int $month
 * @property int $year
 * @property float $gross_profit
 * @property float $gross_expense
 * @property float $liquid_total
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class MonthlyData extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'month' => true,
        'year' => true,
        'gross_profit' => true,
        'gross_expense' => true,
        'liquid_total' => true,
        'user_id' => true,
        'user' => true
    ];
}
