<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use Redirect;
use Sentry;
use View;
use Input;
use Validator;
use Grace\User;
use Grace\Models\Group;
use Notification;

/**
 * Class UserController
 * @package App\Controllers\Admin
 * @author Phillip Madsen
 */
class UserController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $users = User::orderBy('created_at', 'DESC')->paginate(10);





        return view('backend.user.index', compact('users'))->with('active', 'user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        $groups = Group::lists('name', 'id');

       

        return view('backend.user.create', compact('groups'));
    }

    public function setCreatedAtAttribute($date)    {

        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
      
    }

    public function getUpdatedAtAttribute($date) {

        $this->attributes['updated_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $formData = array(
            'username'       => Input::get('username'),
            'first-name'       => Input::get('first_name'),
            'last-name'        => Input::get('last_name'),
            'email'            => Input::get('email'),
            'password'         => Input::get('password'),
            'confirm-password' => Input::get('confirm_password'),
            'groups'           => Input::get('groups')
        );

        $rules = array(
            'username'       => 'required|min:3',
            'first-name'       => 'required|min:3',
            'last-name'        => 'required|min:3',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|min:4',
            'confirm-password' => 'required|same:password'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('\Grace\Http\Controllers\Admin\UserController@create')->withErrors($validation)->withInput();
        }

        $user = Sentry::createUser(array(
            'email'      => $formData['email'],
            'password'   => $formData['password'],
            'username'   => $formData['username'],
            'first_name' => $formData['first-name'],
            'last_name'  => $formData['last-name'],
            'activated'  => 1,
        ));

        if(isset($formData['groups'] )) {

            foreach($formData['groups'] as $group => $id) {

                // Find the group using the group id
                $adminGroup = Sentry::findGroupById($id);

                $user->addGroup($adminGroup);
            }
        }
        Notification::success('User was successfully added');

        return Redirect::action('App\Controllers\Admin\UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {

        $user = Sentry::findUserById($id);
         
    


        return view('backend.user.show', compact('user'))->with('active', 'user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $user = Sentry::findUserById($id);

        $userGroups = $user->getGroups()->lists('name', 'id');

        $groups = Group::lists('name', 'id');
        return view('backend.user.edit', compact('user', 'groups', 'userGroups'))->with('active', 'user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        $formData = array(
            
            'first-name' => Input::get('first_name'),
            'last-name'  => Input::get('last_name'),
            'email'      => Input::get('email'),
            'groups'     => Input::get('groups')
        );

        try {
            $user = Sentry::findUserById($id);
            $user->email = $formData['email'];
            $user->first_name = $formData['first-name'];
            $user->last_name = $formData['last-name'];
            $user->save();

            if(!isset($formData['groups'])){


            }

            foreach ((object)$formData['groups'] as $group => $id) {

                // Find the group using the group id
                $adminGroup = Sentry::findGroupById($id);

                // Assign the group to the user
                if ($user->addGroup($adminGroup)) {
                    // Group assigned successfully
                } else {
                    // Group was not assigned
                }
            }
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            echo 'User was not found.';
        } catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
            echo 'Group was not found.';
        }

        Notification::success('User was successfully updated');

        return langRedirectRoute('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response 
     */
    public function destroy($id) {

        $user = Sentry::findUserById($id);
        $user->delete();

        Notification::success('User was successfully deleted');
        return langRedirectRoute('admin.user.index');
    }

    public function confirmDestroy($id) {

        $user = User::find($id);
        return view('backend.user.confirm-destroy', compact('user'))->with('active', 'user');
    }
}
