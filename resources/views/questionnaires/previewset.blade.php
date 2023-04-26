@extends('layouts.app')

@section('title', $set_name)
@section('css', 'css/previewset.css')

@section('content')
<p>{{ $set_name }}</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $set_name }} Preview</div>
                <div class="card-body">
                    <form action="displaySet" method="POST">
                        @csrf
                        <input type="text" value="{{$set_name}}" name="set_name" hidden>
                        @foreach($questions as $question)
                            <div class="form-group">
                                <label>{{ $question->question }}</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $question->id }}_1" value="1">
                                    <label class="form-check-label" for="{{ $question->id }}_1">
                                        1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $question->id }}_2" value="2">
                                    <label class="form-check-label" for="{{ $question->id }}_2">
                                        2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $question->id }}_3" value="3">
                                    <label class="form-check-label" for="{{ $question->id }}_3">
                                        3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $question->id }}_4" value="4">
                                    <label class="form-check-label" for="{{ $question->id }}_4">
                                        4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $question->id }}_5" value="5">
                                    <label class="form-check-label" for="{{ $question->id }}_5">
                                        5
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
