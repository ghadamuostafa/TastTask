@extends('layouts.app')

@section('content')
    <div class="panel-heading">Edit company</div>
  <div class="col-md-8 col-md-offset-2">
    <div class="panel-body">
        
        <form action="{{ route('Employees.update', $employe->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
             name:
                     <input type="text" name="frist_name" value="{{ $employe->frist_name }}" />
             @if ($errors->has('frist_name'))
                  <strong>{{ $errors->first('frist_name') }}</strong>
                     </span>
                  @endif
           
          
             <br /><br />
             lastname
            <input type="text" name="last_name" value="{{ $employe->last_name }}" />
             @if ($errors->has('last_name'))
                  <strong>{{ $errors->first('last_name') }}</strong>
                     </span>
               @endif
            <br /><br />
            email:
                           
                            <input type="text" name="email" value="{{ $employe->email }}" />
                             <br /></br>
                             phone
                            <input type="text" name="phone" value="{{ $employe->phone }}" />
                             
                            
            <br /><br />
            <input type="submit" value="Submit" class="btn btn-default" />
        </form>
    </div>
</div>
@endsection