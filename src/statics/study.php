<?php

    class Study {
        public $author;
        public $topic;
        public $content;
        public $date_answered;

        public function __construct($author, $topic, $content, $date_answered)
        {
            $this->author = $author;
            $this->topic = $topic;
            $this->content = $content;
            $this->date_answered = $date_answered;
        }
    }

    $studySession = array();

    $studySession[] = new Study("John Doe", "How to get started in Cryptography", "Cupidatat qui ipsum laborum ullamco non veniam magna sunt culpa minim. Irure elit ipsum nisi aliqua amet nostrud nulla occaecat sit commodo sit dolore ipsum. Incididunt occaecat occaecat magna laboris sit anim minim voluptate. Cupidatat minim minim officia enim quis labore ut incididunt. Laborum ad commodo occaecat ullamco dolor duis dolor qui. Deserunt do dolore laboris commodo deserunt tempor veniam sit aliqua dolor qui aliqua est. Consectetur proident non excepteur laborum aliqua mollit cillum irure voluptate id excepteur tempor ea.", "June, 2 2025");
    $studySession[] = new Study("You", "Building a responsive Frontend Architecture with Next js", "Cupidatat qui ipsum laborum ullamco non veniam magna sunt culpa minim. Irure elit ipsum nisi aliqua amet nostrud nulla occaecat sit commodo sit dolore ipsum. Incididunt occaecat occaecat magna laboris sit anim minim voluptate. Cupidatat minim minim officia enim quis labore ut incididunt. Laborum ad commodo occaecat ullamco dolor duis dolor qui. Deserunt do dolore laboris commodo deserunt tempor veniam sit aliqua dolor qui aliqua est. Consectetur proident non excepteur laborum aliqua mollit cillum irure voluptate id excepteur tempor ea.", "June, 9 2025");
    $studySession[] = new Study("You", "Refactoring Legacy Code to Python", "Cupidatat qui ipsum laborum ullamco non veniam magna sunt culpa minim. Irure elit ipsum nisi aliqua amet nostrud nulla occaecat sit commodo sit dolore ipsum. Incididunt occaecat occaecat magna laboris sit anim minim voluptate. Cupidatat minim minim officia enim quis labore ut incididunt. Laborum ad commodo occaecat ullamco dolor duis dolor qui. Deserunt do dolore laboris commodo deserunt tempor veniam sit aliqua dolor qui aliqua est. Consectetur proident non excepteur laborum aliqua mollit cillum irure voluptate id excepteur tempor ea.", "June, 19 2025");
    $studySession[] = new Study("John Doe", "How to get started in Cryptography", "Cupidatat qui ipsum laborum ullamco non veniam magna sunt culpa minim. Irure elit ipsum nisi aliqua amet nostrud nulla occaecat sit commodo sit dolore ipsum. Incididunt occaecat occaecat magna laboris sit anim minim voluptate. Cupidatat minim minim officia enim quis labore ut incididunt. Laborum ad commodo occaecat ullamco dolor duis dolor qui. Deserunt do dolore laboris commodo deserunt tempor veniam sit aliqua dolor qui aliqua est. Consectetur proident non excepteur laborum aliqua mollit cillum irure voluptate id excepteur tempor ea.", "Sept, 11 2025");
