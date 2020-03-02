<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $nombre;
    public $correo;
    public $asunto;
    public $contenido;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nombre', 'correo'], 'required'],
            // email has to be a valid email address
            ['correo', 'email'],
            ['contenido', 'string', 'length' => [5, 50]],
            ['asunto', 'safe'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Introduce tu nombre',
            'correo' => 'Introduce un correo para ponernos en contacto contigo',
            'asunto' => 'Sobre que producto quieres más información',
            'contenido' => 'Describe un poco mas que información necesitas'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->correo => $this->nombre])
                ->setSubject($this->asunto)
                ->setTextBody($this->contenido)
                ->send();

            return true;
        }
        return false;
    }
}
