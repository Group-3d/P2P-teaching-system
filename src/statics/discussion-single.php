<?php

    class Answer {
        public $author;
        public $content;
        public $approve_num;
        public $reject_num;
        public $date_answered;

        public function __construct($author, $content, $reject_num, $approve_num, $date_answered)
        {
            $this->author = $author;
            $this->content = $content;
            $this->reject_num = $reject_num;
            $this->approve_num = $approve_num;
            $this->date_answered = $date_answered;
        }
    }

    $AnswersArray = array();

    $AnswersArray[] = new Answer("Eric James", "Fugiat eu nostrud mollit voluptate occaecat ad occaecat minim. Ut laboris officia laborum exercitation id ipsum voluptate anim labore excepteur ea veniam eiusmod. Cupidatat occaecat proident id veniam.", 0, 32, "Oct, 8 2025");
    $AnswersArray[] = new Answer("Itachi Uchiha", "Do consequat eu veniam quis labore id non labore ut in incididunt dolor. Laborum cillum cupidatat adipisicing veniam eu in ad cillum aute ex ea cillum. Lorem eu Lorem voluptate sunt reprehenderit aute ex ullamco consectetur exercitation cillum occaecat. Qui aliqua sunt et sit aliqua. Tempor ad veniam Lorem quis id tempor sit labore magna amet aute exercitation qui. Amet exercitation in nostrud elit aliqua pariatur incididunt consequat non minim. Reprehenderit velit nulla anim esse ut adipisicing laborum velit consectetur.", 2,  22, "Nov, 2 2025");
    $AnswersArray[] = new Answer("Jane Doe", "Fugiat eu nostrud mollit voluptate occaecat ad occaecat minim. Ut laboris officia laborum exercitation id ipsum voluptate anim labore excepteur ea veniam eiusmod. Cupidatat occaecat proident id veniam.", 0, 14, "Oct, 8 2025");
    // $AnswersArray[] = new Answer("Eric James", "Fugiat eu nostrud mollit voluptate occaecat ad occaecat minim. Ut laboris officia laborum exercitation id ipsum voluptate anim labore excepteur ea veniam eiusmod. Cupidatat occaecat proident id veniam.", 32, 0, "Oct, 8 2025");
    // $AnswersArray[] = new Answer("Eric James", "Fugiat eu nostrud mollit voluptate occaecat ad occaecat minim. Ut laboris officia laborum exercitation id ipsum voluptate anim labore excepteur ea veniam eiusmod. Cupidatat occaecat proident id veniam.", 32, 0, "Oct, 8 2025");
    // $AnswersArray[] = new Answer("Eric James", "Fugiat eu nostrud mollit voluptate occaecat ad occaecat minim. Ut laboris officia laborum exercitation id ipsum voluptate anim labore excepteur ea veniam eiusmod. Cupidatat occaecat proident id veniam.", 32, 0, "Oct, 8 2025");