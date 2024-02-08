<x-form-layout>
    <form class="tasks-form" method="POST" action="/orderissues" enctype="multipart/form-data" id="add-task" name="add-task">
        @csrf
        <div class="title">Create Ticket</div>
        <label for="priority" class="sub-text">
            Priority
        <label class="sub-text">
        <input type="radio" name="priority" value="Low" checked {{ old('priority') == "Low" ? 'checked' : '' }}/> Low
        </label>
        <label class="sub-text">
        <input type="radio" name="priority" value="Medium" {{ old('priority') == "Medium" ? 'checked' : '' }}/> Medium
        </label>
        <label class="sub-text">
        <input type="radio" name="priority" value="High" {{ old('priority') == "High" ? 'checked' : '' }}/> High
        </label>
        </label>
        
        <label for="department" class="sub-text">
            Department
            <select id="department" name="department" class="m-t-xs">
                <option value="Billing" selected {{ old('department') == "Billing" ? 'selected' : '' }}>Billing</option>
                <option value="Cyber Security" {{ old('department') == "Cyber Security" ? 'selected' : '' }}>Cyber Security</option>
                <option value="VoIP Engineers" {{ old('department') == "VoIP Engineers" ? 'selected' : '' }}>VoIP Engineers</option>
                <option value="Network Engineers" {{ old('department') == "Network Engineers" ? 'selected' : '' }}>Network Engineers</option>
                <option value="Other" {{ old('department') == "Other" ? 'selected' : '' }}>Other</option>
            </select>
        </label>
        
        <fieldset>
        <label for="responsible" class="sub-text">
            Responsible
            <select id="responsible" name="responsible" class="m-t-xs">
                <option value="Kevin" selected {{ old('responsible') == "Kevin" ? 'selected' : '' }}>Kevin</option>
                <option value="Sam" {{ old('responsible') == "Sam" ? 'selected' : '' }}>Sam</option>
                <option value="John" {{ old('responsible') == "John" ? 'selected' : '' }}>John</option>
                <option value="Luffy" {{ old('responsible') == "Luffy" ? 'selected' : '' }}>Luffy</option>
            </select>
        </label>
        </fieldset>
        <fieldset>
            <label for="status" class="sub-text">
                Status
                <select id="status" name="status" class="m-t-xs">
                    <option value="In Progress" selected {{old('status') == "In Progress" ? 'selected' : '' }}>In Progress</option>
                    <option value="On Hold" {{old('status') == "On Hold" ? 'selected' : '' }}>On Hold</option>
                    <option value="Complete" {{old('status') == "Complete" ? 'selected' : '' }}>Complete</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label for="attachments" id="attachments" class="sub-text">
                Attachments
            </label>
            <input type="file" id="attachments" name="attachments" class="sub-text"/>
            @error('attachments')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>
        <fieldset>
            <label for="task" id="task-label" class="sub-text">
                Task
                <input class="" type="text" id="task" name="task" placeholder="" value="{{old('task')}}"/>
            </label>
            @error('task')
                <p class="error-text">{{$message}}</p>
            @enderror
            <fieldset>
                <label for="description" class="sub-text">
                Description
                <textarea rows="5" cols="30" id="description" name="description" maxlength="800">{{old('description')}}</textarea>
                </label>
                @error('description')
                    <p class="error-text">{{$message}}</p>
                @enderror
            </fieldset>
        </fieldset>
        
        <button id="submit" type="submit" class="submit">Submit Ticket</button>
    </form>
</x-form-layout>