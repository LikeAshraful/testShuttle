@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="text-align: center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Last login reset</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $k => $user)
                        <tr>
                            <th scope="row">{{$k+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td></td>
                        </tr>
                        @endforeach                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
