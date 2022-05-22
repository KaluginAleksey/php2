<?php

class Person extends Model
{
    protected static string $table = 'persons';

    public string $name;
    public int $age;

}