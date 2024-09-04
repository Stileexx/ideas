@foreach ($users as $user)
    <h1>{{ $user['name']}}</h1>
    <h2>{{ $user['age']}}</h2>
    <hr>

    @if ($user['age'] < 18)
        <p>User cant drive</p>
    @endif
@endforeach

@copyright {{ date('Y')}}
