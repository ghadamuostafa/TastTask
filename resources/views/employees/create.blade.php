@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Company</div>

                    <div class="panel-body">
                         
                        <form action="{{ route('Employees.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            First name:
                            <br />
                            <input type="text" name="frist_name" value="{{ old('frist_name') }}" />
                             @if ($errors->has('frist_name'))
                  <strong>{{ $errors->first('frist_name') }}</strong>
                     </span>
                  @endif

                            <br /><br />
                             last name
                              <br />
                            <input type="text" name="last_name" value="{{ old('last_name') }}" />
                              @if ($errors->has('last_name'))
                     <strong>{{ $errors->first('last_name') }}</strong>
                     </span>
                        @endif
                         <br /><br />
                            email:
                            <br />
                            <input type="email" name="email" value="{{ old('email') }}" />
                            <br /><br />
                           phone:
                            <br />
                            <input type="text" name="phone" value="{{ old('phone') }}" />
                             <br /></br>
                            
            
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection