@extends('layouts.base')
@section('title',$job->title)
@section('content')


<style>
	@media only screen and (min-width: 200px) and (max-width: 768px) {
		body {
			/* width: 100%; */
			overflow-x: hidden;
		}
	}
    #file-upload-button {
        color: red;
    }
</style>




<div id="banner-area">

    <img src="../{{asset('images/banner/banner1.jpg')}}" alt="" />

    <div class="parallax-overlay"></div>

    <!-- Subpage title start -->

    <div class="banner-title-content">

        <div class="text-center">
            <br>
            <h2>Job</h2>
        </div>

    </div><!-- Subpage title end -->

</div><!-- Banner area end -->



<!-- Main container start -->



<section id="main-container">

    <div class="container">



        <!-- Company Profile -->

        @if (session('success'))
        <div class="row">
            <div class="col-md-12 heading text-center">
                <div class="alert  alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
        @endif


        <div class="row">

            <div class="col-md-12 heading text-center">

                <h2 class="title2">{{ $job->title }}

                    <span class="title-desc"> Temping Agency </span>

                </h2>

            </div>

        </div><!-- Title row end -->



        <div class="row about-wrapper-top">

            <div class="col-md-12 ts-padding about-message">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align: center;">Job Description</h3>
                    </div>
                </div>
                <br>
                <p>{{$job->description}}</p>
                <br>

                <form id="jobApplyForm" action="{{route('apply-job')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job" value="{{$job->id}}">
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Peter John">
                        <h5 id="namecheck"></h5>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="johnpeter@gmail.com">
                        <h5 id="emailcheck"></h5>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+44*********">
                        <h5 id="numbercheck"></h5>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label id="cvLabel" class="btn btn-primary">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Upload Your CV
                                    <input style="color: #ffb100; display: none;" class="form-control cv g-brd-none rounded g-px-20 g-py-12" type="file" id="cv" name="cv" accept=".rtf,.doc,.docx,.pdf">
                                </label>
                                <small class="form-text text-muted">Maximum file size: 2 MB.</small>
                                <h4 id="cvUploadStatus"></h4>
                            </div>
                            <div class="fileUpload">

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!--/ About message end -->

            <!--/ About image end -->

        </div>
        <!--/ Content row end -->

        <!-- Company Profile -->



    </div>
    <!--/ 1st container end -->





    <div class="gap-60"></div>





    <!-- Counter Strat -->

    <div class="ts_counter_bg parallax parallax2">

        <div class="parallax-overlay"></div>

        <div class="container">

            <div class="row wow fadeInLeft text-center">

                <div class="facts col-md-3 col-sm-6">

                    <span class="facts-icon"><i class="fa fa-user"></i></span>

                    <div class="facts-num">

                        <span class="counter">1500</span>

                    </div>

                    <h3>Candidates</h3>

                </div>



                <div class="facts col-md-3 col-sm-6">

                    <span class="facts-icon"><i class="fa fa-institution"></i></span>

                    <div class="facts-num">

                        <span class="counter">1277</span>

                    </div>

                    <h3>Recruitments</h3>

                </div>



                <div class="facts col-md-3 col-sm-6">

                    <span class="facts-icon"><i class="fa fa-suitcase"></i></span>

                    <div class="facts-num">

                        <span class="counter">1469</span>

                    </div>

                    <h3>Jobs</h3>

                </div>



                <div class="facts col-md-3 col-sm-6">

                    <span class="facts-icon"><i class="fa fa-trophy"></i></span>

                    <div class="facts-num">

                        <span class="counter">76</span>

                    </div>

                    <h3>Awards</h3>

                </div>











            </div>
            <!--/ row end -->

        </div>
        <!--/ Container end -->

    </div>
    <!--/ Counter end -->







</section>
<!--/ Main container end -->


<!-- Javascript Files

================================================== -->

<!-- initialize jQuery Library -->

<script type="text/javascript" src="../{{asset('js/jquery.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

</div><!-- Body inner end -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#jobApplyForm').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 5,
                    maxlength: 10
                },
                cvUpload: {
                    required: true,
                },
            }
        });
    });
    $('#cv').change(function() {
        if ($('#cv').val() != '') {
            setTimeout(function() {
                $('#cvUploadStatus').text('Your CV Is Uploaded.');
            }, 1000);
        }
    });
</script>