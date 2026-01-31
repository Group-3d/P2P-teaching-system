<div class="answers-container">
    <?php
        require_once __DIR__ .'/../../statics/discussion-single.php';
        foreach($AnswersArray as $key => $answer):
    ?>
    <div class="answer-card-wrapper">
        <div class="answer-card">
            <div class="score-keeper">
                <span>▲</span>
                <span class="answers-score" id="<?php "answer-score" . $key ?>"><?=  htmlspecialchars($answer->approve_num - $answer->reject_num) ?></span>
                <span>▼</span>
            </div>

            <div class="question-content">
                <?=  htmlspecialchars($answer->content) ?>
            </div>    
        </div>
        
        <div class="answer-author-wrapper">
            <div class="answer-author-tag"><?=  htmlspecialchars($answer->author[0]) ?></div>
            <div class="answer-author"><?=  htmlspecialchars($answer->author) ?></div>
            <div class="answer-author-date"><?=  htmlspecialchars($answer->date_answered) ?></div>
        </div>
        
        <hr />
    </div>
    <?php endforeach; ?>
</div>