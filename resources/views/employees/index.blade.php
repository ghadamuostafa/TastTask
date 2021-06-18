@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                 @if (session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
             @endif   
                <div class="panel panel-default">
                        <a href="{{ route('Employees.create') }}" class="btn btn-default">Add New employee</a>

                    <div class="panel-heading">Employees</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>frist_name</th>
                                    <th>frist_name</th>
                                     <th>email</th>
                                    <th>phone</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($employees as $employe)
                                <tr>
                                    <td>{{ $employe->frist_name }}</td>
                                    <td>{{ $employe->frist_name }}</td>
                                    <td>{{ $employe->email }}</td>
                                    <td>{{ $employe->phone }}</td>
                                  
                                    <td>
                                        <a href="{{ route('Employees.edit', $employe->id) }}" class="btn btn-default">Edit</a>
                                        <form action="{{ route('Employees.destroy', $employe->id) }}" method="POST"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                         {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 