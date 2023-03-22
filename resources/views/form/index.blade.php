<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!--    title tren browser-->
    <title>BAITAP1</title>
    <!--    hien thi cac ky tu ma hoa duoi dang utf8-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <!--    ho tro trinh duyet tren windown IE hoac Edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    lien ket tren smartphone voi telephone number-->
    <meta name="format-detection" content="telephone=no">
    <!--    setting icon-->
    <link rel="apple-touch-icon" href="/image/images.png">
    <link rel="shortcut icon" href="/image/images.png">
    <!--    link file css-->
    <!-- <link rel="stylesheet" href="{{mix('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/form.css')}}">
    <link rel="stylesheet" href="{{mix('css/tailwind.min.css')}}"> -->
    
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{mix('font/css/all.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- setting js -->

    <script src="{{mix('js/jquery.min.js')}}"></script>
    <script src="{{mix('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{mix('js/select2.full.min.js')}}"></script>
    <script src="{{mix('js/moment.min.js')}}"></script>
    <script src="{{mix('js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container p-0 mt-5 w-50">
        <div class="row justify-content-center border border-primary rounded">
            <div class="header bg-secondary col-md-12">
                <div class="p-3">
                    <span>Register</span>
                </div>
            </div>
            <div class="col-md-8">
                <form action="{{ route('form1.index') }}" method="POST" enctype="multipart/form-data" class="px-2 py-3">
                    <div class="row mb-3 test">
                        <label for="ten" class="text-right col-md-3 col-form-label">Ten</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control abc" name="ten">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sinhnhat" class="text-right col-md-3 col-form-label">Sinh Nhat</label>
                        <div class="col-md-8">
                            <!-- <input type="text" class="form-control" name="sinhnhat" id="datepicker"> -->
                            <div class="form-group">
                                <div class="input-group date" id="sinhnhat" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#sinhnhat" />
                                    <div class="input-group-append" data-target="#sinhnhat"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gioitinh" class="text-right col-md-3 col-form-label">Gioi tinh</label>
                        <div class="col-md-8">
                            <div class="icheck-primary icheck-inline">
                                <input type="checkbox" id="nam">
                                <label for="nam">Nam</label>
                            </div>
                            <div class="icheck-danger icheck-inline">
                                <input type="checkbox" id="nu">
                                <label for="nu">Nu</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quoctich" class="text-right col-md-3 col-form-label">Quoc Tich</label>
                        <div class="col-md-8">
                            <select class="form-control select2" name="quoctich">
                                <option>VIet Nam</option>
                                <option>Nhat Ban</option>
                                <option>Phap</option>
                                <option>My</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quoctich" class="text-right col-md-3 col-form-label ">Quoc Tich</label>
                        <div class="col-md-8">
                            <select class="form-control select2" name="quoctich" multiple="multiple">
                                <option>VIet Nam</option>
                                <option>Nhat Ban</option>
                                <option>Phap</option>
                                <option>My</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quoctich" class="text-right col-md-3 col-form-label">Quoc Tich</label>
                        <div class="col-md-8">
                            <select class="form-control select2" name="quoctich">
                                <optgroup label="Theropods">
                                    <option>Tyrannosaurus</option>
                                    <option>Velociraptor</option>
                                    <option>Deinonychus</option>
                                </optgroup>
                                <optgroup label="Sauropods">
                                    <option>Diplodocus</option>
                                    <option>Saltasaurus</option>
                                    <option>Apatosaurus</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <label for="ten" class="text-right"></label>
                        <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-primary text-xe">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- thuc hien Javascript -->

    <!-- thuc hien javascript thuan -->
    <!-- <script type="text/javascript">
        // $('select').select2();
        $(document).ready(function() {
            // document.getElementsByClassName("abc")[0].name = "abcaaa";
            // document.getElementsByClassName("abc")[0].setAttribute('name','cuong111');
        });
    </script> -->
    <!-- thuc hien jquery -->
    <script>
    $(function() {
        $('.select2').select2({
            debug: true
        });
        $('#sinhnhat').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });
        $('#btn1').click(function() {
            // $('.test').clone().appendTo($('.test'));
            // $('.test').remove();
        });
    });
    </script>
</body>

</html>