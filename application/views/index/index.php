<div class="row">
    <div class="col-md-8">
        <h1>Ваши AB-тесты</h1>
    </div>
    <div class="col-md-2" style="padding-top: 30px;">
        <a class="btn btn-primary" href="/index.php/ab-test/new">Создать новый тест</a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <?php foreach ($user_tests as $t) { ?>
            <div>
                <h3>
                    <a href="/index.php/ab-test/view/<?= $t->id ?>">
                        <?= $t->name; ?>
                    </a>
                </h3>
            </div>
        <?php } ?>
    </div>
</div>
