
@extends('isverenpanel.master')




@include('isverenpanel.layouts.header')

@include('isverenpanel.layouts.sidebar')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                       İş İlanı Güncelleme
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">

                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																Quick Actions
															</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">
																	Activity
																</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">
																	Messages
																</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">
																	FAQ
																</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">
																	Support
																</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                            <li class="m-nav__item">
                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                    Submit
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <!--Begin::Main Portlet-->
            <div class="m-portlet m-portlet--full-height">
                <!--begin: Portlet Head-->
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                               İlan Güncelleme Sihirbazı
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
                                    <i class="flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end: Portlet Head-->
                <!--begin: Portlet Body-->
                <div class="m-portlet__body m-portlet__body--no-padding">
                    <!--begin: Form Wizard-->
                    <div class="m-wizard m-wizard--3 m-wizard--success" id="m_wizard">
                        <!--begin: Message container -->
                        <div class="m-portlet__padding-x">
                            <!-- Here you can put a message or alert -->
                        </div>
                        <!--end: Message container -->
                        <div class="row m-row--no-padding">
                            <div class="col-xl-3 col-lg-12">
                                <!--begin: Form Wizard Head -->
                                <div class="m-wizard__head">
                                    <!--begin: Form Wizard Progress -->
                                    <div class="m-wizard__progress">
                                        <div class="progress">
                                            <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Progress -->
                                    <!--begin: Form Wizard Nav -->
                                    <div class="m-wizard__nav">
                                        <div class="m-wizard__steps">
                                            <div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
																	<span>
																		<span>
																			1
																		</span>
																	</span>
                                                    </a>
                                                    <div class="m-wizard__step-line">
                                                        <span></span>
                                                    </div>
                                                    <div class="m-wizard__step-label">
                                                       Genel Bilgi
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
																	<span>
																		<span>
																			2
																		</span>
																	</span>
                                                    </a>
                                                    <div class="m-wizard__step-line">
                                                        <span></span>
                                                    </div>
                                                    <div class="m-wizard__step-label">
                                                       Zaman
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
																	<span>
																		<span>
																			3
																		</span>
																	</span>
                                                    </a>
                                                    <div class="m-wizard__step-line">
                                                        <span></span>
                                                    </div>
                                                    <div class="m-wizard__step-label">
                                                       Konum
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
																	<span>
																		<span>
																			4
																		</span>
																	</span>
                                                    </a>
                                                    <div class="m-wizard__step-line">
                                                        <span></span>
                                                    </div>
                                                    <div class="m-wizard__step-label">
                                                       Önizleme ve Kaydet
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Nav -->
                                </div>
                                <!--end: Form Wizard Head -->
                            </div>
                            <div class="col-xl-9 col-lg-12">
                                <!--begin: Form Wizard Form-->
                                <div class="m-wizard__form">
                                    <!--
                1) Use m-form--label-align-left class to alight the form input lables to the right
                2) Use m-form--state class to highlight input control borders on form validation
                                @php @session_start(); @endphp
            -->                  <form class="m-form m-form--label-align-left- m-form--state-" action="{{url('isilaniguncelle/'.$job->identifier)}}"  method="POST" id="m_form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{ method_field('PUT') }}
                                        <!--begin: Form Body -->
                                        <div class="m-portlet__body m-portlet__body--no-padding">
                                            <!--begin: Form Wizard Step 1-->
                                            <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Genel Bilgi
                                                        </h3>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * İlan Başlığı:
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="text" name="title" class="form-control m-input" aria-describedby="name-error" aria-invalid="true" required  placeholder="Garsonluk, Stand Görevlisi" value="{{$job->title}}" id="p_title">
                                                            <input type="hidden" name="employer_id" value="{{$_SESSION["me"]->id}}">

                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                           * Kategori
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                        <select class="form-control m-input" id="exampleSelect1" name="category_id" >
                                                            <option value="{{$job->categoryDetails->id}}" selected>
                                                                {{$job->categoryDetails->name}}
                                                            </option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->identifier}}">
                                                                    {{$category->name}}
                                                                </option>

                                                            @endforeach
                                                        </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Kaç İşçiye İhtiyacınız Var?
                                                        </label>


                                                        @if($job->person_count=="Belirsiz")
                                                        <div class="m-radio-inline">
                                                            <label class="m-checkbox">

                                                                <input type="checkbox" name="person_count" value="Belirsiz" id="chkPassport" checked>
                                                                Belirsiz
                                                                <span></span>
                                                            </label>
                                                        </div>


                                                            <div class="col-xl-6 col-lg-6">


                                                                <div class="input-group m-input-group m-input-group--air" id="kisi" style="float: left">
                                                                    <div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">
															+
														</span>
                                                                    </div>
                                                                    <input type="number" class="form-control m-input"  name="person_count" placeholder="Gerekli çalışan sayısı" aria-describedby="basic-addon1"  id="kisi_22">
                                                                </div>
                                                        @else

                                                                    <div class="m-radio-inline">
                                                                        <label class="m-checkbox">

                                                                            <input type="checkbox" name="person_count" value="Belirsiz" id="chkPassport">
                                                                            Belirsiz
                                                                            <span></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-xl-6 col-lg-6">


                                                        <div class="input-group m-input-group m-input-group--air" id="kisi" style="float: left">
                                                            <div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">
															+
														</span>
                                                            </div>
                                                            <input type="number" class="form-control m-input"  name="person_count" placeholder="Gerekli çalışan sayısı" aria-describedby="basic-addon1" value="{{$job->person_count}}" id="kisi_22">
                                                        </div>
                                                            @endif



                                                    </div>
                                                    </div>




                                                    <div class="form-group m-form__group row">

                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Kıyafet:
                                                        </label>
                                                        @if($job->wear == "Belirsiz")

                                                        <div class="m-radio-inline">
                                                            <label class="m-checkbox">
                                                                <input type="checkbox" id="kiyafet" name="wear" value="belirsiz" checked>
                                                                Belirsiz
                                                                <span></span>
                                                            </label>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6" id="kiyafet2">
                                                            <input type="text" name="wear" class="form-control m-input" placeholder="Takım elbise, turuncu t-shirt, beyaz gömlek" value="" id="kiyafet_2">
                                                        </div>
                                                        @else

                                                            <div class="m-radio-inline">
                                                                <label class="m-checkbox">
                                                                    <input type="checkbox" id="kiyafet" name="wear" value="belirsiz">
                                                                    Belirsiz
                                                                    <span></span>
                                                                </label>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6" id="kiyafet2">
                                                                <input type="text" name="wear" class="form-control m-input" placeholder="Takım elbise, turuncu t-shirt, beyaz gömlek" value="{{$job->wear}}" id="kiyafet_2">
                                                            </div>


                                                        @endif
                                                    </div>





                                                    <div class="form-group m-form__group row">


                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Ekipman:
                                                        </label>
                                                        @if($job->tool == "Belirsiz")
                                                        <div class="m-radio-inline">
                                                            <label class="m-checkbox">
                                                                <input type="checkbox" id="ekipman" name="tool" value="belirsiz" checked>
                                                                Belirsiz
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6" id="ekipman2">
                                                            <input type="text"  name="tool" class="form-control m-input" placeholder="Laptop, önlük, defter" value="" id="ekipman_2">
                                                        </div>

                                                        @else
                                                            <div class="m-radio-inline">
                                                                <label class="m-checkbox">
                                                                    <input type="checkbox" id="ekipman" name="tool" value="belirsiz">
                                                                    Belirsiz
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6" id="ekipman2">
                                                                <input type="text"  name="tool" class="form-control m-input" placeholder="Laptop, önlük, defter" value="{{$job->tool}}" id="ekipman_2">
                                                            </div>



                                                        @endif
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">
                                                            Yetkinlikler
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <select class="form-control m-bootstrap-select m_selectpicker" name="skills[]" multiple data-actions-box="true" id="multiple" >


                                                                      @foreach($job->skills as $skill)
                                                                         <option value="{{$skill->id}}" selected>
                                                                          {{$skill->name}}
                                                                          </option>


                                                                       @endforeach




                                                            </select>

                                                        </div>
                                                    </div>


                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Ücret:
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="number" name="fee" class="form-control m-input" placeholder="Ücret Giriniz" value="{{$job->fee}}" id="ucret_22">
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group m-form__group row m--margin-top-10">
                                                            <label class="col-form-label col-lg-3 col-sm-12">
                                                                * İlan Hakkında
                                                            </label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <label >
                                                                    <textarea name="description" class="summernote" id="summer">{{$job->description}}</textarea>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <!--end: Form Wizard Step 1-->


                                            <!--begin: Form Wizard Step 3-->
                                            <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Zaman
                                                        </h3>
                                                    </div>

                                                </div>


                                                <div class="m-form__group form-group row">
                                                    <label class="col-3 col-form-label">
                                                        İş Tipi
                                                    </label>

                                                    @if($job->work_style == "Günlük")
                                                    <div class="col-9">
                                                        <div class="m-radio-inline">
                                                            <label class="m-radio">
                                                                <input type="radio" name="work_style" value="Günlük" id="gunluk" checked>
                                                                Günlük
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio">
                                                                <input type="radio" name="work_style" value="Part Time" id="part">
                                                                Part Time
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                        @else
                                                        <div class="col-9">
                                                            <div class="m-radio-inline">
                                                                <label class="m-radio">
                                                                    <input type="radio" name="work_style" value="Günlük" id="gunluk" >
                                                                    Günlük
                                                                    <span></span>
                                                                </label>
                                                                <label class="m-radio">
                                                                    <input type="radio" name="work_style" value="Part Time" id="part" checked>
                                                                    Part Time
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                </div>


                                                <div id="tek">
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-lg-3 col-form-label">
                                                           İşin Yapılacağı Günler:
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control m-input"  name="tarih1" readonly placeholder="Tarih ve Zamanı Seçiniz" id="m_datetimepicker_2"/>
                                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                                                </div>
                                                            </div>
                                                        </div><i class="la la-plus-circle" style="float: left;font-size: 30px" id="add"></i> <i class="la la-times-circle" style="font-size: 30px" id="remove"></i>


                                                        <div class="m-separator m-separator--dashed m-separator--accent"></div>
                                                        <label class="col-lg-3 col-form-label">

                                                        </label>

                                                        <div class="col-lg-6" style="display: none;" id="day1">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control m-input" name="tarih2" readonly placeholder="Tarih ve Zamanı Seçiniz" id="m_datetimepicker_3"/>
                                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="m-separator m-separator--dashed m-separator--accent"></div>
                                                        <label class="col-lg-3 col-form-label">

                                                        </label>
                                                        <div class="col-lg-6" style="display: none;" id="day2">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control m-input" name="tarih3" readonly placeholder="Tarih ve Zamanı Seçiniz" id="m_datetimepicker_4"/>
                                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="m-separator m-separator--dashed m-separator--accent"></div>
                                                        <label class="col-lg-3 col-form-label">

                                                        </label>
                                                        <div class="col-lg-6" style="display: none;" id="day3">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control m-input"  name="tarih4" readonly placeholder="Tarih ve Zamanı Seçiniz" id="m_datetimepicker_5"/>
                                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>


                                                <div id="multi">

                                                    <div class="form-group m-form__group row">
                                                        <label class="col-lg-3 col-form-label">
                                                            Başlangıç Zamanı:
                                                        </label>
                                                        <div class="col-lg-9">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control m-input" name="begin_date" readonly placeholder="Tarih ve Zamanı Seçiniz" id="m_datetimepicker_6"/>
                                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-lg-3 col-form-label">
                                                            Haftada Kaç Gün:
                                                        </label>

                                                        <div class="col-lg-6">
                                                            <select class="form-control m-input" name="gunsayisi" id="gunsayisi">
                                                                @for($i=1;$i<=7;$i++)
                                                                <option>
                                                                    {{$i}}
                                                                </option>
                                                                @endfor


                                                            </select>
                                                        </div>
                                                    </div>



                                                </div>



                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>



                                            </div>
                                            <!--end: Form Wizard Step 3-->
                                            <!--begin: Form Wizard Step 2-->
                                            <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                           Konum
                                                        </h3>
                                                    </div>


                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Şehir:
                                                        </label>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <select name="province" class="form-control m-input" id="sehir_2">
                                                                <option value="">
                                                                    İl Seçiniz
                                                                </option>
                                                                <option value="İstanbul" selected>
                                                                İSTANBUL
                                                                </option>



                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * İlçe:
                                                        </label>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <select name="city" class="form-control m-input" id="ilce_2">
                                                                <option value="">
                                                                    İlçe Seçiniz
                                                                </option>
                                                                @foreach($towns as $town)
                                                                    @if($job->addressDetails->city == $town->TownName)

                                                                        <option value="{{$town->TownName}}" selected>
                                                                            {{$town->TownName}}

                                                                        </option>
                                                                    @endif

                                                                        <option value="{{$town->TownName}}" >
                                                                            {{$town->TownName}}

                                                                        </option>


                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-group m-form__group row">

                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Adres:
                                                        </label>
                                                        <div class="col-lg-9">
                                                            <input type="text"  class="form-control m-input" name="address" placeholder="" value="{{$job->address}}" id="adres_22">
                                                        </div>
                                                    </div>



                                                </div>


                                            </div>
                                            <!--end: Form Wizard Step 2-->

                                            <!--begin: Form Wizard Step 4-->
                                            <div class="m-wizard__form-step" id="m_wizard_form_step_4">
                                                <!--begin::Section-->
                                                <div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
                                                    <!--begin::Item-->
                                                    <div class="m-accordion__item active">
                                                        <div class="m-accordion__item-head"  role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="  false">
																		<span class="m-accordion__item-icon">
																			<i class="fa flaticon-user-ok"></i>
																		</span>
                                                            <span class="m-accordion__item-title">
																			1.Genel Bilgi
																		</span>
                                                            <span class="m-accordion__item-mode"></span>
                                                        </div>
                                                        <div class="m-accordion__item-body collapse show" id="m_accordion_1_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1">
                                                            <!--begin::Content-->
                                                            <div class="tab-content active  m--padding-30">
                                                                <div class="m-form__section m-form__section--first">
                                                                    <div class="m-form__heading">
                                                                        <h4 class="m-form__heading-title">
                                                                           İlan Detayları
                                                                        </h4>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            İlan Başlığı:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="title_2">
																							Garsonluk
																						</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Kategori:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="kategori_2">
																						Hizmet
																						</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                         Kaç Kişiye İhtiyacınız Var?
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="kisi_2">
																							20 Kişi
																						</span>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Kıyafet
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="kiyafet_22">
																							20 Kişi
																						</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Ekipman
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="ekipman_22">
																							20 Kişi
																						</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Ücret
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="ücret_2">
																							Garsonluk
																						</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            İlan Hakkında
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																					<div id="summer_22">
																							İlan hakkında kısa bilgi gelecek.
																						</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>

                                                            </div>
                                                            <!--end::Section-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->

                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="m-accordion__item">
                                                        <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_3_head" data-toggle="collapse" href="#m_accordion_1_item_3_body" aria-expanded="    false">
																		<span class="m-accordion__item-icon">
																				<i class="flaticon-time-3"></i>
																		</span>
                                                            <span class="m-accordion__item-title">
																			2. Zaman
																		</span>
                                                            <span class="m-accordion__item-mode"></span>
                                                        </div>
                                                        <div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">
                                                            <!--begin::Content-->
                                                            <div class="tab-content  m--padding-30">
                                                                <div class="m-form__section m-form__section--first">
                                                                    <div class="m-form__heading">
                                                                        <h4 class="m-form__heading-title">
                                                                           Zaman Bilgisi
                                                                        </h4>
                                                                    </div>

                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                           İş Tipi:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="type">
																							Seçiniz.
																						</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Başlangıç Zamanı:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="parttarih">
																							13/06/2019
																						</span>

                                                                            <span class="m-form__control-static" id="day1">
																							13/06/2019
																						</span>

                                                                            <span class="m-form__control-static" id="day2">
																							13/06/2019
																						</span>

                                                                            <span class="m-form__control-static" id="day3">
																							13/06/2019
																						</span>


                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                           Gün Sayısı:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="gun1">
																							10
																						</span>Gün
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>

                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>

                                                    <div class="m-accordion__item">
                                                        <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_2_head" data-toggle="collapse" href="#m_accordion_1_item_2_body" aria-expanded="    false">
																		<span class="m-accordion__item-icon">
																			<i class="fa  flaticon-placeholder"></i>
																		</span>
                                                            <span class="m-accordion__item-title">
																			3. Konum
																		</span>
                                                            <span class="m-accordion__item-mode"></span>
                                                        </div>
                                                        <div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">
                                                            <!--begin::Content-->
                                                            <div class="tab-content  m--padding-30">
                                                                <div class="m-form__section m-form__section--first">
                                                                    <div class="m-form__heading">
                                                                        <h4 class="m-form__heading-title">
                                                                            Konum Bilgisi
                                                                        </h4>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Adres:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="adres_2">
																							Örnek Mahallesi 34704 Ataşehir/İstanbul
																						</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            Şehir:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="sehir_22">
																							İstanbul
																						</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group m-form__group m-form__group--sm row">
                                                                        <label class="col-xl-4 col-lg-4 col-form-label">
                                                                            İlçe:
                                                                        </label>
                                                                        <div class="col-xl-8 col-lg-8">
																						<span class="m-form__control-static" id="ilce_22">
																							İstanbul
																						</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>

                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Section-->
                                                <!--end::Section-->
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="form-group m-form__group m-form__group--sm row">
                                                    <div class="col-xl-12">
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                <input type="checkbox" name="accept" value="1">
                                                                Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 4-->


                                        </div>

                                        <!--end: Form Body -->
                                        <!--begin: Form Actions -->
                                        <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                            <a></a>
                                            <div class="m-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-6 m--align-left">
                                                        <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																		<span>
																			<i class="la la-arrow-left"></i>
																			&nbsp;&nbsp;
																			<span>
																				Geri
																			</span>
																		</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6 m--align-right">

                                                        <button type="submit" class="btn btn-primary m-btn m-btn--custom m-btn--icon"  data-wizard-action="submit">Gönder </button>

                                                        <a href="#"  class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">


                                                            <span>
																			<i class="la la-check"></i>
																			&nbsp;&nbsp;
																			<span>
																				Submit
																			</span>
																		</span>

                                                        </a>

                                                        <a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon" id="preview" data-wizard-action="next">
																		<span>
																			<span>
																				Kaydet ve Devam et
																			</span>
																			&nbsp;&nbsp;
																			<i class="la la-arrow-right"></i>
																		</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!--end: Form Actions -->

                                    </form>
                                </div>
                                <!--end: Form Wizard Form-->
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard-->
                </div>
                <!--end: Portlet Body-->
            </div>
            <!--End::Main Portlet-->
        </div>
    </div>



@section('job-post')
    <!--begin::Page Snippets -->
    <script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/wizard/wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/select2.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/summernote.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>

@endsection

@endsection




@include('isverenpanel.layouts.footer')