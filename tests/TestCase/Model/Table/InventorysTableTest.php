<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventorysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventorysTable Test Case
 */
class InventorysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InventorysTable
     */
    protected $Inventorys;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Inventorys',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Inventorys') ? [] : ['className' => InventorysTable::class];
        $this->Inventorys = $this->getTableLocator()->get('Inventorys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Inventorys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InventorysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
