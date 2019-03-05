<?php use yii\widgets\ActiveForm;

    $form = ActiveForm::begin(['action' => '/admin/main/save-configuration']); ?>
    <label>Test</label>
    <input name="modConfig[test_field1]" value="<?php echo $modConfig['test_field1']?>">
    <input type="submit" value="Save">
<?php ActiveForm::end(); ?>
