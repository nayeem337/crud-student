@extends('master')

@section('title')
    Manage Student Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-success"> {{Session('message')}} </h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> SL NO </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Mobile </th>
                            <th> Address </th>
                            <th> Image </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$student->name}} </td>
                            <td> {{$student->email}} </td>
                            <td> {{$student->mobile}} </td>
                            <td> {{$student->address}} </td>
                            <td> <img src="{{asset($student->image)}}" alt="" height="60" width="80"> </td>
                            <td>
                                <a href="{{route('student.edit', ['id' => $student->id])}}" class="btn btn-success btn-sm"> Edit </a>
                                <a href="{{route('student.delete', ['id' => $student->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you want to delete this!');"> Delete </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


