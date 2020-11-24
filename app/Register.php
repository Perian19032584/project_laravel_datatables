<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $table = 'Contacts';
    public $fillable = ['username','password','email'];

}
