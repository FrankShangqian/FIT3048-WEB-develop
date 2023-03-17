<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'user_id' => false,
        'user_fname' => true,
        'user_lname' => true,
        'user_prefername' => true,
        'user_phone' => true,
        'user_email' => true,
        'user_password' => true,
        'user_type' => true,
        'user_image' => true,
        'user_address' => true,
    ];
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
