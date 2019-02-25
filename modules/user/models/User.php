<?php

namespace app\modules\user\models;

use app\modules\user\Module;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property int $active
 * @property int $lastUpdate
 * @property string $email
 * @property int $author
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updatedAt', 'createdAt', 'lastLoggedInAt', 'createdBy', 'updatedBy'], 'integer'],
            [['name', 'email', ], 'string', 'max' => 100,],
            [['password'], 'string', 'max' => 100,],
            [['name', 'email', 'password'], 'required'],
            ['email', 'email'],
            [['active'], 'string', 'max' => 4],
            [['accessToken', 'authKey'], 'string', 'max' => 100],
            ['name', 'unique', 'targetClass' => User::class, 'message' => 'This username has already been taken.'],
            ['email', 'unique', 'targetClass' => User::class, 'message' => 'This email address has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => Module::t('Email'),
            'name' => Module::t('Name'),
            'password' => Module::t('Password'),
            'active' => Module::t('Active'),
            'createdAt' => \Yii::t('app', 'Created At'),
            'updatedAt' => \Yii::t('app', 'Updated At'),
            'lastLoggedInAt' => Module::t('Last Logged In At'),
            'createdBy' => \Yii::t('app', 'Created By'),
            'updatedBy' => \Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function beforeSave($insert)
    {
        $this->updatedAt = time();

        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->createdAt = time();
                $this->password = \Yii::$app->getSecurity()->generatePasswordHash($this->password);
                $this->authKey = \Yii::$app->security->generateRandomString();

                return true;
            }

            if ($this->isAttributeChanged('password')) {

                $this->password = \Yii::$app->getSecurity()->generatePasswordHash($this->password);
            }

            return true;
        }
    }
}
