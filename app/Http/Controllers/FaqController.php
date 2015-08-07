<?php namespace Grace\Http\Controllers;


use Grace\Repositories\Faq\FaqInterface;
use Grace\Models\Faq;
use Grace\Models\Article;
use View;

/**
 * Class FaqController
 * @author Phillip Madsen
 */
class FaqController extends Controller  {

    /**
     * @var Grace\Repositories\Faq\FaqInterface
     */
    protected $faq;
    protected $article;
    protected $tag;
    protected $category;

    /**
     * @param FaqInterface $faq
     */
    public function __construct(FaqInterface $faq) {

        $this->faq = $faq;
    }

    /**
     * Display page
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show() {

        $faqs = $this->faq->all();


        return view('frontend.faq.show', compact('faqs'));
    }
}
