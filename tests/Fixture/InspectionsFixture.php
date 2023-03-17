<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InspectionsFixture
 */
class InspectionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'inspection_id' => 1,
                'inspection_datetime' => '2023-03-17',
                'inspection_description' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'apartment_id' => 1,
            ],
        ];
        parent::init();
    }
}
