<?php

return [
    function ($article) {
        return $article->id;
    },
    function ($article) {
    return $article->title;
    },
    function ($article) {
        return $article->text;
    },
    function ($article) {
        return $article->author_id ?? '';
    },
    function ($article) {
    return $article->date;
    }
];
