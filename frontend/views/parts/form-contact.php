<?php use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'request-form'
]) ?>
<div class="row">
    <div class="col-sm-12">
        <h4 class="contact-panel__title"><?= Yii::t('app', 'contact_title') ?></h4>
    </div>
    <div class="col-12">
        <div class="form-group">
            <?= $form->field($model, 'name')
                ->textInput(['placeholder' => Yii::t('app', 'name')])
                ->label(false) ?>
            <?= $form->field($model, 'type')
                ->hiddenInput(['value' => 'contact'])
                ->label(false); ?>
        </div>
    </div><!-- /.col-lg-6 -->
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <?= $form->field($model, 'email')
                ->textInput(['placeholder' => Yii::t('app', 'email')])
                ->label(false) ?>
        </div>
    </div><!-- /.col-lg-6 -->
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <?= $form->field($model, 'phone')
                ->textInput(['placeholder' => Yii::t('app', 'phone')])
                ->label(false) ?>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group mb-20">
            <?= $form->field($model, 'message')->textarea([
                'placeholder' => Yii::t('app', 'message')
            ])->label(false) ?>
        </div>
        <button type="button" class="btn btn-request-form btn__primary btn__xhight mt-10">
            <?= Yii::t('app', 'submit_req') ?>
        </button>
        <div class="contact-result"></div>
    </div><!-- /.col-12 -->
</div><!-- /.row -->
<?php ActiveForm::end(); ?>
