<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
	public $phone;	//Руслан
	public $self_info;	//Руслан
	public $city;	//Руслан
	public $country;	//Руслан

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
			
			['city', 'filter', 'filter' => 'trim'],  //Руслан
            ['city', 'required'],	//Руслан
			
			['country', 'filter', 'filter' => 'trim'],  //Руслан
            ['country', 'required'],	//Руслан
			
			['phone', 'filter', 'filter' => 'trim'],  //Руслан
            ['phone', 'required'],	//Руслан
            
			['self_info', 'filter', 'filter' => 'trim'],  //Руслан
            ['self_info', 'required'],	//Руслан
			
			['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->city = $this->city;	//добавил строку РУслан
            $user->country = $this->country;	//добавил строку РУслан
            $user->setPassword($this->password);	//добавил строку РУслан
			$user->phone = $this->phone; //добавил строку РУслан
            $user->self_info = $this->self_info;	//добавил строку РУслан
			$user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
