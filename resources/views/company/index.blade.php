@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                 @if (session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
             @endif   
                <div class="panel panel-default">
                        <a href="{{ route('Companies.create') }}" class="btn btn-default">Add New Comany</a>

                    <div class="panel-heading">companies</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>websites</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->websites }}</td>
                                    <td>
                                        <a href="{{ route('Companies.edit', $company->id) }}" class="btn btn-default">Edit</a>
                                        <form action="{{ route('Companies.destroy', $company->id) }}" method="POST"
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
                         {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 