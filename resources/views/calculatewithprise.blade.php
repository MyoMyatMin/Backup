@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col my-4">
            <form  method="post">
                @csrf
                <h3>Calculate
                </h3>
                @if (session('yes'))
                    <div class="alert alert-success">
                        {{session('last')}} ကျပ်
                    </div>
                    <div class="alert alert-success">
                        {{session('pay')}} ပဲ
                    </div>
                    <div class="alert alert-success">
                        {{session('yway')}} ရွေး
                    </div>
                @endif
                <div class="row g-3">
                    <div class="col">
                      <input type="text" name="price" class="form-control" placeholder="စေ◌ျးနှုန်း" aria-label="Last name">
                    </div>

                  </div>
                <div class="my-2 ">
                    <select  name="sign" class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Choose 14,15,16</option>
                      <option value="14">၁၄ပဲ</option>
                      <option value="15">၁၅ပဲ</option>
                      <option value="16">၁၆ပဲ</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Calculate</button>
            </form>
        </div>
    </div>
</div>
@endsection
