<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('User.index');
        $view->user = User::all();
        return $view;
    }

    public function show($id)
    {
        $view = view('show');
        $view->user = User::findOrFail($id);
        return $view;
    }

    public function create()
    {
        $view = view('User.create');
        // $view->karyawan = Karyawan1::findOrFail($id);
        return $view;
    }



    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type = $request->type;
        $user->save();

        return redirect('admin/user');
    }

    public function edit($id)
    {
        $view = view('User.edit');
        $view->user = User::findOrFail($id);
        return $view;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->password != '') {
            $user->password = bcrypt($request->input('password'));
        }
        $user->type = $request->type;
        $user->save();

        return redirect('/admin/user');
    }

    public function destroy($id)
    {
        \DB::table('users')->where('id', '=', $id)->delete();
        \Session::flash('message', 'Data Berhasi Di Hapus');
        return \Redirect::to('/admin/user');
    }

    public function sendMail()
    {
        $data = [
            'fullname' => 'alen',

        ];
        \Mail::send(
            'email',
            $data,
            function ($message) {
                $message->to('alen@gmail.com')->subject('Coba email');
            }
        );

        echo "oke";
    }
}
