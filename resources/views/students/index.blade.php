@extends('layout')
@section('content')
 <div class="container">
    <h1>Student List</h1>
       <a href="{{route('students.create')}}" class="btn btn-primary">Add student</a>
 @if(session('success'))
     <div class="alert alert-success">{{ session('success') }}</div>
 @endif

  <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )

                @endforeach
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->image}}</td>
                </tr>



            </tbody>
  </table>
 </div>
