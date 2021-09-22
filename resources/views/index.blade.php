@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col my-4">
            <form  method="post">
                @csrf
                <h3>Calculate
                </h3>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="my-4">

                    <label for="">အလေးချိန်</label>
                    <hr>
                </div>
                <div class="row g-3 ">
                  <div class="col">
                    <input type="text" name="kyat" class="form-control" placeholder="ကျပ်" aria-label="First name">

                  </div>
                  <div class="col">
                    <input type="text" name="pay" class="form-control" placeholder="ပဲ" aria-label="Last name">
                  </div>
                  <div class="col">
                    <input type="text" name="yway" class="form-control" placeholder="ရွေး" aria-label="Last name">
                  </div>
                    <hr>
                </div>
                <div class="my-4">

                    <label for="">လျော့တွက်</label>
                    <hr>
                </div>
                <div class="row g-3">


                    <div class="col">
                      <input type="text" name="ypay" class="form-control" placeholder="ပဲ" aria-label="Last name">
                    </div>
                    <div class="col">
                      <input type="text" name="yyway" class="form-control" placeholder="ရွေး" aria-label="Last name">
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
