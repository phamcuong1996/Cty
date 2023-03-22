@extends('shared.dashboard')

@section('content')
<div class="card-body">
    <div class="row">
        <div class="col-6 col-md-3 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="30"
                    data-width="90" data-height="90" data-fgcolor="#3c8dbc"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">New Visitors</div>
        </div>

        <div class="col-6 col-md-3 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="70"
                    data-width="90" data-height="90" data-fgcolor="#f56954"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(245, 105, 84); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">Bounce Rate</div>
        </div>

        <div class="col-6 col-md-3 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="-80"
                    data-min="-150" data-max="150" data-width="90" data-height="90" data-fgcolor="#00a65a"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 166, 90); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">Server Load</div>
        </div>

        <div class="col-6 col-md-3 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="40"
                    data-width="90" data-height="90" data-fgcolor="#00c0ef"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 192, 239); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">Disk Space</div>
        </div>

    </div>

    <div class="row">
        <div class="col-6 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="90"
                    data-width="90" data-height="90" data-fgcolor="#932ab6"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(147, 42, 182); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">Bandwidth</div>
        </div>

        <div class="col-6 text-center">
            <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112"
                    style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="50"
                    data-width="90" data-height="90" data-fgcolor="#39CCCC"
                    style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
            </div>
            <div class="knob-label">CPU</div>
        </div>

    </div>

</div>

@endsection('content')