<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $tel
 * @property string $email
 * @property integer $status
 * @property integer $time_insert
 * @property integer $time_update
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'tel', 'email', 'time_insert'], 'required'],
            [['status', 'time_insert', 'time_update'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 255],
            [['email'],'email'],
            ['tel','match','pattern'=>'/^1(3|5|6|8|9)[0-9]{9}$/','message'=>'无效的手机号'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'username' => '用户名',
            'password' => '密码',
            'tel' => '手机号码',
            'email' => '邮箱',
            'status' => 'Status',
            'time_insert' => '添加时间',
            'time_update' => '修改时间',
        ];
    }
}
