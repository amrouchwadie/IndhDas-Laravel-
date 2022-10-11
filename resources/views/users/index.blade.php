@extends('layouts.main-app')

@section('styles')



@endsection
<style>
    

.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;

}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;

}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}



</style>
@section('content')

<a href="{{ route('users.create',app()->getLocale())}}" class="btn btn-primary">{{ __('Add User') }}</a>
<a href="{{ route('role.index',app()->getLocale())}}" class="btn btn-success">{{ __('Affecter Role') }}</a>



<div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> <span style="color: #1161ee">{{ __('Active Users') }}</span> </label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><span style="color: #1161ee">{{ __('Deleted Users') }}</span> </label>
    <div class="login-form">
        <div class="sign-in-htm">
       
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Email') }}</th>
                        <th scope="col">{{ __('Password') }}</th>
                        <th scope="col">{{ __('Creation date') }}</th>
                        <th scope="col">{{ __('Updated date') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        <tbody>
                            @foreach ($users as $user)
                                
                       
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password = '*********'}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td><a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('users.modifier',['language' => app()->getLocale(),'id' =>$user->id]) }}">{{ __('Update') }}</a></td>
                            <td><form action="{{ route('users.destroy', ['language' => app()->getLocale(),'id' =>$user->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{ __('Delete') }}</button>
                              </form></td>
                          </tr>
                          @endforeach
                  
                    </tbody>
                  </table>
                
      
     

        
    
        </div>
        <div class="sign-up-htm">
       
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">{{ __('Password') }}</th>
                    <th scope="col">{{ __('Deleted date') }}</th>
                    <th scope="col">{{ __('Action') }}</th>
           
                
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($userss as $user)
                        @if ($user->deleted_at !=null )
                   
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password = '*********'}}</td>                       
                        <td>{{$user->deleted_at}}</td>
                        <td>    <a href="{{ route('users.restore', $user->id) }}" class="btn btn-info" onclick="return confirm('voulez-vous vraiment restaurer cet utilisateur?');">{{ __('Restore') }}</a>
                        </td>
                   
                      </tr>
                      @endif
                      @endforeach
              
                </tbody>
              </table>



        </div>
    </div>
</div>
</div>









    
@endsection