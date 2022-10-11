<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Junges\ACL\Models\Permission;
use Junges\ACL\Models\Group;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userss = User::withTrashed()->get();
        $users = User::all();
        return view('users.index',compact('users','userss'));
    }

    public function restore($id)
    {

        $users = User::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'La restauration été bien effectuer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $users = User::all();
        return view('users.add',compact('users','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        // $data = User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
            
        // ]);
        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        
        $users->save();
        $users->assignGroup($request->group_id);

        return redirect(app()->getLocale().'/userlist')->with('success', 'Les données Ajouter');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectfield  $projectfield
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = Auth::user();
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projectfield  $projectfield
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       
        $users = Auth::user();
        return view('users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projectfield  $projectfield
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request)
    {
        $users = Auth::user();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->update();
        $users->assignGroup($request->group_id);
        return redirect(app()->getLocale().'/users')->with('success','Modification a été effectue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectfield  $projectfield
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('alert-class', 'Utilisateur a été supprimer');
    }

    public function modifier($id)
    {
        $groups = Group::all();
        $users = User::find($id);
        return view('users.modifier',compact('users','groups'));
    }

    public function upd(Request $request, $id){

        $users = User::find($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->update();

        return redirect(app()->getLocale().'/userlist')->with('success','Modification a été effectue');
    }
    public function permission()
    {
        $permissions = Permission::all();
        $groups = Group::all();
        return view('users.permission', compact('permissions','groups'));
    }
    public function storepermission(Request $request)
    {
        $permissions = Permission::all();
        $permissions = $request->validate([
            'name'=> 'required|max:255',
            'permissions' => 'required',
        ]) ;
        $groups = new Group();
        $groups->name = $request->name;
        $groups->slug = Str::slug($request->name);

        $groups->save();
        $groups->assignPermissions($request->permissions);

        return redirect()->back()->with("success","Role est bien ajouter",compact('permissions'));
    }
    public function editrole($id)
    {
        $permissions=Permission::all();
        $groups=Group::findOrFail($id);
        return view('users.editrole',compact('groups','permissions'));
    }
    public function updaterole(Request $request,$id)
    {
        $permissions = Permission::all();
        $permissions = $request->validate([
            'name'=> 'required|max:255',
            'permissions' => 'required',
        ]) ;
        $groups = Group::find($id);
        $groups->name = $request->name;
        $groups->slug = Str::slug($request->name);

        $groups->update();
        $groups->assignPermissions($request->permissions);

        return redirect()->Route('role.index')->with("success","La modification du role est bien effectuer",compact('permissions'));
    }
    public function indexrole()
    {
        $permissions= Permission::all();
        $groups= Group::all();
        return view('users.indexrole',compact('permissions','groups'));
    }
    public function destroyrole($id)
    {
        $groups = group::find($id);
        $groups->delete();
        return redirect()->back()->with('error', 'la suppression a été effecter');
    }

}
