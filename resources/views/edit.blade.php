@extends('layouts.app')

@section('content')



    <form class="form" action="{{route("Posts.update",$Post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">tite</label>
        <input type="text" name="title"  value="{{$Post->title}}" class="form-control" id="exampleFormControlInput1" placeholder="add your post's title">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$Post->description}}</textarea>
      </div>
      @foreach ($images as $image)
      <img src="{{ asset('images/' . $image) }}" alt="" class="card-img-top" style="width: 50%" >
      @endforeach
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">images</label>
        <input class="form-control" name="images[]" type="file" id="formFileMultiple" multiple>
      </div>
    <input type="submit" value="edit" class="btn btn-primary mb-3">
    </form>
@endsection


