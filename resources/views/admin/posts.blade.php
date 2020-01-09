@extends('layouts')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mt-4">
                <form action="{{ url('/insertpost') }}" method="post">
                    @csrf
                    <input type="hidden" name='userid' value="{{ Auth::user()->id }}">
                    <div class="form-group row">
                        <label for="title" class="col-2">Title Post</label>
                        <div class="col-10"><input value="{{ old('title')}}" name='title' type="text" class="form-control"/></div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-2">Content Post</label>
                    <div class="col-10"><input name='content' value="{{ old('content') }}" type="text" class="form-control"/></div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-2">Category Post</label>
                        <div class="col-10">
                            <select id="" class="form-control" name='catid'>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <button class="btn btn-primary" type="submit">Add</button>                                 
                </form>
            </div>
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mt-4">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection