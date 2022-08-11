<?php


namespace frontend\controllers;


use common\models\Person;
use frontend\models\PersonForm;
use yii\db\Query;
use yii\web\Controller;

class PersonController extends Controller
{
//    public function actionIndex()
//    {
//        $model = new PersonForm();
//        if ($model->load(\Yii::$app->request->post())){
//            if ($model->validate() && $model->save()){
//                \Yii::$app->session->setFlash('success', 'Bazaga yozildi');
//             }
//        }
//        return $this->render('index', compact('model'));
//    }

    public function actionIndex()
    {
//        $command = \Yii::$app->db->createCommand("select * from person where first_name = :first_name or last_name  = :last_name");

        /*
         * bind one
         */
//        $command->bindValue(':first_name', 'Shahzod');
//        $command->bindValue(':last_name', 'Aliyev');

        /*
         * bind array
         */
//        $command->bindValues([
//           ':first_name' => 'Gani',
//           ':last_name' => 'Roziyev',
//        ]);


        /*
         * query types
         */
//        $result = $command->queryAll();
//        $result = $command->queryOne();
//        $result = $command->queryColumn();
//        $result = $command->queryScalar();

        /*
         * update
         */

//        $sql = "update person set gender='ayol' where last_name='Roziyev'";
//
//        \Yii::$app->db->createCommand($sql)->execute();

        /*
         * create
         */
//        \Yii::$app->db->createCommand()
//            ->insert('person',[
//                'first_name' => 'Lola',
//                'last_name' => 'Mamaqoziyeva',
//                'email' => 'lola@gmail.com',
//                'gender' => 'ayol',
//            ])
//            ->execute();
//        \Yii::$app->db->createCommand()
//            ->batchInsert('person',
//                ['first_name', 'last_name', 'email', 'gender'],
//                [
//                    ['Tom', 'Tommy', 'tommy@gmail.com', 'erkak'],
//                    ['Tom1', 'Tommy1', 'tommy1@gmail.com', 'erkak'],
//                    ['Tom2', 'Tommy2', 'tommy2@gmail.com', 'erkak']
//                ])
//            ->execute();
        /*
         * Query builder
         */

        $query =  new Query();
        $rows = $query->select('*')->from('person')->all();
        echo '<pre>';
        print_r($rows);
        die();
        return $this->render('index');
    }

    public function actionAdd()
    {
        $male = \Faker\Provider\en_US\Person::GENDER_MALE;
        $female = \Faker\Provider\en_US\Person::GENDER_FEMALE;
        for ($i=1; $i<20; $i++){
            $person = new Person();
            $person->first_name = \Faker\Provider\en_US\Person::firstNameFemale();
            $person->last_name = \Faker\Provider\en_US\Person::firstNameFemale();
            $person->gender = $female;
            $person->email = 'shoh@gmail.com';
            $person->save();
        }
    }

}