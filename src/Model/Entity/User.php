<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $user_fname
 * @property string $user_lname
 * @property string|null $user_prefername
 * @property string|null $user_phone
 * @property string $user_email
 * @property string $user_password
 * @property string|null $user_type
 * @property string|resource|null $user_image
 * @property string|null $user_address
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
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
}