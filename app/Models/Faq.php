<?php namespace Grace\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Faq
 * @author Phillip Madsen
 */
class Faq extends Model {

// $articles = Article::all();

    public $table = 'faqs';

    protected $fillable = array('question', 'answer');
}
