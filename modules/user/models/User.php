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
            [['updatedAt', 'createdAt', 'lastLoggedInAt', 'author'], 'integer'],
            [['name', 'email', ], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 100],
            [['active'], 'string', 'max' => 4],
            [['accessToken', 'authKey'], 'string', 'max' => 100],
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
            'active' => Module::t('Active'),
            'createdAt' => Module::t('User Created'),
            'updatedAt' => Module::t('User Updated'),
            'lastLoggedInAt' => Module::t('Last Logged In At'),
            'author' => Module::t('Author'),
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
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
