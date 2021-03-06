<?php namespace Grace\Http\Controllers;

use Input;
use View;
use Search;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Class SearchController
 * @author Phillip Madsen
 */
class SearchController extends Controller {

    public function index() {

        $q = Input::get('search');


        View::composer('frontend/layout/menu', function ($view) use ($q) {

            $view->with('q', $q);
        });

        $result = Search::search($q);

        $paginator = new LengthAwarePaginator($result, count($result), 10, [
            'path' => Paginator::resolveCurrentPath()
        ]);



        return view('frontend.search.index', compact('paginator', 'q'));
    }
}
