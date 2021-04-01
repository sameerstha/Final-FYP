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
        <title>Edit Class</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <section style="padding-top:60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                Edit Class
                            </div>
                            <div class="card-body">
                                @if(Session::has('class_updated'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('class_updated')}}
                                    </div>
                                @endif
                                <form method="POST" action="{{route('class.update')}}"/>
                                    @csrf
                                    <input type="hidden" name="id" value="{{$classroom->id}}"/>
                                    <div class="form-group">
                                        <label for="class_name">Class Name</label>
                                        <input type="text" name="class_name" class="form-control" placeholder="Enter Class Name" value="{{$classroom->class_name}}"/>
                                    </div>

                                    <div class="form-group" style="padding-top:10px;>
                                        <label for="class_code">Class Code</label>
                                        <input type="text" name="class_code" class="form-control" placeholder="Enter Class Code" value="{{$classroom->class_code}}"/>
                                    </div>
                                    <div class="form-group" style="padding-top:12px;">
                                        <button type="submit" class="btn btn-success">Update Class</button>
                                    </div>
                                </form>
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