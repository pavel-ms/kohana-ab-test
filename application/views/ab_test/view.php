<h2>Просмотр AB Теста: <?= $ab_test->name; ?></h2>
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-3">
                <b>Название теста</b>
            </div>
            <div class="col-md-6">
                <?= $ab_test->name; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <b>Стартовый URL</b>
            </div>
            <div class="col-md-6">
                <?= $ab_test->bootstrap_url; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <b>Вариант A</b>
            </div>
            <div class="col-md-6">
                <?= $ab_test->a_url; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <b>Вариант B</b>
            </div>
            <div class="col-md-6">
                <?= $ab_test->b_url; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <b>Успешный URL</b>
            </div>
            <div class="col-md-6">
                <?= $ab_test->success_url; ?>
            </div>
        </div>

        <h3>Аналитика:</h3>
        <?php if (isset($analytics['show'])) {?>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Вариант страницы</th>
                        <th>Показы страницы</th>
                        <th>Достижение успеха</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>A</td>
                        <td><?= $analytics['show']['a']; ?></td>
                        <td><?= $analytics['success']['a']; ?></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td><?= $analytics['show']['b']; ?></td>
                        <td><?= $analytics['success']['b']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } else { ?>
            Еще нет доступной аналитики<br/>
        <?php } ?>

        <h3>Скрипт для вставки на страницу</h3>
        <div class="row">
            <div class="col-md-8 well well-sm">
                <?php
                echo htmlspecialchars('
                <script type="application/javascript" src="//'.$_SERVER['HTTP_HOST'].'/static/watch.js'.'"></script>
                <script type="application/javascript">
		            (function(w) {
			            if (typeof w.$__Ab_Test === "function") {
				            w.$__ab_Test = new w.$__Ab_Test({id: ' . $ab_test->id . '});
				        }
		            })(window);
	            </script>
                ');
                ?>
            </div>
        </div>
    </div>
</div>