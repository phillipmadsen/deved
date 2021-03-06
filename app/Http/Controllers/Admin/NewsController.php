<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use Grace\Repositories\News\NewsInterface;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Notification;
use Grace\Repositories\News\NewsRepository as News;
use Grace\Exceptions\Validation\ValidationException;

/**
 * Class NewsController
 * @package App\Controllers\Admin
 * @author Phillip Madsen
 */
class NewsController extends Controller {

    protected $news;

    public function __construct(NewsInterface $news) {

        View::share('active', 'modules');
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $page = Input::get('page', 1);
        $perPage = 10;
        $pagiData = $this->news->paginate($page, $perPage, true);

        $news = new LengthAwarePaginator($pagiData->items, $pagiData->totalItems, $perPage, [
            'path' => Paginator::resolveCurrentPath()
        ]);

        $news->setPath("");

        return view('backend.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        try {
            $this->news->create(Input::all());
            Notification::success('News was successfully added');
            return langRedirectRoute('admin.news.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.news.create')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {

        $news = $this->news->find($id);
        return view('backend.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $news = $this->news->find($id);
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        try {
            $this->news->update($id, Input::all());
            Notification::success('News was successfully updated');
            return langRedirectRoute('admin.news.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.news.edit')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {

        $this->news->delete($id);
        Notification::success('News was successfully deleted');
        return langRedirectRoute('admin.news.index');
    }

    public function confirmDestroy($id) {

        $news = $this->news->find($id);
        return view('backend.news.confirm-destroy', compact('news'));
    }

    public function togglePublish($id) {

        return $this->news->togglePublish($id);
    }
}
