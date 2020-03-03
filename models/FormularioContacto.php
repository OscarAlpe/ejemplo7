<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of FormularioContacto
 *
 * @author Oscar
 */
class FormularioContacto extends Model {
    public $nombre;
    public $apellidos;
    public $correo;
    public $asunto;
    public $contenido;
    
    function rules() {
        return [
            [['nombre', 'correo'], 'required'],
            ['correo', 'email'],
            ['apellidos', 'safe'],
            ['contenido', 'string', 'length' => [5, 50]],
            ['asunto', 'in', 'range' => ['General', 'Productos', 'Reclamación']],
       ];
    }
    
    function attributeLabels() {
        return [
            'nombre' => 'Introduce tu nombre',
            'apellidos' => 'Introduce tus apellidos',
            'correo' => 'Introduce tu correo electrónico',
            'asunto' => 'Seleccione un tema',
            'contenido' => 'Explique brevemente el tema',
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
                ->setReplyTo([$this->correo => $this->nombre . ' ' . $this->apellidos])
                ->setSubject($this->asunto)
                ->setTextBody($this->contenido)
                ->send();

            return true;
        }
        return false;
    }

}
