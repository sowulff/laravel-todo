@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<p>Hello {{ $user->name }}!</p>

<form action="tasks" method="post">
    @csrf
    <div>
        <label for="description">task:</label>
        <input name="description" id="description" type="text" />
        <button type="submit">Create task</button>
    </div>
</form>

<ul>
    @foreach ($user->tasks as $task)
    <li>
        @if ($task->completed)
        <s>{{ $task->description }}</s>
        @else
        <form action="tasks/{{ $task->id}}/complete" method="post">
            @csrf
            @method('patch')
            {{ $task->description }}
            <button type="submit">Complete</button>
        </form>
        @endif
    </li>
    @endforeach
</ul>

<a href="/logout">Log out</a>
