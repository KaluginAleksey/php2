<?php

namespace App;

class Author extends Model
{
    protected static string $table = 'authors';

    public string $name;
}