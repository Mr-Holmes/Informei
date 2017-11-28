<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DayExpenses Model
 *
 * @property \App\Model\Table\ExpensesTable|\Cake\ORM\Association\BelongsTo $Expenses
 *
 * @method \App\Model\Entity\DayExpense get($primaryKey, $options = [])
 * @method \App\Model\Entity\DayExpense newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DayExpense[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DayExpense|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DayExpense patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DayExpense[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DayExpense findOrCreate($search, callable $callback = null, $options = [])
 */
class DayExpensesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('day_expenses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Expenses', [
            'foreignKey' => 'expenses_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('date_')
            ->requirePresence('date_', 'create')
            ->notEmpty('date_');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['expenses_id'], 'Expenses'));

        return $rules;
    }
}
