@extends('layouts.app')

@section('content')



    <form class="form" action="{{route("Posts.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">tite</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="add your post's title">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="add description for your post"></textarea>
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">images</label>
        <input class="form-control" name="images[]" type="file" id="formFileMultiple" multiple>
      </div>
    <input type="submit" value="send" class="btn btn-primary mb-3">
    </form>
@endsection
