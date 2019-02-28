@extends('layouts.app')
@section('styling')
    <link href="css/main.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
@endsection
@section('title', "What's your plan?")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="c_header">What do you want to do?</div><br />
                <div class="">
                    <form method="POST" action="/to_do/new">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Pick the day</label>
                            <div class="col-md-6">
                                <input class="radio" type="radio" name="what_day" value="monday"> monday<br />
                                <input class="radio" type="radio" name="what_day" value="tuesday"> tuesday <br />
                                <input class="radio" type="radio" name="what_day" value="wednesday"> wednesday <br />
                                <input class="radio" type="radio" name="what_day" value="thursday"> thursday <br />
                                <input class="radio" type="radio" name="what_day" value="friday"> friday <br />
                                <input class="radio" type="radio" name="what_day" value="saturday"> saturday <br />
                                <input class="radio" type="radio" name="what_day" value="sunday"> sunday <br />
                            </div>
                        </div><br />
                        <div class="form-group row">
                            <label for="where_to" class="col-md-4 col-form-label text-md-right">where do you want to go?</label>
                            <div class="col-md-6">
                                <input type="text" placeholder="bar...restaurant...beach..." class="where_to" name="where_to" value="" required>
                            </div>
                        </div><br />
                        <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">what do you want to do?</label>
    
                                <div class="col-md-6">
                                    <input type="text" placeholder="tell me what you want to do..." class="what_to_do" name="what_to_do" value="">
                                </div>
                            </div><br />
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button_1">
                                    Let's do this!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
