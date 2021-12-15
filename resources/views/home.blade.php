@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

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
        margin: 2% 45% 0% 46%;
        padding: 3px;
    }
</style>

@endsection