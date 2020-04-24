<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $cid
 * @property string $doc_no
 * @property string $firts_time_visit
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $gender
 * @property string $birth_date
 * @property int $birth_order
 * @property string $birth_place
 * @property string $education_level
 * @property string $major
 * @property string $maritalـstatus
 * @property int $child_count
 * @property string $job
 * @property string $primary_hand
 * @property string $mobile_number
 * @property string $home_phone
 * @property string $other_phones
 * @property string $referrer
 * @property string $address
 * @property string $comment
 * @property string $medicalـallergy
 * @property resource $old_document
 * @property resource $picture
 *
 * @property Accounting[] $accountings
 * @property Customerqueue[] $customerqueues
 * @property Reception[] $receptions
 * @property Visits[] $visits
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_no', 'first_name', 'last_name', 'father_name', 'gender', 'birth_date', 'birth_order', 'birth_place', 'education_level', 'major', 'maritalـstatus', 'child_count', 'job', 'primary_hand', 'mobile_number', 'home_phone', 'other_phones', 'referrer', 'address', 'comment', 'medicalـallergy', 'old_document', 'picture'], 'required'],
            [['firts_time_visit', 'birth_date'], 'safe'],
            [['gender', 'education_level', 'maritalـstatus', 'primary_hand', 'address', 'comment', 'medicalـallergy', 'old_document', 'picture'], 'string'],
            [['birth_order', 'child_count'], 'integer'],
            [['doc_no'], 'string', 'max' => 10],
            [['first_name', 'father_name', 'birth_place', 'major', 'job', 'mobile_number', 'home_phone', 'other_phones', 'referrer'], 'string', 'max' => 25],
            [['last_name'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'doc_no' => 'Doc No',
            'firts_time_visit' => 'Firts Time Visit',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'father_name' => 'Father Name',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'birth_order' => 'Birth Order',
            'birth_place' => 'Birth Place',
            'education_level' => 'Education Level',
            'major' => 'Major',
            'maritalـstatus' => 'Maritalـstatus',
            'child_count' => 'Child Count',
            'job' => 'Job',
            'primary_hand' => 'Primary Hand',
            'mobile_number' => 'Mobile Number',
            'home_phone' => 'Home Phone',
            'other_phones' => 'Other Phones',
            'referrer' => 'Referrer',
            'address' => 'Address',
            'comment' => 'Comment',
            'medicalـallergy' => 'Medicalـallergy',
            'old_document' => 'Old Document',
            'picture' => 'Picture',
        ];
    }

    /**
     * Gets query for [[Accountings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccountings()
    {
        return $this->hasMany(Accounting::className(), ['cid' => 'cid']);
    }

    /**
     * Gets query for [[Customerqueues]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerqueues()
    {
        return $this->hasMany(Customerqueue::className(), ['cid' => 'cid']);
    }

    /**
     * Gets query for [[Receptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReceptions()
    {
        return $this->hasMany(Reception::className(), ['cid' => 'cid']);
    }

    /**
     * Gets query for [[Visits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visits::className(), ['cid' => 'cid']);
    }
}
