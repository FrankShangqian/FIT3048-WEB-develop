<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApartmentsFixture
 */
class ApartmentsFixture extends TestFixture
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
                'apartment_id' => 1,
                'apartment_address' => 'Lorem ipsum dolor sit amet',
                'apartment_type' => '',
            ],
        ];
        parent::init();
    }
}
