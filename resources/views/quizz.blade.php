<h1>Quizz!</h1>
<div>

@foreach($questions as $question)
        <h2>{{$question->question}}</h2>
        <label>
            <td><input type="radio" name="{!! $question->id !!}" value="1"></td>
            {{$question->right_answer}}

        </label>
        <label>
            <td><input type="radio" name="{!! $question->id !!}"  value="2"></td>
            {{$question->wrong_answer}}
        </label>
    @endforeach
</div>
<form method="post" action="{{route('result')}}">
@csrf
@method('POST')
<button>
    Submit
</button>
</form>
