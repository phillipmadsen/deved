<?php namespace Grace\Http\Controllers;

use Grace\Repositories\Page\PageInterface;
use Grace\Repositories\Page\PageRepository as Page;
use View;

/**
 * Class PageController
 * @author Phillip Madsen
 */
class PageController extends Controller {

    protected $page;

    public function __construct(PageInterface $page) {

        $this->page = $page;
    }

    /**
     * Display page
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug) {

        $page = $this->page->getBySlug($slug, true);

        if($page === null)
            return Response::view('errors.missing', array(), 404);

      return view('frontend.pages.show', compact('page'));
    }


    public function machine() {
        return view('frontend.pages.machine-quilting.machine');
    }
    public function gqframe() {
        return view('frontend.pages.machine-quilting.gq-frame');
    }
    public function compareMachineFrames() {
        return view('frontend.pages.machine-quilting.compare-machine-frames');
    }

    public function qnique() {

        return view('frontend.pages.qnique.qnique');
    }
    public function qniquefeatures() {
        return view('frontend.pages.qnique.features');
    }
    public function qniquespecs() {
        return view('frontend.pages.qnique.specs');
    }
    public function qniqueaccessories() {
        return view('frontend.pages.qnique.accessories');
    }


    public function shop() {

        return view('frontend.shop');
    }

    public function newuser() {

        return view('frontend.newuser');
    }

    public function cart() {

        return view('frontend.shop.cart');
    }







    // public function showFrontEndView($slug=null)
    // {
    //     $page = $this->page->getBySlug($slug, true);


    //     //return view('frontend.pages.show', compact('page'));

    //     if(View::exists($page))
    //     {
    //         return View('frontend.pages'+ $page);
    //     }
    // }

}
