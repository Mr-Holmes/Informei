<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonthlyDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonthlyDataTable Test Case
 */
class MonthlyDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonthlyDataTable
     */
    public $MonthlyData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monthly_data',
        'app.users',
        'app.expenses',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MonthlyData') ? [] : ['className' => MonthlyDataTable::class];
        $this->MonthlyData = TableRegistry::get('MonthlyData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MonthlyData);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
