@extends('layouts.app')

@section('title', $task->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $task->title }}</h4>
                <span class="badge bg-{{ $task->priority === 'high' ? 'danger' : ($task->priority === 'medium' ? 'warning' : 'secondary') }} fs-6">
                    {{ ucfirst($task->priority) }} Priority
                </span>
            </div>
            <div class="card-body">
                @if($task->description)
                    <div class="mb-4">
                        <h6>Description:</h6>
                        <p class="text-muted">{{ $task->description }}</p>
                    </div>
                @endif

                <div class="row mb-4">
                    <div class="col-md-4">
                        <h6>Status:</h6>
                        <span class="badge bg-{{ $task->status === 'completed' ? 'success' : ($task->status === 'in_progress' ? 'info' : 'secondary') }} fs-6">
                            {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                        </span>
                    </div>

                    @if($task->due_date)
                        <div class="col-md-4">
                            <h6>Due Date:</h6>
                            <p class="mb-0">
                                <i class="bi bi-calendar"></i> {{ $task->due_date->format('M d, Y') }}
                                @if($task->due_date->isPast() && $task->status !== 'completed')
                                    <span class="badge bg-danger ms-2">Overdue</span>
                                @endif
                            </p>
                        </div>
                    @endif

                    <div class="col-md-4">
                        <h6>Created:</h6>
                        <p class="mb-0">{{ $task->created_at->format('M d, Y g:i A') }}</p>
                    </div>
                </div>

                @if($task->updated_at != $task->created_at)
                    <div class="mb-4">
                        <small class="text-muted">
                            <i class="bi bi-clock"></i> Last updated: {{ $task->updated_at->format('M d, Y g:i A') }}
                        </small>
                    </div>
                @endif

                <div class="d-flex justify-content-between">
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Tasks
                    </a>
                    <div>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Edit Task
                        </a>
                        <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="d-inline ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this task?')">
                                <i class="bi bi-trash"></i> Delete Task
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
