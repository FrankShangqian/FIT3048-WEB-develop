<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('user_fname')
            ->maxLength('user_fname', 50)
            ->requirePresence('user_fname', 'create')
            ->notEmptyString('user_fname');

        $validator
            ->scalar('user_lname')
            ->maxLength('user_lname', 50)
            ->requirePresence('user_lname', 'create')
            ->notEmptyString('user_lname');

        $validator
            ->scalar('user_prefername')
            ->maxLength('user_prefername', 50)
            ->allowEmptyString('user_prefername');

        $validator
            ->scalar('user_phone')
            ->maxLength('user_phone', 100)
            ->allowEmptyString('user_phone');

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 50)
            ->requirePresence('user_email', 'create')
            ->notEmptyString('user_email');

        $validator
            ->scalar('user_password')
            ->maxLength('user_password', 255)
            ->requirePresence('user_password', 'create')
            ->notEmptyString('user_password');

        $validator
            ->scalar('user_type')
            ->maxLength('user_type', 20)
            ->allowEmptyString('user_type');

        $validator
            ->allowEmptyFile('user_image');

        $validator
            ->scalar('user_address')
            ->maxLength('user_address', 255)
            ->allowEmptyString('user_address');

        return $validator;
        }
}
