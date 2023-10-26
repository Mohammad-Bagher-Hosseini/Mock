@extends('dashboard')

@section('header_name')
    Edit AP
@endsection

@section('content')
<br><br>
<form action="{{route('admin.edit.post_AP', ['ap'=> $ap->id])}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$ap->name}}">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label for="pop_id" class="form-label">Pop : </label>
        <select name="pop_id" id="pop_id" class="form-select">
            @foreach (App\Models\Pop::all() as $pop)
            @if ($ap->pop->id == $pop->id)
                <option value="{{$pop->id}}" selected>{{$pop->name}}</option>
            @else
                <option value="{{$pop->id}}">{{$pop->name}}</option>
            @endif
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('pop_id')" class="mt-2" />
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
