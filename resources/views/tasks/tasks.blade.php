<h1>タスク一覧</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>メッセージ</th>
            <th>ステータス</th>
        </tr>
    </thead>
    <tbody>
        @if (count($tasks))
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{!! link_to_route('tasks.create', 'タスクの新規作成', null, ['class' => 'btn btn-default']) !!}
{!! $tasks->render() !!}