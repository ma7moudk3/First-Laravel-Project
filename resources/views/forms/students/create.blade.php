@extends('forms.layouts.main')

@section('main_content')

<div class="row">
    <div class="col-12">
        
    <form action="{{ URL('student/store') . '/55' }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
        <label for="name">Student Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
        <label for="birthDate">Student BirthDay</label>
            <input type="text" name="birthDate" id="birthDate" class="form-control">
        </div>
        <br>
        <div class="form-group">
        <label for="nationality">Nationality</label>
            <select type="text" name="nationality" id="nationality" class="form-control">
                <option value="PAL">Palestinian</option>
                <option value="SYR">Syeia</option>
            </select>
        </div>
        <br>
        <div class="form-group">
        <label for="postal">Postal Codes</label>
            <select type="text" name="postal" id="nationality" class="form-control">
                <option value="-1"></option>
                 @foreach ($postal_codes as $postal_code)
                 <option value="{{$postal_code}}">{{$postal_code}}</option>
                 @endforeach
            </select>
        </div>
        <button type="submi" class="btn btn-primary">Save</button>          
        </form>
    </div>

</div>

@stop