<h2>Создание нового AB Теста</h2>
<div class="row">
    <div class="col-md-12">

        <!-- Ab Test Create form -->
        <?= Form::open('/ab-test/new', ['class' => 'form-horizontal']); ?>
        <div class="form-group <?= isset($errors['name']) ? 'has-error' : ''; ?>">
            <label for="ab-test-name" class="col-md-2 control-label">Название теста</label>
            <div class="col-md-6">
                <?= Form::input('name', Arr::get($_POST, 'name', ''), [
                    'id' => 'ab-test-name',
                    'placeholder' => 'My super site AB test',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['name']) ? $errors['name'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['domain']) ? 'has-error' : ''; ?>">
            <label for="ab-test-bootstrap_url" class="col-md-2 control-label">Домен сайта</label>
            <div class="col-md-6">
                <?= Form::input('domain', Arr::get($_POST, 'domain', ''), [
                    'id' => 'ab-test-domain',
                    'placeholder' => 'example.com',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['domain']) ? $errors['domain'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['bootstrap_url']) ? 'has-error' : ''; ?>">
            <label for="ab-test-bootstrap_url" class="col-md-2 control-label">Стартовый URI</label>
            <div class="col-md-6">
                <?= Form::input('bootstrap_url', Arr::get($_POST, 'bootstrap_url', ''), [
                    'id' => 'ab-test-bootstrap_url',
                    'placeholder' => '/test/start',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['bootstrap_url']) ? $errors['bootstrap_url'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['a_url']) ? 'has-error' : ''; ?>">
            <label for="ab-test-a_url" class="col-md-2 control-label">URI первой страницы (A)</label>
            <div class="col-md-6">
                <?= Form::input('a_url', Arr::get($_POST, 'a_url', ''), [
                    'id' => 'ab-test-a_url',
                    'placeholder' => '/test/a',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['a_url']) ? $errors['a_url'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['b_url']) ? 'has-error' : ''; ?>">
            <label for="ab-test-bootstrap_url" class="col-md-2 control-label">URI второй страницы (A)</label>
            <div class="col-md-6">
                <?= Form::input('b_url', Arr::get($_POST, 'b_url', ''), [
                    'id' => 'ab-test-b_url',
                    'placeholder' => '/test/b',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['b_url']) ? $errors['b_url'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group <?= isset($errors['success_url']) ? 'has-error' : ''; ?>">
            <label for="ab-test-success_url" class="col-md-2 control-label">URI успеха</label>
            <div class="col-md-6">
                <?= Form::input('success_url', Arr::get($_POST, 'success_url', ''), [
                    'id' => 'ab-test-success_url',
                    'placeholder' => '/test/success',
                    'class' => 'form-control',
                ]); ?>
                <div class="error-text"><?= isset($errors['success_url']) ? $errors['success_url'] : '&nbsp;'; ?></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                <button class="btn btn-success btn-block" type="submit">Создать тест</button>
            </div>
        </div>

        <?= Form::close(); ?><!-- End Ab Test Create form -->
    </div>
</div>