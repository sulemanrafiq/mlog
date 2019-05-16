@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <h1>User Details</h1>
        <h5 align="center">1=Admin , 2=User , 3=Chef</h5>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">Emial</th>
                <th scope="col">Type</th>

            </tr>
            </thead>
            <tbody>
            @foreach($user as $key=> $users)
                <tr>
                    <th scope="row">{{$users ['name']}}</th>
                    <th scope="row">{{$users ['email']}}</th>
                    <th scope="row">{{$users ['role_id']}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection