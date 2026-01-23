<?php 


class Features {
    public $title;
    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
}

    $FeaturesData = array();
    $test = '123';

    $FeaturesData[] = new Features('870', 'Expert Tutor');
    $FeaturesData[] = new Features('20,000+', 'Hours Tutored');
    $FeaturesData[] = new Features('298', 'Subjects and Courses');
    $FeaturesData[] = new Features('72,928', 'Active Students');

