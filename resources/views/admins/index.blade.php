<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('public/css/login.css')}}?nocache=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css">
</head>

<body>
    <div class="pagetop">
        <div class="dropdown">
            <button class="dropbtn">
                @if(App::getLocale() == 'vi')
                <span class="flag-icon flag-icon-vn mr-2"></span>
                @elseif(App::getLocale() == 'en')
                <span class="flag-icon flag-icon-us mr-2"></span>
                @elseif(App::getLocale() == 'ja')
                <span class="flag-icon flag-icon-jp mr-2"></span>
                @else
                <span class="flag-icon flag-icon-{{App::getLocale()}} mr-2"></span>
                @endif
            </button>
            <div class="dropdown-content">
                @foreach($languages as $lang)
                @foreach(PeterColes\Languages\LanguagesFacade::lookup('major',App::getLocale()) as $key=>$language)
                @if($lang == $key)
                @if ($lang != App::getLocale())
                @if($lang == 'vi')
                <a href="{{ route('language', [$lang]) }}" class="dropdown-item"><span
                        class="flag-icon flag-icon-vn mr-2"></span> {{$language}}
                </a>
                @elseif($lang == 'en')
                <a a href="{{ route('language', [$lang]) }}" class="dropdown-item"><span
                        class="flag-icon flag-icon-us mr-2"></span> {{$language}}
                </a>
                @elseif($lang == 'ja')
                <a a href="{{ route('language', [$lang]) }}" class="dropdown-item"><span
                        class="flag-icon flag-icon-jp mr-2"></span> {{$language}}
                </a>
                @else
                <a href="{{ route('language', [$lang]) }}" class="dropdown-item"><span
                        class="flag-icon flag-icon-{{$lang}} mr-2"></span> {{$language}}
                </a>
                @endif
                @endif
                @endif
                @endforeach
                @endforeach
            </div>
        </div>
        <div>
            <a href="{{ route('languages.create') }}">THÊM NGÔN NGỮ</a>
        </div>
    </div>
    <div class="messenge">
    </div>
    <div class="login">
        <form action="{{ route('page.login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- {{ csrf_field() }} -->
            <div class=" container">
                <h1>{{ __('messages.Formlogin') }}</h1>
                <label id="uname"><b>{{ __('messages.Username') }}</b></label>
                <input type="text" placeholder="Enter Username" name="name">
                <div>
                    <?php
                // if (!empty($messeger) ){
                //     if ($messeger == 101) {
                //         echo "Yêu Cầu Nhập Name Hoặc Pass";
                //     }
                // }
                ?>
                </div>
                <label id="psw"><b>{{ __('messages.Password') }}</b></label>
                <input type="password" placeholder="Enter Password" name="pass">

                <div class="form-group ">
                    <label for="exampleInputPassword1">image</label>
                    <input type="file" class="form-control" placeholder="Password" name="image">
                    @error('manufacturing_company')
                    <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit">{{ __('messages.Login') }}</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">{{ __('messages.Rememberme') }}
                </label>
            </div>
        </form>
    </div>
</body>

</html>