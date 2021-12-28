<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an admin!
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/x.y.z/knockout-min.js"></script>
    <form action="save-korisnika" method="POST" class="center">
        @csrf
        <style scoped>
            label {
                display: inline-block;
                width: 130px;
            }

            label.required:after {
                content: " *";
                color: red;
            }

            fieldset {
                width: 500px;
                padding: 1em;
                border: 3px solid #CCC;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%);
            }

            input {
                margin: 1px 5px 1px 5px;
                width: 145px;
                padding: 3px;
                border-width: 2px;
            }

            input.long {
                width: 300px
            }

            div.button {
                margin-top: 1em;
                text-align: center;
            }
        </style>
        @if(session()->has("success"))
        <h3>{{ session("success")}}</h3>
        @endif

        <fieldset>
            <legend> Contacts </legend>
            <div>
                <label>First/ Last Name</label>
                <input type="text" name="name" id="first-name" /><input type="text" name="lastname" id="lastName" />
            </div>
            <div>
                <label>Phone Numbers</label>
                <input placeholder="Mobile" name="mobile" id="mobile" type="tel" /><input id="home" name="home" type="tel" />
            </div>
            <div>
                <label></label>
                <input placeholder="Home" id="home" name="home" type="tel" /><input id="mobile" name="mobile" type="tel" />
            </div>
            <div>
                <label>First/ Last Name</label>
                <input type="text" id="first-name" name="name" /><input name="lastname" type="text" />
            </div>
            <div>
                <label>Phone Numbers</label>
                <input placeholder="Mobile" name="mobile" id="mobile" type="tel" /><input id="home" name="home" type="tel" />
            </div>
            <div>
                <label></label>
                <input placeholder="Home" id="home" name="home" type="tel" /><input id="mobile" name="mobile" type="tel" />
            </div>

            <div class="button">
                <button data-bind="click: submit">Add a contact</button>
            </div>


        </fieldset>


    </form>
    <div>
        <button id="lista" onclick="window.location='{{ url("list-data") }}'">List of contacts</button>
    </div>
    <style>
        #lista {
            background-color: grey;
            margin-left: 30%;
            padding: 3px;
        }
    </style>



</x-app-layout>