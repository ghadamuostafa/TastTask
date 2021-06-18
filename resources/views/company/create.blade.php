@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Company</div>

                    <div class="panel-body">
                         
                        <form action="{{ route('Companies.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            First name:
                            <br />
                            <input type="text" name="name" value="{{ old('name') }}" />
                             @if ($errors->has('name'))
                  <strong>{{ $errors->first('name') }}</strong>
                     </span>
                  @endif

                            <br /><br />
                            email:
                            <br />
                            <input type="email" name="email" value="{{ old('email') }}" />
                            <br /><br />
                           websites:
                            <br />
                            <input type="text" name="websites" value="{{ old('websites') }}" />
                             <br /></br>
                             logo
                            <input type="file" name="logo" value="{{ old('logo') }}" />
                              @if ($errors->has('logo'))
                  <strong>{{ $errors->first('logo') }}</strong>
                     </span>
               @endif
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection