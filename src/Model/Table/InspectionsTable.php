<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inspections Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ApartmentsTable&\Cake\ORM\Association\BelongsTo $Apartments
 *
 * @method \App\Model\Entity\Inspection newEmptyEntity()
 * @method \App\Model\Entity\Inspection newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Inspection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inspection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inspection findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Inspection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inspection[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inspection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inspection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InspectionsTable extends Table
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

        $this->setTable('inspections');
        $this->setDisplayField('inspection_id');
        $this->setPrimaryKey('inspection_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Apartments', [
            'foreignKey' => 'apartment_id',
            'joinType' => 'INNER',
        ]);
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
            ->date('inspection_datetime')
            ->requirePresence('inspection_datetime', 'create')
            ->notEmptyDate('inspection_datetime');

        $validator
            ->scalar('inspection_description')
            ->maxLength('inspection_description', 1000)
            ->allowEmptyString('inspection_description');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('apartment_id')
            ->notEmptyString('apartment_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('apartment_id', 'Apartments'), ['errorField' => 'apartment_id']);

        return $rules;
    }
}
