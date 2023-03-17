<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagesFixture
 */
class ImagesFixture extends TestFixture
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
                'image_id' => 1,
                'image_photo' => 'Lorem ipsum dolor sit amet',
                'inspection_id' => 1,
                'apartment_id' => 1,
            ],
        ];
        parent::init();
    }
}
