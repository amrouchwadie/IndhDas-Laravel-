@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{ __('Add Content news') }} </h3>
                <hr>
                
                    <form action="{{route('newscontents.index',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{ __('Title') }}</b></label>
                            <input type="text" placeholder="{{ __('Title') }}" class="form-control" id="titre" name="titre" >
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{ __('Location') }}</b></label>
                            <input type="text" placeholder="{{ __('Location') }}" class="form-control" id="location" name="location" >
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{ __('Year') }}</b></label>
                            <input type="text" placeholder="{{ __('Year') }}" class="form-control" id="annee" name="annee" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>{{ __('Project') }}</b></label>
                            <input type="text" placeholder="{{ __('Project') }}" class="form-control" id="projet" name="projet" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>{{ __('Objectifs') }}</b></label>
                            <input type="text" placeholder="{{ __('Objectifs') }}" class="form-control" id="objectif" name="objectif" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>{{ __('Beneficiaries') }}</b></label>
                            <input type="benificier" placeholder="{{ __('Beneficiaries') }}" class="form-control" id="benificier" name="benificier" >
                        </div>

                       

                        <br>
                    <select name="news_id"  class="form-select" id="news_id">

                        <option selected>{{ __('Sector') }}</option>
                    @foreach ($newss as $news )
                  
                        <option value="{{$news->id}}" >{{$news->name}}</option>
                      
                    @endforeach
                </select>

                    


<div class="form-group ">
    <label for="label"><b>{{ __('Photo') }}</b></label>
    <input type="file" placeholder="pic" class="form-control" id="pic" name="pic" accept="images/*" />
</div><input type="checkbox"  class="btn-check" id="btn-check-2"  onclick="checkMe(this.checked);"/><label class="btn btn-primary" for="btn-check-2">+</label>
<br>

<div  style="display:none;"  id="divcheck" class="form-group">
    <label for="label"><b>{{ __('Photo') }}</b></label>
    <input type="file" placeholder="pic" class="form-control" id="pic1" name="pic1" accept="images/*" />
    <input type="checkbox"  class="btn-check" id="btn-check-3"  onclick="checkMe1(this.checked);"/><label class="btn btn-primary" for="btn-check-3">+</label>
    
</div>
    <br>

<div style="display:none;"  id="divcheck1"  class="form-group">
    <label for="label"><b>{{ __('Photo') }}</b></label>
    <input type="file" placeholder="pic" class="form-control" id="pic2" name="pic2" accept="images/*" />
    <input type="checkbox" class="btn-check" id="btn-check-4" onclick="checkMe2(this.checked);"/><label class="btn btn-primary" for="btn-check-4">+</label>
</div>
<br>

<div style="display:none;" id="divcheck2" class="form-group">
    <label for="label"><b>{{ __('Photo') }}</b></label>
    <input type="file" placeholder="pic" class="form-control" id="pic3" name="pic3" accept="images/*" />
    <input type="checkbox" class="btn-check" id="btn-check-5"  onclick="checkMe3(this.checked);"/><label class="btn btn-primary" for="btn-check-5">+</label>
</div>
<br>

<div style="display:none;"  id="divcheck3"  class="form-group">
    <label for="label"><b>{{ __('Photo') }}</b></label>
    <input type="file" placeholder="pic" class="form-control" id="pic4" name="pic4" accept="images/*" />
</div>
<br>


                        
                        <button type="submit" class="btn btn-success">{{ __('Add') }}</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>


<script>
function checkMe(selected)
{
if(selected)
{
document.getElementById("divcheck").style.display = "";
} 
else
{
document.getElementById("divcheck").style.display = "none";
}

}

function checkMe1(selected)
{
if(selected)
{
document.getElementById("divcheck1").style.display = "";
} 
else
{
document.getElementById("divcheck1").style.display = "none";
}

}

function checkMe2(selected)
{
if(selected)
{
document.getElementById("divcheck2").style.display = "";
} 
else
{
document.getElementById("divcheck2").style.display = "none";
}

}

function checkMe3(selected)
{
if(selected)
{
document.getElementById("divcheck3").style.display = "";
} 
else
{
document.getElementById("divcheck3").style.display = "none";
}

}





</script>
@endsection