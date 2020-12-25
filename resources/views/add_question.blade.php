@extends('layouts.layout')

@section('content')


    <div>
        <form method='post' action="{{route('questions.save')}}"  enctype="multipart/form-data" >

            <div class="container">
                <h1>Add question</h1>
                <hr>

                <label><b>Question</b></label>

                <input type="text" class="form-control @error('question') is-invalid @enderror " placeholder="Enter Question" name="question" >
                        @if($errors->first('title'))
                            <p class="text-danger">{{$errors->first('title')}}</p>
                        @endif
                @error('question')
                <p class="text-danger">{{$errors->first('question')}}</p>

                @enderror
                <label><b>Right answer</b></label>
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid': ''}} " placeholder="Enter right answer" name="right_answer"  >
                @if($errors->first('right_answer'))
                    <p class="text-danger">{{$errors->first('right_answer')}}</p>
                @endif
                <label><b>Wrong answer</b></label>
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid': ''}} " placeholder="Enter wrong answer" name="wrong_answer" >
                @if($errors->first('wrong_answer'))
                    <p class="text-danger">{{$errors->first('wrong_answer')}}</p>
                @endif
                <hr>
                @csrf
                <button type="submit" class="submit">Submit</button>
            </div>




        </form>



@endsection

