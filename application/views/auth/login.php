<div class="row">
    <div class="col-md-12">
        <!-- Auth form -->
        <?= Form::open('/auth/login', ['class' => 'form-horizontal']); ?>
        <?php if (isset($errors['general'])) { ?>
            <div class="bg-danger">
                <?= $errors['general']; ?>
            </div>
        <?php } ?>
        <div class="form-group <?= isset($errors['email']) ? 'has-error' : ''; ?>">
            <label for="auth-from-email" class="col-md-2 control-label">Email</label>
            <div class="col-md-6">
                <?= Form::input('email', Arr::get($_POST, 'email', ''), [
                    'id' => 'auth-from-email',
                    'placeholder' => 'Email',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['email']) ? $errors['email'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['password']) ? 'has-error' : ''; ?>">
            <label for="auth-from-email" class="col-md-2 control-label">Password</label>
            <div class="col-md-6">
                <?= Form::password('password', '', [
                    'id' => 'auth-from-password',
                    'placeholder' => 'Password',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['password']) ? $errors['password'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                <button class="btn btn-success btn-block" type="submit">Отправить</button>
            </div>
        </div>
        <?= Form::close(); ?><!-- End Auth form -->

    </div>
</div>