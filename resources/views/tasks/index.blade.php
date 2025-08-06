@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>My Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> New Task
    </a>
</div>

@if($tasks->count() > 0)
    <div class="row">
        @foreach($tasks as $task)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">{{ $task->title }}</h6>
                        <span class="badge bg-{{ $task->priority === 'high' ? 'danger' : ($task->priority === 'medium' ? 'warning' : 'secondary') }}">
                            {{ ucfirst($task->priority) }}
                        </span>
                    </div>
                    <div class="card-body">
                        @if($task->description)
                            <p class="card-text">{{ Str::limit($task->description, 100) }}</p>
                        @endif

                        <div class="mb-2">
                            <span class="badge bg-{{ $task->status === 'completed' ? 'success' : ($task->status === 'in_progress' ? 'info' : 'secondary') }}">
                                {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                            </span>
                        </div>

                        @if($task->due_date)
                            <small class="text-muted">
                                <i class="bi bi-calendar"></i> Due: {{ $task->due_date->format('M d, Y') }}
                            </small>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="btn-group w-100" role="group">
                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this task?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $tasks->links() }}
    </div>
@else
    <div class="text-center py-5">
        <i class="bi bi-clipboard-x display-1 text-muted"></i>
        <h3 class="mt-3">No tasks yet</h3>
        <p class="text-muted">Get started by creating your first task!</p>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Create Task
        </a>
    </div>
@endif
@endsection
