<x-form-layout>
{{-- EDIT A TASK - because of route, then TasksController.php, calls function edit in TasksController.php,
    returns view of tasks.edit, which accesses resources/views/tasks/edit.blade.php   
--}}


{{-- DELETE A TASK --}}
<form class="tasks-form" method="POST" action="/orderissues/{{$information->id}}">
    @csrf
    @method('DELETE')
    <fieldset>
        <label for="ticket-id" class="sub-text">
            Ticket ID
            <p>{{$information['id']}}</p>
        </label>
    </fieldset>
    <fieldset>
    <label for="task" class="sub-text">
        Task
        <p>{{Str::limit($information['task'], 50)}}</p>
    </label>
    </fieldset>
    <fieldset>
    <label for="description" class="sub-text">
        Description
        <p>{{Str::limit($information['description'], 50)}}</p>
    </label>
    </fieldset>
    <label for="priority" class="sub-text">
        Priority
        <p>{{$information['priority']}}</p>
    </label>
    <fieldset>
    <label for="department" class="sub-text">
        Department
        <p>{{$information['department']}}</p>
    </label>
    </fieldset>
    <fieldset>
    <label for="responsible" class="sub-text">
        Responsible
        <p>{{$information['responsible']}}</p>
    </label>
    </fieldset>
    <fieldset>
    <label for="status" class="sub-text">
        Status
        <p>{{$information['status']}}</p>
    </label>
    </fieldset>
    
    <a class="btn btn-primary" href="/orderissues/{{$information->id}}/edit" role="button"><i class="uil uil-edit"></i> Edit</a>
    <button id="submit" type="submit" class="btn btn-danger"><i class="uil uil-trash"></i> Delete</button>
</form>
</x-form-layout>