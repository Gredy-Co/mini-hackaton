<h1>Mini Hackathon - Tareas</h1>
<ul>
    @foreach($tasks as $task)
        <li>{{ $task->title }} ({{ $task->completed ? 'Hecho' : 'Pendiente' }})</li>
    @endforeach
</ul>