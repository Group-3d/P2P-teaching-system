<div class="study-main-wrapper">
    <div class="study-button-wrapper">
        <button id="study-button">Start a Topic</button>
    </div>

    <div class="study-main">
        <?php
            require_once __DIR__ .'/../../statics/study.php';
            foreach($studySession as $key => $answer):
        ?>

        <div class="study-card-wrapper">
            <div class="study-card">
                <div class="study-card-header">
                    <div class="card-identity">
                        <div class="study-card-author-tag"><?=  htmlspecialchars($answer->author[0]) ?></div>
                        <div class="study-card-author"><?=  htmlspecialchars($answer->author) ?></div>
                    </div>

                    <div class="study-card-author-date"><?=  htmlspecialchars($answer->date_answered) ?></div>
                </div>

                <div class="study-card-topic">
                    <?=  htmlspecialchars($answer->topic) ?>
                </div>
                <div class="study-card-conntent">
                    <?=  htmlspecialchars($answer->content) ?>
                </div>
            </div>

            <hr />
        </div>

    <?php endforeach; ?>
    </div>

</div>