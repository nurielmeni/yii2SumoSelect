<?php
namespace nurielmeni\sumoSelect\views;

$sumoConfig = json_encode($config);
?>

<select id="<?= $name ?>" <?= $multiple ? 'multiple="multiple"' : '' ?> class="sumo-select">
    <?php foreach ($options as $value => $text) : ?>
        <option value="<?= $value ?>"><?= $text ?></option>
    <?php endforeach; ?>
</select>

<?php

$js = <<<JS
    console.log(JSON.parse('$sumoConfig'));
    $('#$name').SumoSelect(JSON.parse('$sumoConfig'));
JS;

$this->registerJs($js, yii\web\View::POS_READY);
