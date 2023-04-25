@extends('layouts.setquestionlayout')


@section('title', $set_name)

@section('form')
    <form action="storeData" method="POST">
        @csrf
        <label for="set_name">{{$set_name}}</label><br>
        <input type="text" value="{{$set_name}}" name="set_name" hidden>
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" required><br>
        <br>
        <button type="submit">Add Question</button>
    </form>
@stop

@section('questions')
    @if ($questions != "")
        @foreach ($questions as $row)
                <tr>
                    <td>{{ $row->question }}</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr><br>
            
        @endforeach
    @endif
@stop