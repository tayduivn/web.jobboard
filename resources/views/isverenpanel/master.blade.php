<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Metronic | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->

    <!--end::Page Vendors -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
</head>


<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

<div class="m-grid m-grid--hor m-grid--root m-page">

    @yield('header')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">


    @yield('sidebar')


            @yield('content')

    </div>


    @yield('footer')


</div>

<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->

<!--end::Page Vendors -->
<!--begin::Page Snippets -->

@yield('active-jobs-scripts')
@yield('home')
@yield('job-post')
@yield('profile')

<script>
    $(document).ready(function () {
if ($("#part").is(":checked")) {
var s=document.getElementById('parttarih23').textContent=$("input[name=tarih1]").val();

}

if ($("#gunluk").is(":checked")) {
var s=document.getElementById('parttarih23').textContent=$("input[name=tarih1]").val();

}
    });
</script>

<script>
    $(document).ready(function () {



        if ($("#1gun").is(":checked")) {

            $("#day11").hide();
            $("#day22").hide();
            $("#day33").hide();

            $("#day0").show();
            $("#day1").hide();
            $("#day2").hide();
            $("#day3").hide();


        }
        else if ($("#2gun").is(":checked")) {
            $("#day22").hide();
            $("#day33").hide();

            $("#day0").show();
            $("#day1").show();
            $("#day2").hide();
            $("#day3").hide();
        }

       else if ($("#3gun").is(":checked")) {
            $("#day33").hide();
            $("#day0").show();
            $("#day1").show();
            $("#day2").show();
            $("#day3").hide();
        }


        else if ($("#4gun").is(":checked")) {
            $("#day0").show();
            $("#day1").show();
            $("#day2").show();
            $("#day3").show();
        }


    });

</script>

    <script>

    $(document).ready(function() {




        $("#multi").hide();
        $("#tek").show();
        $("#part").click(function () {
            if ($("#part").is(":checked")) {
                $("#multi").show();
                $("#tek").hide();
            }
        });
        $("#gunluk").click(function () {
            if ($("#gunluk").is(":checked")) {
                $("#multi").hide();
                $("#tek").show();
            }
        });


        $("#1gun").click(function () {
            if ($("#1gun").is(":checked")) {

                $("#day11").hide();
                $("#day22").hide();
                $("#day33").hide();

                $("#day0").show();
                $("#day1").hide();
                $("#day2").hide();
                $("#day3").hide();
            }
        });




        $("#2gun").click(function () {
            if ($("#2gun").is(":checked")) {
                $("#day22").hide();
                $("#day33").hide();

                $("#day0").show();
                $("#day1").show();
                $("#day2").hide();
                $("#day3").hide();
            }
        });

        $("#3gun").click(function () {
            if ($("#3gun").is(":checked")) {
                $("#day33").hide();
                $("#day0").show();
                $("#day1").show();
                $("#day2").show();
                $("#day3").hide();
            }
        });

        $("#4gun").click(function () {
            if ($("#4gun").is(":checked")) {
                $("#day0").show();
                $("#day1").show();
                $("#day2").show();
                $("#day3").show();
            }
        });







    });


</script>





<script>
    $(function () {

        if ($("#gunluk").is(":checked")) {
            $("#multi").hide();
            $("#tek").show();
        }

        if ($("#part").is(":checked")) {
            $("#multi").show();
            $("#tek").hide();
        }

        $("#gunluk").click(function () {
            if ($("#gunluk").is(":checked")) {
                $("#multi").hide();
                $("#tek").show();
            }
        });
    });
</script>

<script>
    $(document).ready(function(){

        var next = 1;
        $('#add').click(function() {
            $("#day"+next).slideDown();
            if (next<=4)
              next = next + 1;
        });

        $('#remove').click(function() {
            $("#day"+next).slideUp();
            next = next - 1;
        });




    });



</script>


<script>
    $(document).ready(function() {

        var deneme=
        console.log(deneme);

        if ($("#chkPassport").prop("checked")==true) {
            $("#kisi").hide();
        } else {
            $("#kisi").show();
        }
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#kisi").hide();
            } else {
                $("#kisi").show();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {


        if ($('#adres').prop("checked")==true) {
            $("#adres_22").hide();
        } else {
            $("#adres_22").show();
        }

        $("#adres").click(function () {
            if ($(this).is(":checked")) {
                $("#adres_22").hide();
            } else {
                $("#adres_22").show();
            }
        });

        if ($('#kiyafet').prop("checked")==true) {
            $("#kiyafet2").hide();
        } else {
            $("#kiyafet2").show();
        }

        $("#kiyafet").click(function () {
            if ($(this).is(":checked")) {
                $("#kiyafet2").hide();
            } else {
                $("#kiyafet2").show();
            }
        });
    });
</script>



<script>
    $(document).ready(function() {


        if ($('#ekipman').prop("checked")==true){
            $("#ekipman2").hide();
        } else {
            $("#ekipman2").show();
        }
        $("#ekipman").click(function () {
            if ($(this).is(":checked")) {
                $("#ekipman2").hide();
            } else {
                $("#ekipman2").show();
            }
        });
    });
</script>


<script>
    $(document).ready(function() {

        $('#preview').on('click', function() {
            var p_title = document.getElementById('p_title').value;
            console.log(p_title);
            var add = document.getElementById('title_2').textContent = p_title;

            var exampleSelect1 = document.getElementById('exampleSelect1').value;

            var add = document.getElementById('kategori_2').textContent = exampleSelect1;


             if ( $("#1gun").is(("checked"))){
                 var add = document.getElementById('gun1').textContent = "1 Gün";
             }
             else if ($("#2gun").is(("checked"))) {
                 var add = document.getElementById('gun1').textContent = "2 Gün";
             }
             else if ($("#2gun").is(("checked"))){
                 var add = document.getElementById('gun1').textContent = "3 Gün";
             }
             else {
                 var add = document.getElementById('gun1').textContent = "4 Gün";
             }



                var p_title = document.getElementById('gunluk').value;
                var add = document.getElementById('type').textContent = p_title;

                if ($("#id").css("display")==="block") {

                    var p_title = document.getElementById('m_datetimepicker_2').value;
                    var add = document.getElementById('parttarih').textContent = p_title;

                }



        if ($("#part").is(":checked")) {
            $("#day11").hide();
            $("#day22").hide();
            $("#day33").hide();
                var p_title = document.getElementById('part').value;
                var add = document.getElementById('type').textContent = p_title;

                var p_title = document.getElementById('m_datetimepicker_6').value;
                var add = document.getElementById('parttarih').textContent = p_title;

        }





            if ($("#chkPassport").is(":checked")) {

                var add = document.getElementById('kisi_2').textContent = "Belirsiz";
            }
            else {
                var p_title = document.getElementById('kisi_22').value;
                var add = document.getElementById('kisi_2').textContent = p_title;
            }




            if ($("#kiyafet").is(":checked")) {

                var add = document.getElementById('kiyafet_22').textContent = "Belirsiz";
            }
            else {
                var p_title = document.getElementById('kiyafet_2').value;
                var add = document.getElementById('kiyafet_22').textContent = p_title;
            }


            if ($("#ekipman").is(":checked")) {

                var add = document.getElementById('ekipman_22').textContent = "Belirsiz";
            }
            else {
                var p_title = document.getElementById('ekipman_2').value;
                var add = document.getElementById('ekipman_22').textContent = p_title;
            }

            var p_title = document.getElementById('ucret_22').value;
            var add = document.getElementById('ücret_2').textContent = p_title;



            if ($("#adres").is(":checked")) {

                var add = document.getElementById('adres_2').textContent = "Belirli bir adres yok";
            }
            else {
                var summer = document.getElementById('adres_22').value;
                var add = document.getElementById('adres_2').textContent = summer;

            }





            var select12 = document.getElementById('sehir_2').value;
            var add = document.getElementById('sehir_22').textContent = select12;


            var select22 = document.getElementById('ilce_2').value;
            var add = document.getElementById('ilce_22').textContent = select22;




            var summer123 = document.getElementById('summer').value;

            var add = document.getElementById('summer_22').innerHTML = summer123;






        });

    });
</script>

<script>
    $(document).ready(function() {

    $('.summernote').summernote({
        airMode: true,
        width:400px,
    });

    });

</script>

@yield('image-editor')
@include('sweetalert::alert')


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>


<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>