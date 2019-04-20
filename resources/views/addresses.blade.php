@extends('layouts.app')

@section('content')

    <div class="uo_header">
        <div class="wrapper cf">
            <div class="wbox ava">
                <figure><img src="imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
            </div>
            <div class="main_info">
                <h1>Helena Afrassiabi</h1>
                <div class="midbox">
                    <h4>560 points</h4>
                    <div class="info_nav">
                        <a href="#">Get Free Points</a>
                        <span class="sepor"></span>
                        <a href="#">Win iPad</a>
                    </div>
                </div>
                <div class="stat">
                    <div class="item">
                        <div class="num">30</div>
                        <div class="title">total orders</div>
                    </div>
                    <div class="item">
                        <div class="num">14</div>
                        <div class="title">total reviews</div>
                    </div>
                    <div class="item">
                        <div class="num">0</div>
                        <div class="title">total gifts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uo_body">
        <div class="wrapper">
            <div class="uofb cf">
                <div class="l_col adrs">
                    <h2>Add New Address</h2>

                    <form action="{{ route('addresses.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label>Name *</label>
                            <input type="text" value="" id="name" name="name" placeholder="Name" class="vl_empty" />
                        </div>
                        <div class="field">
                            <label>Your city *</label>
                            <select class="vl_empty" id="city" name="city">
                                <option class="plh"></option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field">
                            <label>Your area *</label>
                            <select id="area" name="area">
                                <option class="plh"></option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="field">
                            <label>Street</label>
                            <input type="text" value="" id="street" name="street" placeholder="Street" class="vl_empty" />
                        </div>
                        <div class="field">
                            <label>House # </label>
                            <input type="text" value="" id="house" name="house" placeholder="House Name / Number" />
                        </div>

                        <div class="field">
                            <label class="pos_top">Additional information</label>
                            <textarea id="info" name="info"></textarea>
                        </div>

                        <div class="field">
                            <input type="submit" value="add address" class="green_btn" />
                        </div>
                    </form>
                </div>

                <div class="r_col">
                    <h2>My Addresses</h2>

                    <div class="uo_adr_list">
                        @foreach($addresses as $address)
                            <div class="item">
                                <h3>{{ $address->name }}</h3>
                                <p>
                                    {{ $address->city }},
                                    {{ $address->area }},
                                    {{ $address->street }},
                                    {{ $address->house }},
                                    {{ $address->info }}
                                </p>
                                <div class="actbox">
                                    <a href="#" class="bcross"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection