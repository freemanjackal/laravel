@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Film
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ route('film.store')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="film-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            @foreach ($genres as $genre)
                              <div class="col-sm-3" >
                                 <label for={{$genre->id}} class="col-sm-3 control-label">{{$genre->genre}}</label>
                                {{-- Form::checkbox($genre->genre,null,null, array('id'=>$genre->id)) --}}
                                <input type="checkbox" name={{$genre->genre}} id={{$genre->id}} class="col-sm-3" value="false" >
                              </div>
                             @endforeach
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="film-description" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="film-price" class="col-sm-3 control-label">price</label>

                            <div class="col-sm-6">
                                <input type="text" name="price" id="film-price" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="film-rating" class="col-sm-3 control-label">rating</label>

                            <div class="col-sm-6">
                                <input type="text" name="rating" id="film-rating" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="film-country" class="col-sm-3 control-label">country</label>

                            <div class="col-sm-6">
                                <input type="text" name="country" id="film-country" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Film
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
