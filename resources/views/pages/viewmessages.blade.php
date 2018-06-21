@extends('layouts.default')

@section('content')



<table class="table table-sm">
    <thead>
    <tr>
        <th scope="col">Sender</th>
        <th scope="col">Message</th>
        <th scope="col"></th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">email1@email.com</th>
        <td> <a class="nav-link" href="/messagedata">Message 1</a></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>
    <tr>
        <th scope="row">email2@email.com</th>
        <td><a class="nav-link" href="/messagedata">Message 2</a></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>
    <tr>
        <th scope="row">email3@email.com</th>
        <td><a class="nav-link" href="/messagedata">Message 3</a></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>

    </tbody>
</table>


@endsection