<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller; use App\Models\Role; use App\Models\User; use Illuminate\Auth\Events\Registered; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Hash; use Illuminate\Validation\Rules;
class RegisteredUserController extends Controller { public function create(){ return view('auth.register'); } public function store(Request $request){ $data=$request->validate(['name'=>['required','string','max:120'],'email'=>['required','email','max:180','unique:users'],'password'=>['required','confirmed',Rules\Password::defaults()],'role'=>['required','in:donor,fundraiser']]); $user=User::create(['name'=>strip_tags($data['name']),'email'=>$data['email'],'password'=>Hash::make($data['password']),'role_id'=>Role::where('slug',$data['role'])->value('id')]); 
// event(new Registered($user)); 
Auth::login($user); return redirect()->route('dashboard'); } }
