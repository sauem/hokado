<form class="contact-panel__form" method="post" id="request-form">
    <div class="row">
        <div class="col-12">
            <h4 class="contact-panel__title mb-20">Yêu cầu sản phẩm</h4>
            <p class="contact-panel__desc mb-30">Thông tin yêu cầu sản phẩm của bạn sẽ được đội ngũ
                tư vấn lưu lại hồ sơ chăm sóc khách hàg và bảo mật hoàn toàn</p>
        </div> <!-- /.col-12 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="<?= Yii::t('app','name')?>" id="contact-name"
                       name="name"
                       required>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="<?= Yii::t('app','email')?>" id="contact-email"
                       name="email" required>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-6">
            <div class="form-group">
                <select class="form-control">
                    <option><?= Yii::t('app','contact_preference')?></option>
                    <option value="1">Link to chat</option>
                    <option value="2">Contact via Email</option>
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <select class="form-control">
                    <option><?= Yii::t('app', 'product_interest') ?></option>
                    <option value="1">England</option>
                    <option value="2">Us</option>
                    <option value="2">Autruslia</option>
                    <option value="2">Viet Nam</option>
                </select>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-12">
            <div class="form-group">
                <input type="text" class="form-control"
                       placeholder="<?= Yii::t('app', 'time_expectation') ?>"
                       id="contact-Phone"
                       name="phone">
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-12">
            <div class="form-group">
                      <textarea class="form-control"
                                placeholder="<?= Yii::t('app', 'product_interest') ?>" id="contact-message"
                                name="message"></textarea>
            </div>

            <button type="button"
                    class="btn-request-form
                                        btn btn__primary btn__xl btn__block">
                <?= Yii::t('app', 'submit_req') ?>
            </button>
            <div class="contact-result"></div>
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</form>
