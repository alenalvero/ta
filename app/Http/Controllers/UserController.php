<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

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
        // ambil semua data kecuali yang bertipe user
        $view->user = User::where('type', '!=', 'user')->get();
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

    public function sendMail(Request $r)
    {
        $to = $r->email;
        $reciver = $r->nama;
        $data = [
            'nama' => $to,
            'email' => $reciver
        ];

        Mail::send('tes-mail', $data, function ($message) use ($to, $reciver) {
            $message->to($to, $reciver)
                ->subject('Laravel Test Mail');
            $message->from('fanani707@gmail.com', 'Testing');
        });

        return 'sip';
    }
}
