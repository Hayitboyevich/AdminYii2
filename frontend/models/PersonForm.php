<?php


namespace frontend\models;


use yii\base\Model;

class PersonForm extends Model
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $gender;

    public function rules()
    {
        return[
          [['first_name', 'last_name', 'email', 'gender'], 'required'],
          [['first_name', 'last_name', 'email'], 'string', 'max'=>50],
          ['email', 'email'],
          ['gender', 'in', 'range'=> ['erkak', 'ayol']],
        ];
    }

    public function save()
    {
        $sql = 'insert into person(first_name, last_name, email, gender) values(:first_name, :last_name, :email, :gender)';
        $values = [
            ':first_name'=>$this->first_name,
            ':last_name'=>$this->last_name,
            ':email'=>$this->email,
            ':gender'=>$this->gender,
        ];
        $command = \Yii::$app->db->createCommand($sql)->bindValues($values);
        return $command->execute();
    }
}