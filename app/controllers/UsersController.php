<?php

class UsersController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /users
     *
     * @return Response
     */
    public function index()
    {
        return View::make('admin.users.index')->withUsers(User::all());
    }

    /**
     * Show the form for creating a new resource.
     * GET /users/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /users
     *
     * @return Response
     */
    public function store()
    {
        User::create(Input::all());
        return Redirect::route('admin.users.index')
            ->with('flash_message', 'تمت إضافة الموظف بنجاح ');
    }


    public function login()
    {   
        return View::make('admin.login');
    }

    public function signin()
    {
        // Find the user
        $user = User::where('identity', Input::get('identity'))
            ->where('mobile', Input::get('password'))
            ->first();

        if ($user) {
            Auth::login($user);
        
        return (Auth::check()) ? Redirect::to('/admin') : Redirect::route('login');
        } else {
            return Redirect::back()
                ->with('flash_message','المستخدم غير يوجد')
                ->with('flash_type','warning');

        }
        

        
    }


    public function logout()
    {
        Auth::logout();
        return Redirect::route('login');
    }


    public function edit($id)
    {
        return View::make('admin.users.edit', ['user' => User::find($id)]);
    }


    public function update($id)
    {
        $user = User::find($id);
        $user->update(Input::all());
        return Redirect::route('admin.users.index')
            ->with('flash_message', 'تم التعديل بنجاح ');
    }


}