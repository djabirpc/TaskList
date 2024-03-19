@extends('layouts.app')

@section('title','the list of tasks')

@section('content')

	<div>
		<a href="{{route('tasks.create')}}">Create </a>
	</div>

	@forelse($tasks as $task)
		<div>
			<a href="{{ route('tasks.show',['task' => $task->id]) }}">
				{{$task->title}}
			</a>
		</div>
	@empty
		<div>There is no Task</div>
	@endforelse

	@if($tasks->count())
	<div>
		{{ $tasks->links() }}
	</div>
	@endif
@endsection