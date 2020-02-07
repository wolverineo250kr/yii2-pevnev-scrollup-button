<?php

namespace wolverineo250kr\widgets\scrollup;

use Yii;
use yii\base\Widget;

class ScrollUpForm extends Widget {

    public $homePage = true;
    public $color = '#f2564d';
    public $colorHover = '#000';
    public $form = 'round';
    public $smooth = false;
    public $faIcon = null; // You may use fa-chevron-up

    public function run() {
        if (!$this->homePage && Yii::$app->controller->route == 'site/index') {
            return false;
        } else {
            return $this->render('scrollUp', [
                        'color' => $this->color,
                        'colorHover' => $this->colorHover,
                        'form' => $this->form,
                        'smooth' => $this->smooth,
                        'faIcon' => $this->faIcon
            ]);
        }
    }

}
