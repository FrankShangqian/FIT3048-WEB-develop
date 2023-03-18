<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'user_id' => 1,
                'user_fname' => 'Lorem ipsum dolor sit amet',
                'user_lname' => 'Lorem ipsum dolor sit amet',
                'user_prefername' => 'Lorem ipsum dolor sit amet',
                'user_phone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'user_type' => 'Lorem ipsum dolor ',
                'user_image' => 'Lorem ipsum dolor sit amet',
                'user_address' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
