<x-form-layout>
    <form class="ltes-form" method="POST" action="/lte" enctype="multipart/form-data" id="add-task" name="add-task">
        @csrf
        <fieldset>
            <label class="sub-text" for="lteordertype">
                LTE Order Type
                <select id="lteordertype" name="lteordertype" class="m-t-xs">
                    <option value="New LTE Static IP" {{ old('lteordertype') == "New LTE Static IP" ? 'selected' : '' }}>New LTE w/Static IP</option>
                    <option value="New LTE Dynamic IP" {{ old('lteordertype') == "New LTE Dynamic IP" ? 'selected' : '' }}>New LTE w/Dynamic IP</option>
                    <option value="Update Existing LTE" {{ old('lteordertype') == "Update Existing LTE" ? 'selected' : '' }}>Update Existing LTE</option>
                    <option value="Disconnect LTE" {{ old('lteordertype') == "Disconnect LTE" ? 'selected' : '' }}>Disconnect LTE</option>
                    <option value="Service Inquiry Only" {{ old('lteordertype') == "Service Inquiry Only" ? 'selected' : '' }}>Service Inquiry Only</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="vendor" id="vendor">
                Vendor
                <select id="vendor" name="vendor" class="m-t-xs">
                    <option value="Verizon" {{ old('vendor') == "Verizon" ? 'selected' : '' }}>Verizon</option>
                    <option value="AT&T" {{ old('vendor') == "AT&T" ? 'selected' : '' }}>AT&T</option>
                    <option value="T-Mobile" {{ old('vendor') == "T-Mobile" ? 'selected' : '' }}>T-Mobile</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="iptype" id="iptype">
                IP Type
                <input class="" type="text" id="iptype" name="iptype" placeholder="" value="{{old('iptype')}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="pnsip" id="pnsip">
                Private Network Static IP
                <input class="" type="text" id="pnsip" name="pnsip" placeholder="" value="{{old('pnsip')}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="devicetype" id="devicetype">
                Device Type
                <select id="devicetype" name="devicetype" class="m-t-xs">
                    <option value="Meraki" {{ old('devicetype') == "Meraki" ? 'selected' : '' }}>Meraki</option>
                    <option value="Digi Device" {{ old('devicetype') == "Digi Device" ? 'selected' : '' }}>Digi Device</option>
                    <option value="USB620" {{ old('devicetype') == "USB620" ? 'selected' : '' }}>USB620</option>
                    <option value="OG" {{ old('devicetype') == "OG" ? 'selected' : '' }}>OG</option>
                    <option value="USB551L" {{ old('devicetype') == "USB551L" ? 'selected' : '' }}>USB551L</option>
                    <option value="CradlePoint - MC200LE" {{ old('devicetype') == "CradlePoint - MC200LE" ? 'selected' : '' }}>CradlePoint - MC200LE</option>
                    <option value="EHWIC-4G-LTE-V" {{ old('devicetype') == "EHWIC-4G-LTE-V" ? 'selected' : '' }}>EHWIC-4G-LTE-V</option>
                    <option value="Cisco - ISR G2 Router Series" {{ old('devicetype') == "Cisco - ISR G2 Router Series" ? 'selected' : '' }}>Cisco - ISR G2 Router Series</option>
                    <option value="Metrum - ECM" {{ old('devicetype') == "Metrum - ECM" ? 'selected' : '' }}>Metrum - ECM</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="deviceid" id="deviceid">
                Device ID
                <input class="" type="text" id="deviceid" name="deviceid" placeholder="" value="{{old('deviceid')}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="simid" id="simid">
                SIM ID
                <input class="" type="text" id="simid" name="simid" placeholder="" value="{{old('simid')}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="areacode" id="areacode">
                Area Code
                <input class="" type="text" id="areacode" name="areacode" placeholder="" value="609"/>
            </label>
            @error('areacode')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="opco" id="opco">
                OpCo
                <select id="opco" name="opco" class="m-t-xs">
                    <option value="Capital" {{ old('opco') == "Capital" ? 'selected' : '' }}>Capital</option>
                    <option value="Codale" {{ old('opco') == "Codale" ? 'selected' : '' }}>Codale</option>
                    <option value="Cooper" {{ old('opco') == "Cooper" ? 'selected' : '' }}>Cooper</option>
                    <option value="Crawford" {{ old('opco') == "Crawford" ? 'selected' : '' }}>Crawford</option>
                    <option value="Independent" {{ old('opco') == "Independent" ? 'selected' : '' }}>Independent</option>
                    <option value="Irby" {{ old('opco') == "Irby" ? 'selected' : '' }}>Irby</option>
                    <option value="North Coast" {{ old('opco') == "North Coast" ? 'selected' : '' }}>North Coast</option>
                    <option value="Northeast" {{ old('opco') == "Northeast" ? 'selected' : '' }}>Northeast</option>
                    <option value="OSD" {{ old('opco') == "OSD" ? 'selected' : '' }}>OSD</option>
                    <option value="QED" {{ old('opco') == "QED" ? 'selected' : '' }}>QED</option>
                    <option value="Viking" {{ old('opco') == "Viking" ? 'selected' : '' }}>Viking</option>
                    <option value="World" {{ old('opco') == "World" ? 'selected' : '' }}>World</option>
                    <option value="Rossin Energy Service" {{ old('opco') == "Rossin Energy Service" ? 'selected' : '' }}>Rossin Energy Service</option>
                    <option value="Industrial Specialties" {{ old('opco') == "Industrial Specialties" ? 'selected' : '' }}>Industrial Specialties</option>
                    <option value="Tommy White Supply" {{ old('opco') == "Tommy White Supply" ? 'selected' : '' }}>Tommy White Supply</option>
                    <option value="Springfield" {{ old('opco') == "Springfield" ? 'selected' : '' }}>Springfield</option>
                    <option value="Richards" {{ old('opco') == "Richards" ? 'selected' : '' }}>Richards</option>
                    <option value="Pepco" {{ old('opco') == "Pepco" ? 'selected' : '' }}>Pepco</option>
                    <option value="Billows Electric Supply" {{ old('opco') == "Billows Electric Supply" ? 'selected' : '' }}>Billows Electric Supply</option>
                </select>
            </label>
        </fieldset>
        
        <fieldset>
            <label class="sub-text" for="street" id="street">
                Street
                <input class="" type="text" id="street" name="street" placeholder="" value="{{old('street')}}"/>
            </label>
            @error('street')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="city" id="city">
                City
                <input class="" type="text" id="city" name="city" placeholder="" value="{{old('city')}}"/>
            </label>
            @error('city')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="state" id="state">
                State
                <select id="state" name="state" class="m-t-xs">
                    <option value="AL" {{ old('state') == "AL" ? 'selected' : '' }}>AL</option>
                    <option value="AK" {{ old('state') == "AK" ? 'selected' : '' }}>AK</option>
                    <option value="AZ" {{ old('state') == "AZ" ? 'selected' : '' }}>AZ</option>
                    <option value="AR" {{ old('state') == "AR" ? 'selected' : '' }}>AR</option>
                    <option value="CA" {{ old('state') == "CA" ? 'selected' : '' }}>CA</option>
                    <option value="CO" {{ old('state') == "CO" ? 'selected' : '' }}>CO</option>
                    <option value="CT" {{ old('state') == "CT" ? 'selected' : '' }}>CT</option>
                    <option value="DE" {{ old('state') == "DE" ? 'selected' : '' }}>DE</option>
                    <option value="FL" {{ old('state') == "FL" ? 'selected' : '' }}>FL</option>
                    <option value="GA" {{ old('state') == "GA" ? 'selected' : '' }}>GA</option>
                    <option value="HI" {{ old('state') == "HI" ? 'selected' : '' }}>HI</option>
                    <option value="ID" {{ old('state') == "ID" ? 'selected' : '' }}>ID</option>
                    <option value="IL" {{ old('state') == "IL" ? 'selected' : '' }}>IL</option>
                    <option value="IN" {{ old('state') == "IN" ? 'selected' : '' }}>IN</option>
                    <option value="IA" {{ old('state') == "IA" ? 'selected' : '' }}>IA</option>
                    <option value="KS" {{ old('state') == "KS" ? 'selected' : '' }}>KS</option>
                    <option value="KY" {{ old('state') == "KY" ? 'selected' : '' }}>KY</option>
                    <option value="LA" {{ old('state') == "LA" ? 'selected' : '' }}>LA</option>
                    <option value="ME" {{ old('state') == "ME" ? 'selected' : '' }}>ME</option>
                    <option value="MD" {{ old('state') == "MD" ? 'selected' : '' }}>MD</option>
                    <option value="MA" {{ old('state') == "MA" ? 'selected' : '' }}>MA</option>
                    <option value="MI" {{ old('state') == "MI" ? 'selected' : '' }}>MI</option>
                    <option value="MN" {{ old('state') == "MN" ? 'selected' : '' }}>MN</option>
                    <option value="MS" {{ old('state') == "MS" ? 'selected' : '' }}>MS</option>
                    <option value="MO" {{ old('state') == "MO" ? 'selected' : '' }}>MO</option>
                    <option value="MT" {{ old('state') == "MT" ? 'selected' : '' }}>MT</option>
                    <option value="NE" {{ old('state') == "NE" ? 'selected' : '' }}>NE</option>
                    <option value="NV" {{ old('state') == "NV" ? 'selected' : '' }}>NV</option>
                    <option value="NH" {{ old('state') == "NH" ? 'selected' : '' }}>NH</option>
                    <option value="NJ" {{ old('state') == "NJ" ? 'selected' : '' }}>NJ</option>
                    <option value="NM" {{ old('state') == "NM" ? 'selected' : '' }}>NM</option>
                    <option value="NY" {{ old('state') == "NY" ? 'selected' : '' }}>NY</option>
                    <option value="NC" {{ old('state') == "NC" ? 'selected' : '' }}>NC</option>
                    <option value="ND" {{ old('state') == "ND" ? 'selected' : '' }}>ND</option>
                    <option value="OH" {{ old('state') == "OH" ? 'selected' : '' }}>OH</option>
                    <option value="OK" {{ old('state') == "OK" ? 'selected' : '' }}>OK</option>
                    <option value="OR" {{ old('state') == "OR" ? 'selected' : '' }}>OR</option>
                    <option value="PA" {{ old('state') == "PA" ? 'selected' : '' }}>PA</option>
                    <option value="RI" {{ old('state') == "RI" ? 'selected' : '' }}>RI</option>
                    <option value="SC" {{ old('state') == "SC" ? 'selected' : '' }}>SC</option>
                    <option value="SD" {{ old('state') == "SD" ? 'selected' : '' }}>SD</option>
                    <option value="TN" {{ old('state') == "TN" ? 'selected' : '' }}>TN</option>
                    <option value="TX" {{ old('state') == "TX" ? 'selected' : '' }}>TX</option>
                    <option value="UT" {{ old('state') == "UT" ? 'selected' : '' }}>UT</option>
                    <option value="VT" {{ old('state') == "VT" ? 'selected' : '' }}>VT</option>
                    <option value="VA" {{ old('state') == "VA" ? 'selected' : '' }}>VA</option>
                    <option value="WA" {{ old('state') == "WA" ? 'selected' : '' }}>WA</option>
                    <option value="WV" {{ old('state') == "WV" ? 'selected' : '' }}>WV</option>
                    <option value="WI" {{ old('state') == "WI" ? 'selected' : '' }}>WI</option>
                    <option value="WY" {{ old('state') == "WY" ? 'selected' : '' }}>WY</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="zip" id="zip">
                Zip
                <input class="" type="text" id="zip" name="zip" placeholder="" value="{{old('zip')}}"/>
            </label>
            @error('zip')
                <p class="error-text">{{$message}}</p>
            @enderror
        </fieldset>

        <fieldset>
            <label class="sub-text" for="customerdiv" id="customerdiv">
                Customer/Division
                <input class="" type="text" id="customerdiv" name="customerdiv" placeholder="" value="{{old('customerdiv')}}"/>
            </label>
        </fieldset>

        <fieldset>
            <label class="sub-text" for="mobilenumber" id="mobilenumber">
                Mobile Number
                <input class="" type="text" id="mobilenumber" name="mobilenumber" placeholder="" value="{{old('mobilenumber')}}"/>
            </label>
        </fieldset>
        
        <button id="submit" type="submit" class="submit">Submit Ticket</button>
    </form>
</x-form-layout>