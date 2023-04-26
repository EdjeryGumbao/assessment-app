@extends('layouts.setquestionlayout')


@section('title', $set_name)

@section('form')
    <form action="storeQuestion" method="POST">
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
                    <button type="button" class="btn btn-danger" onclick="showEditForm({{ $row->id }})">Edit</button>

                    <form action="editQuestion" method="POST" id="edit-form-{{ $row->id }}" style="display:none">
                        @csrf
                        <input type="text" value="{{$row->question}}" name="question" hidden>
                        <input type="text" name="new_question">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" onclick="hideEditForm({{ $row->id }})">Cancel</button>
                    </form>
                <td>
                    <form action="deleteQuestion" method="POST">
                        @csrf

                        <input type="text" value="{{$row->question}}" name="question" hidden>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr><br>
            
        @endforeach
    @endif
@stop

@section('buttons')
    <form action="previewSet" method="POST">
        @csrf
        <input type="text" value="{{$set_name}}" name="set_name" hidden>
        <button type="submit" class="dashboard-button">Preview</button>
    </form>

    <form action="deleteSet" method="POST">
        @csrf
        <input type="text" value="{{$set_name}}" name="set_name" hidden>
        <button type="submit" class="dashboard-button" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
    </form>
@stop

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

<script>
function showEditForm(id) {
    document.getElementById("edit-form-" + id).style.display = "block";
}

function hideEditForm(id) {
    document.getElementById("edit-form-" + id).style.display = "none";
}

</script>