@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact Us</h1>
    <div class="form">
        <form class="contact-form">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="name">
            </div>

            <div class="form-group">
                <label for="inputCompany">Company</label>
                <input class="form-control" id="inputName" placeholder="company">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="email">
                <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enquiry</label>
                <textarea class="form-control" id="messageArea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
