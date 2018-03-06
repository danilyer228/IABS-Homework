<?php

class OneArticle
{
    const ARTICLE_PATH = "articles";
    const DELIMITER = "%%%X%%%";
    public $title;
    public $content;
    public $articleFile;
    public function __construct($articleFile) {
        $content = file_get_contents(self::ARTICLE_PATH . DIRECTORY_SEPARATOR . $articleFile);
        $exploded = explode(self::DELIMITER, $content);
        $this->title = $exploded[0];
        $this->content = $exploded[1];
        $this->articleFile = $articleFile;
    }

    static public function getAll(){
        $articles = scandir(self::ARTICLE_PATH);
        $result = array();
        foreach ($articles as $articleFile) {
            if ($articleFile != '.' and $articleFile != '..') {
                $result[] = new OneArticle($articleFile);
            }
        }
        return $result;
    }
}
?>