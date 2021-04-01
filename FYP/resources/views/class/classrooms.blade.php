<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Available Classes') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Classes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <section style="padding-top:60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                All Classes 
                                <a href="/addclass" class="btn btn-success" style= "position: relative; left:500px";>Add New Class</a>
                            </div>
                            <div class="card-body">
                                @if(Session::has('class_deleted'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('class_deleted')}}
                                    </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Class_Name</th>
                                            <th>Class_Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($classrooms as $classroom)
                                            <tr>
                                                <td>{{$classroom->id}}</td>
                                                <td>{{$classroom->class_name}}</td>
                                                <td>{{$classroom->class_code}}</td>
                                                <td>
                                                    <a href="/editclass/{{$classroom->id}}" class="btn btn-success">Edit</a>
                                                    <a href="classrooms/{{$classroom->id}}" class="btn btn-secondary">View</a>
                                                    <a href="deleteclass/{{$classroom->id}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>
</x-app-layout>