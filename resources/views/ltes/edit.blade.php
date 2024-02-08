<x-form-layout>
    <form class="ltes-form" method="POST" action="/lte/{{$information->id}}" enctype="multipart/form-data" id="add-ltes" name="add-ltes">
        @csrf
        @method('PUT')
        <fieldset>
            <label class="sub-text" for="lteordertype">
                LTE Order Type
                <select id="lteordertype" name="lteordertype" class="m-t-xs">
                    <option value="New LTE Static IP" {{ $information->lteordertype == "New LTE Static IP" ? 'selected' : '' }}>New LTE w/Static IP</option>
                    <option value="New LTE Dynamic IP" {{ $information->lteordertype == "New LTE Dynamic IP" ? 'selected' : '' }}>New LTE w/Dynamic IP</option>
                    <option value="Update Existing LTE" {{ $information->lteordertype == "Update Existing LTE" ? 'selected' : '' }}>Update Existing LTE</option>
                    <option value="Disconnect LTE" {{ $information->lteordertype == "Disconnect LTE" ? 'selected' : '' }}>Disconnect LTE</option>
                    <option value="Service Inquiry Only" {{ $information->lteordertype == "Service Inquiry Only" ? 'selected' : '' }}>Service Inquiry Only</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="vendor">
                Vendor
                <select id="vendor" name="vendor" class="m-t-xs">
                    <option value="Verizon" {{ $information->vendor == "Verizon" ? 'selected' : '' }}>Verizon</option>
                    <option value="AT&T" {{ $information->vendor == "AT&T" ? 'selected' : '' }}>AT&T</option>
                    <option value="T-Mobile" {{ $information->vendor == "T-Mobile" ? 'selected' : '' }}>T-Mobile</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="iptype" id="iptype-label">
                IP Type
                <input class="" type="text" id="iptype" name="iptype" placeholder="" value="{{$information->iptype}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="pnsip" id="pnsip-label">
                Private Network Static IP
                <input class="" type="text" id="pnsip" name="pnsip" placeholder="" value="{{$information->pnsip}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="devicetype">
                Device Type
                <select id="devicetype" name="devicetype" class="m-t-xs">
                    <option value="Meraki" {{ $information->devicetype == "Meraki" ? 'selected' : '' }}>Meraki</option>
                    <option value="Digi Device" {{ $information->devicetype == "Digi Device" ? 'selected' : '' }}>Digi Device</option>
                    <option value="USB620" {{ $information->devicetype == "USB620" ? 'selected' : '' }}>USB620</option>
                    <option value="OG" {{ $information->devicetype == "OG" ? 'selected' : '' }}>OG</option>
                    <option value="USB551L" {{ $information->devicetype == "USB551L" ? 'selected' : '' }}>USB551L</option>
                    <option value="CradlePoint - MC200LE" {{ $information->devicetype == "CradlePoint - MC200LE" ? 'selected' : '' }}>CradlePoint - MC200LE</option>
                    <option value="EHWIC-4G-LTE-V" {{ $information->devicetype == "EHWIC-4G-LTE-V" ? 'selected' : '' }}>EHWIC-4G-LTE-V</option>
                    <option value="Cisco - ISR G2 Router Series" {{ $information->devicetype == "Cisco - ISR G2 Router Series" ? 'selected' : '' }}>Cisco - ISR G2 Router Series</option>
                    <option value="Metrum - ECM" {{ $information->devicetype == "Metrum - ECM" ? 'selected' : '' }}>Metrum - ECM</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="deviceid" id="deviceid-label">
                Device ID
                <input class="" type="text" id="deviceid" name="deviceid" placeholder="" value="{{$information->deviceid}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="simid" id="simid-label">
                SIM ID
                <input class="" type="text" id="simid" name="simid" placeholder="" value="{{$information->simid}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="areacode" id="areacode-label">
                Area Code
                <input class="" type="text" id="areacode" name="areacode" placeholder="" value="609"/>
            </label>
            @error('areacode')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="opco">
                OpCo
                <select id="opco" name="opco" class="m-t-xs">
                    <option value="Capital" {{ $information->opco == "Capital" ? 'selected' : '' }}>Capital</option>
                    <option value="Codale" {{ $information->opco == "Codale" ? 'selected' : '' }}>Codale</option>
                    <option value="Cooper" {{ $information->opco == "Cooper" ? 'selected' : '' }}>Cooper</option>
                    <option value="Crawford" {{ $information->opco == "Crawford" ? 'selected' : '' }}>Crawford</option>
                    <option value="Independent" {{ $information->opco == "Independent" ? 'selected' : '' }}>Independent</option>
                    <option value="Irby" {{ $information->opco == "Irby" ? 'selected' : '' }}>Irby</option>
                    <option value="North Coast" {{ $information->opco == "North Coast" ? 'selected' : '' }}>North Coast</option>
                    <option value="Northeast" {{ $information->opco == "Northeast" ? 'selected' : '' }}>Northeast</option>
                    <option value="OSD" {{ $information->opco == "OSD" ? 'selected' : '' }}>OSD</option>
                    <option value="QED" {{ $information->opco == "QED" ? 'selected' : '' }}>QED</option>
                    <option value="Viking" {{ $information->opco == "Viking" ? 'selected' : '' }}>Viking</option>
                    <option value="World" {{ $information->opco == "World" ? 'selected' : '' }}>World</option>
                    <option value="Rossin Energy Service" {{ $information->opco == "Rossin Energy Service" ? 'selected' : '' }}>Rossin Energy Service</option>
                    <option value="Industrial Specialties" {{ $information->opco == "Industrial Specialties" ? 'selected' : '' }}>Industrial Specialties</option>
                    <option value="Tommy White Supply" {{ $information->opco == "Tommy White Supply" ? 'selected' : '' }}>Tommy White Supply</option>
                    <option value="Springfield" {{ $information->opco == "Springfield" ? 'selected' : '' }}>Springfield</option>
                    <option value="Richards" {{ $information->opco == "Richards" ? 'selected' : '' }}>Richards</option>
                    <option value="Pepco" {{ $information->opco == "Pepco" ? 'selected' : '' }}>Pepco</option>
                    <option value="Billows Electric Supply" {{ $information->opco == "Billows Electric Supply" ? 'selected' : '' }}>Billows Electric Supply</option>
                </select>
            </label>
        </fieldset>
        
        <fieldset>
            <label class="sub-text" for="street" id="street-label">
                Street
                <input class="" type="text" id="street" name="street" placeholder="" value="{{$information->street}}"/>
            </label>
            @error('street')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="city" id="city-label">
                City
                <input class="" type="text" id="city" name="city" placeholder="" value="{{$information->city}}"/>
            </label>
            @error('city')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="state">
                State
                <select id="state" name="state" class="m-t-xs">
                    <option value="AL" {{ $information->state == "AL" ? 'selected' : '' }}>AL</option>
                    <option value="AK" {{ $information->state == "AK" ? 'selected' : '' }}>AK</option>
                    <option value="AZ" {{ $information->state == "AZ" ? 'selected' : '' }}>AZ</option>
                    <option value="AR" {{ $information->state == "AR" ? 'selected' : '' }}>AR</option>
                    <option value="CA" {{ $information->state == "CA" ? 'selected' : '' }}>CA</option>
                    <option value="CO" {{ $information->state == "CO" ? 'selected' : '' }}>CO</option>
                    <option value="CT" {{ $information->state == "CT" ? 'selected' : '' }}>CT</option>
                    <option value="DE" {{ $information->state == "DE" ? 'selected' : '' }}>DE</option>
                    <option value="FL" {{ $information->state == "FL" ? 'selected' : '' }}>FL</option>
                    <option value="GA" {{ $information->state == "GA" ? 'selected' : '' }}>GA</option>
                    <option value="HI" {{ $information->state == "HI" ? 'selected' : '' }}>HI</option>
                    <option value="ID" {{ $information->state == "ID" ? 'selected' : '' }}>ID</option>
                    <option value="IL" {{ $information->state == "IL" ? 'selected' : '' }}>IL</option>
                    <option value="IN" {{ $information->state == "IN" ? 'selected' : '' }}>IN</option>
                    <option value="IA" {{ $information->state == "IA" ? 'selected' : '' }}>IA</option>
                    <option value="KS" {{ $information->state == "KS" ? 'selected' : '' }}>KS</option>
                    <option value="KY" {{ $information->state == "KY" ? 'selected' : '' }}>KY</option>
                    <option value="LA" {{ $information->state == "LA" ? 'selected' : '' }}>LA</option>
                    <option value="ME" {{ $information->state == "ME" ? 'selected' : '' }}>ME</option>
                    <option value="MD" {{ $information->state == "MD" ? 'selected' : '' }}>MD</option>
                    <option value="MA" {{ $information->state == "MA" ? 'selected' : '' }}>MA</option>
                    <option value="MI" {{ $information->state == "MI" ? 'selected' : '' }}>MI</option>
                    <option value="MN" {{ $information->state == "MN" ? 'selected' : '' }}>MN</option>
                    <option value="MS" {{ $information->state == "MS" ? 'selected' : '' }}>MS</option>
                    <option value="MO" {{ $information->state == "MO" ? 'selected' : '' }}>MO</option>
                    <option value="MT" {{ $information->state == "MT" ? 'selected' : '' }}>MT</option>
                    <option value="NE" {{ $information->state == "NE" ? 'selected' : '' }}>NE</option>
                    <option value="NV" {{ $information->state == "NV" ? 'selected' : '' }}>NV</option>
                    <option value="NH" {{ $information->state == "NH" ? 'selected' : '' }}>NH</option>
                    <option value="NJ" {{ $information->state == "NJ" ? 'selected' : '' }}>NJ</option>
                    <option value="NM" {{ $information->state == "NM" ? 'selected' : '' }}>NM</option>
                    <option value="NY" {{ $information->state == "NY" ? 'selected' : '' }}>NY</option>
                    <option value="NC" {{ $information->state == "NC" ? 'selected' : '' }}>NC</option>
                    <option value="ND" {{ $information->state == "ND" ? 'selected' : '' }}>ND</option>
                    <option value="OH" {{ $information->state == "OH" ? 'selected' : '' }}>OH</option>
                    <option value="OK" {{ $information->state == "OK" ? 'selected' : '' }}>OK</option>
                    <option value="OR" {{ $information->state == "OR" ? 'selected' : '' }}>OR</option>
                    <option value="PA" {{ $information->state == "PA" ? 'selected' : '' }}>PA</option>
                    <option value="RI" {{ $information->state == "RI" ? 'selected' : '' }}>RI</option>
                    <option value="SC" {{ $information->state == "SC" ? 'selected' : '' }}>SC</option>
                    <option value="SD" {{ $information->state == "SD" ? 'selected' : '' }}>SD</option>
                    <option value="TN" {{ $information->state == "TN" ? 'selected' : '' }}>TN</option>
                    <option value="TX" {{ $information->state == "TX" ? 'selected' : '' }}>TX</option>
                    <option value="UT" {{ $information->state == "UT" ? 'selected' : '' }}>UT</option>
                    <option value="VT" {{ $information->state == "VT" ? 'selected' : '' }}>VT</option>
                    <option value="VA" {{ $information->state == "VA" ? 'selected' : '' }}>VA</option>
                    <option value="WA" {{ $information->state == "WA" ? 'selected' : '' }}>WA</option>
                    <option value="WV" {{ $information->state == "WV" ? 'selected' : '' }}>WV</option>
                    <option value="WI" {{ $information->state == "WI" ? 'selected' : '' }}>WI</option>
                    <option value="WY" {{ $information->state == "WY" ? 'selected' : '' }}>WY</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="zip" id="zip-label">
                Zip
                <input class="" type="text" id="zip" name="zip" placeholder="" value="{{$information->zip}}"/>
            </label>
            @error('zip')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="customerdiv" id="customerdiv-label">
                Customer/Division
                <input class="" type="text" id="customerdiv" name="customerdiv" placeholder="" value="{{$information->customerdiv}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="mobilenumber" id="mobilenumber-label">
                Mobile Number
                <input class="" type="text" id="mobilenumber" name="mobilenumber" placeholder="" value="{{$information->mobilenumber}}"/>
            </label>
        </fieldset>
        
        <button id="submit" type="submit" class="submit">Submit Ticket</button>
    </form>
</x-form-layout>