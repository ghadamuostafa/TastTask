@extends('layouts.app')

@section('content')
    <div class="panel-heading">Edit company</div>
  <div class="col-md-8 col-md-offset-2">
    <div class="panel-body">
        
        <form action="{{ route('Companies.update', $company->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
             name:
            <br />
            <input type="text" name="name" value="{{ $company->name }}" />
             @if ($errors->has('name'))
                  <strong>{{ $errors->first('name') }}</strong>
                     </span>
                  @endif
            <br /><br />
            email:
            <br />
            <input type="email" name="email" value="{{ $company->email }}" />
            <br /><br />
            websites:
                            <br />
                            <input type="text" name="websites" value="{{ old('websites') }}" />
                             <br /></br>
                             logo
                            <input type="file" name="logo" value="{{ $company->logo }}" />
                              @if ($errors->has('logo'))
                  <strong>{{ $errors->first('logo') }}</strong>
                     </span>
               @endif
                            
            <br /><br />
            <input type="submit" value="Submit" class="btn btn-default" />
        </form>
    </div>
</div>
@endsection