<?php

namespace app\widgets;

use yii\helpers\Html;
use yii\base\Widget;

class Miniaturas extends Widget {
    public $id;
    public $nombre;
    public $descripcion;
    public $foto;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        $retorno = '<div class="thumbnail">';
        $retorno .= '<div style="margin: 5%; height: 250px; width: 250px; display: block;">';
        $retorno .= Html::img('@web/imgs/' . $this->foto, ['width' => '400px']);
        $retorno .= '</div>';
        $retorno .= '<div class="caption">';
        $retorno .= "<h3>$this->id</h3>";
        $retorno .= "<p>$this->nombre</p>";
        $retorno .= "<p>$this->descripcion</p>";
        $retorno .= '</div>';
        $retorno .= '</div>';

        return $retorno;
    }
}
