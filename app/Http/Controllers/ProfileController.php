<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile information.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        return view('profile.show', compact('user'));
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('login') ;
    }

    public function edit($id)
    {
        $users = User::all();
        $user = User::find($id);
        return view('profile.edit', compact('user', 'users'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'password' => 'nullable|min:6', // Make password nullable for updates
        ]);

        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password')); // Encrypt new password
        }

        $user->save();

        return redirect()->route('login');
        }
}