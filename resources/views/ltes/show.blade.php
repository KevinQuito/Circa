<x-form-layout>
    {{-- EDIT A TASK - because of route, then TasksController.php, calls function edit in TasksController.php,
        returns view of tasks.edit, which accesses resources/views/tasks/edit.blade.php   
    --}}
    
    
    {{-- DELETE A TASK --}}
    <form class="ltes-form" method="POST" action="/lte/{{$information->id}}">
        @csrf
        @method('DELETE')
        <fieldset>
            <label for="ticket-id" class="sub-text">
                Ticket ID
                <p>{{$information['id']}}</p>
            </label>
        </fieldset>
        <fieldset>
        <label for="lteorder" class="sub-text">
            Lte Order
            <p>{{$information['lteordertype']}}</p>
        </label>
        </fieldset>
        <fieldset>
        <label for="vendor" class="sub-text">
            Vendor
            <p>{{$information['vendor']}}</p>
        </label>
        </fieldset>
        <label for="opco" class="sub-text">
            Priority
            <p>{{$information['opco']}}</p>
        </label>
        <fieldset>
        <label for="street" class="sub-text">
            Street
            <p>{{$information['street']}}</p>
        </label>
        </fieldset>
        <fieldset>
        <label for="city" class="sub-text">
            City
            <p>{{$information['city']}}</p>
        </label>
        </fieldset>
        <fieldset>
        <label for="state" class="sub-text">
            State
            <p>{{$information['state']}}</p>
        </label>
        </fieldset>
        <fieldset>
        <label for="zip" class="sub-text">
            Zip
        <p>{{$information['zip']}}</p>
        </label>
        </fieldset>
        
        <a class="btn btn-primary" href="/lte/{{$information->id}}/edit" role="button"><i class="uil uil-edit"></i> Edit</a>
        <button id="submit" type="submit" class="btn btn-danger"><i class="uil uil-trash"></i> Delete</button>
    </form>
    </x-form-layout>