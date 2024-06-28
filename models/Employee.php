<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_no
 * @property float $salary
 * @property string $dob
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone_no', 'salary', 'dob'], 'required'],
            [['salary'], 'number'],
            [['dob'], 'safe'],
            [['name', 'email', 'phone_no'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['phone_no'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone No',
            'salary' => 'Salary',
            'dob' => 'Date of Birth',
        ];
    }
}
