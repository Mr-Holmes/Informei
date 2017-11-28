<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DayExpensesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DayExpensesTable Test Case
 */
class DayExpensesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DayExpensesTable
     */
    public $DayExpenses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.day_expenses',
        'app.expenses',
        'app.users',
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
        $config = TableRegistry::exists('DayExpenses') ? [] : ['className' => DayExpensesTable::class];
        $this->DayExpenses = TableRegistry::get('DayExpenses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DayExpenses);

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
