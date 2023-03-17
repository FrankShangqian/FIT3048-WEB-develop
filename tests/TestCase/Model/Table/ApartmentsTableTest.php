<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApartmentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApartmentsTable Test Case
 */
class ApartmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApartmentsTable
     */
    protected $Apartments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Apartments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Apartments') ? [] : ['className' => ApartmentsTable::class];
        $this->Apartments = $this->getTableLocator()->get('Apartments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Apartments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ApartmentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
