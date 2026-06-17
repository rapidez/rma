@extends('rapidez::layouts.app')

@section('content')
<div class="container">
    <div class="grid gap-5">
        <label>
            <x-rapidez::label>@lang('Order ID')</x-rapidez::label>
            <x-rapidez::input name="order_id" />
        </label>
        <label>
            <x-rapidez::label>@lang('Last name')</x-rapidez::label>
            <x-rapidez::input name="lastname" />
        </label>
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input name="email" />
        </label>
    </div>

    ...
</div>
@endsection
