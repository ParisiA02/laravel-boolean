@extends('layouts.main-layout')
@section('content')
    
<form 
    action="{{route('postcard.store')}}" 
    method="POST"
    enctype="multipart/form-data">

    @method('POST')
    @csrf

    <label for="sender">Sender</label>
    <input type="text" name="sender"><br>
    <label for="address">address</label>
    <input type="text" name="address"><br>
    <label for="text">Text</label>
    <input type="text" name="text"><br>
    <label for="image">Image</label>
    <input type="file" name="image"><br>


    <input type="submit" value="Create"><br>
</form>

@endsection