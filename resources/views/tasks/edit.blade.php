<x-form-layout>
    <form class="tasks-form" method="POST" action="/orderissues/{{$information->id}}" enctype="multipart/form-data" id="edit-task" name="edit-task">
        @csrf
        @method('PUT')
        <div class="title">Edit Ticket</div>
        <label for="priority" class="sub-text">
            Priority
        <label class="sub-text">
        <input type="radio" name="priority" value="Low" {{$information->priority == "Low" ? 'checked' : '' }}/> Low
        </label>
        <label class="sub-text">
        <input type="radio" name="priority" value="Medium" {{$information->priority == "Medium" ? 'checked' : '' }}/> Medium
        </label>
        <label class="sub-text">
        <input type="radio" name="priority" value="High" {{$information->priority == "High" ? 'checked' : '' }}/> High
        </label>
        </label>
        
        <label for="department" class="sub-text">
            Department
            <select id="department" name="department" class="m-t-xs">
                <option value="Billing" {{$information->department == "Billing" ? 'selected' : '' }}>Billing</option>
                <option value="Cyber Security" {{$information->department == "Cyber Security" ? 'selected' : '' }}>Cyber Security</option>
                <option value="Voip Engineers" {{$information->department == "Voip Engineers" ? 'selected' : '' }}>VoIP Engineers</option>
                <option value="Network Engineers" {{$information->department == "Network Engineers" ? 'selected' : '' }}>Network Engineers</option>
                <option value="Other" {{$information->department == "Other" ? 'selected' : '' }}>Other</option>
            </select>
        </label>
        
        <fieldset>
            <label for="responsible" class="sub-text">
                Responsible
                <select id="responsible" name="responsible" class="m-t-xs">
                    <option value="Kevin" selected {{$information->responsible == "Kevin" ? 'selected' : '' }}>Kevin</option>
                    <option value="Sam" {{$information->responsible == "Sam" ? 'selected' : '' }}>Sam</option>
                    <option value="John" {{$information->responsible == "John" ? 'selected' : '' }}>John</option>
                    <option value="Luffy" {{$information->responsible == "Luffy" ? 'selected' : '' }}>Luffy</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label for="status" class="sub-text">
                Status
                <select id="status" name="status" class="m-t-xs">
                    <option value="In Progress" selected {{$information->status == "In Progress" ? 'selected' : '' }}>In Progress</option>
                    <option value="On Hold" {{$information->status == "On Hold" ? 'selected' : '' }}>On Hold</option>
                    <option value="Complete" {{$information->status == "Complete" ? 'selected' : '' }}>Complete</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label for="attachments" id="attachments" class="sub-text">
                Attachments
            </label>
            <input type="file" id="attachments" name="attachments" class="sub-text" value="{{$information->attachments}}"/>
            @error('attachments')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset>
            <label for="task" id="task-label" class="sub-text">
                Task
                <input class="" type="text" id="task" name="task" placeholder="" value="{{$information->task}}"/>
            </label>
            @error('task')
                <p class="error-text">{{$message}}</p>
            @enderror
            <fieldset>
                <label for="description" class="sub-text">
                Description
                <textarea rows="5" cols="30" id="description" name="description" maxlength="800">{{$information->description}}</textarea>
                </label>
                @error('description')
                    <p class="error-text">{{$message}}</p>
                @enderror
            </fieldset>
        </fieldset>
        
        <button id="submit" type="submit" class="submit">Update Ticket</button>
    </form>
</x-form-layout>