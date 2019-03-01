<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HworldTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HworldTable Test Case
 */
class HworldTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HworldTable
     */
    public $Hworld;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Hworld'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Hworld') ? [] : ['className' => HworldTable::class];
        $this->Hworld = TableRegistry::getTableLocator()->get('Hworld', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hworld);

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
}
