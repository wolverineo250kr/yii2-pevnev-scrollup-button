# wolverineo250kr/yii2-pevnev-scrollup-button
<p>
<h2>Install</h2>
<b>composer require "wolverineo250kr/yii2-pevnev-scrollup-button":"*"</b>
<h2>Options</h2>
<br/>
<b>homePage</b> - Boolean. Show button of home page (default: true)<br/>
<b>color</b> - String. Button color (default: #f2564d)<br/>
<b>colorHover</b> - String. Button color on hover (default: #000)<br/>
<b>form</b> - String. Button form. "square" or "round" aveliable (default: round)<br/>
<b>smooth</b> - Boolean. Button transition on hover (default: false)<br/>
<b>faIcon</b> - String. You may use fa-icons class (fa-chevron-up for example). Optional.<br/>
<h2>Usage</h2>
Paste Yii2 app following code in your view file (layouts/main.php):<br/>
<br/>
<b>Basic usage</b>
<pre>
\wolverineo250kr\widgets\scrollup\ScrollUpForm::widget();
</pre>
<br/>
<b>Advanced usage</b>
<pre>
\wolverineo250kr\widgets\scrollup\ScrollUpForm::widget([
            'homePage' => true,
            'color' => '#0e456f',
            'colorHover' => '#596c7a',
            'form' => 'square',
            'smooth' => true,
        ]);
</pre>
