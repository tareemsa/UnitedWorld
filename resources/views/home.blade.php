@extends('layouts.app')

@section('content')
    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
    <div class="jp_banner_heading_cont_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_job_heading_wrapper">
                        <div class="jp_job_heading">
                            <h1><span>3,000+</span> {{ __('app.heading') }}</h1>
                            <p>{{ __('app.sub_heading') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_header_form_wrapper">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="jp_form_location_wrapper">
                                <i class="fa fa-dot-circle-o first_icon"></i><select>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                </select><i class="fa fa-angle-down second_icon"></i>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="jp_form_btn_wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_banner_main_jobs_wrapper">
                        <div class="jp_banner_main_jobs">
                            <ul>
                                <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                <li><a href="#">ui designer,</a></li>
                                <li><a href="#">developer,</a></li>
                                <li><a href="#">senior</a></li>
                                <li><a href="#">it company,</a></li>
                                <li><a href="#">design,</a></li>
                                <li><a href="#">call center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jp_banner_jobs_categories_wrapper">
        <div class="container">
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-code"></i>
                    <h3><a href="#">Developer</a></h3>
                    <p>(240 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-laptop"></i>
                    <h3><a href="#">Technology</a></h3>
                    <p>(504 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-bar-chart"></i>
                    <h3><a href="#">Accounting</a></h3>
                    <p>(2250 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-medkit"></i>
                    <h3><a href="#">Medical</a></h3>
                    <p>(202 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-university"></i>
                    <h3><a href="#">Government</a></h3>
                    <p>(1457 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-th-large"></i>
                    <h3><a href="#">All Jobs</a></h3>
                    <p>(2000+ jobs)</p>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- jp tittle slider Wrapper Start -->
<div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%; margin-top:30px;">
    <div class="container">
        <div class="jp_tittle_name_wrapper">
            <div class="jp_tittle_name">
                <h3>Tranding</h3>
                <h4>Jobs</h4>
            </div>
        </div>
        <div class="jp_tittle_slider_wrapper">
            <div class="jp_tittle_slider_content_wrapper">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="jp_tittle_slides_one">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img1.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_two">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img2.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_third">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img3.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="jp_tittle_slides_one">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img2.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_two">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img3.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_third">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img1.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="jp_tittle_slides_one">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img3.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_two">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img1.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                        <div class="jp_tittle_slides_one jp_tittle_slides_third">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="front/images/content/tittle_img2.png" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h4>Graphic Designer (UI / UX)</h4>
                                <p>Webstrot Pvt. Ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp tittle slider Wrapper End -->
<!-- jp first sidebar Wrapper Start -->
<div class="jp_first_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_hiring_slider_main_wrapper">
                            <div class="jp_hiring_heading_wrapper">
                                <h2>Top Hiring Companies</h2>
                            </div>
                            <div class="jp_hiring_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="jp_hiring_content_main_wrapper">
                                            <div class="jp_hiring_content_wrapper">
                                                <img src="front/images/content/hiring_img1.png" alt="hiring_img" />
                                                <h4>Akshay INC.</h4>
                                                <p>(NewYork)</p>
                                                <ul>
                                                    <li><a href="#">4 Opening</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="jp_hiring_content_main_wrapper">
                                            <div class="jp_hiring_content_wrapper">
                                                <img src="front/images/content/hiring_img2.png" alt="hiring_img" />
                                                <h4>Akshay INC.</h4>
                                                <p>(NewYork)</p>
                                                <ul>
                                                    <li><a href="#">4 Opening</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="jp_hiring_content_main_wrapper">
                                            <div class="jp_hiring_content_wrapper">
                                                <img src="front/images/content/hiring_img3.png" alt="hiring_img" />
                                                <h4>Akshay INC.</h4>
                                                <p>(NewYork)</p>
                                                <ul>
                                                    <li><a href="#">4 Opening</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="jp_hiring_content_main_wrapper">
                                            <div class="jp_hiring_content_wrapper">
                                                <img src="front/images/content/hiring_img4.png" alt="hiring_img" />
                                                <h4>Akshay INC.</h4>
                                                <p>(NewYork)</p>
                                                <ul>
                                                    <li><a href="#">4 Opening</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cc_featured_product_main_wrapper">
                            <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                                <h2>Recent Jobs</h2>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Featured</a></li>
                                <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Remotely</a></li>
                                <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Part Time</a></li>
                                <li role="presentation"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Full Time </a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="best">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="hot">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="trand">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="front/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_register_section_main_wrapper">
                            <div class="jp_regis_left_side_box_wrapper">
                                <div class="jp_regis_left_side_box">
                                    <img src="front/images/content/regis_icon.png" alt="icon" />
                                    <h4>I’m an EMPLOYER</h4>
                                    <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                    <ul>
                                        <li><a href="/registeruser"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_regis_right_side_box_wrapper">
                                <div class="jp_regis_right_img_overlay"></div>
                                <div class="jp_regis_right_side_box">
                                    <img src="front/images/content/regis_icon2.png" alt="icon" />
                                    <h4>I’m an candidate</h4>
                                    <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                    <ul>
                                        <li><a href="/registeruser#company"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                    </ul>
                                </div>
                                <div class="jp_regis_center_tag_wrapper">
                                    <p>OR</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_first_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont">
                                    <img src="front/images/content/resume_logo.png" alt="logo" />
                                    <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_spotlight_main_wrapper">
                                <div class="spotlight_header_wrapper">
                                    <h4>Job Spotlight</h4>
                                </div>
                                <div class="jp_spotlight_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="front/images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="front/images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="front/images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Graphic Designer <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">R&D Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Government Jobs <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">PSU Jobs <span>(221)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper">
                                <div class="jp_rightside_career_heading">
                                    <h4>Career Advice</h4>
                                </div>
                                <div class="jp_rightside_career_main_content">
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="front/images/content/career_img1.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Job Seekeks OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="front/images/content/career_img2.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Job Seekeks OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="front/images/content/career_img3.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Job Seekeks OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_btn">
                                        <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Graphic Designer <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp first sidebar Wrapper End -->
<!-- jp counter Wrapper Start -->
<div class="jp_counter_main_wrapper">
    <div class="container">
        <div class="gc_counter_cont_wrapper">
            <div class="count-description">
                <span class="timer">2540</span><i class="fa fa-plus"></i>
                <h5 class="con1">Jobs Available</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper2">
            <div class="count-description">
                <span class="timer">7325</span><i class="fa fa-plus"></i>
                <h5 class="con2">Members</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper3">
            <div class="count-description">
                <span class="timer">1924</span><i class="fa fa-plus"></i>
                <h5 class="con3">Resumes</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper4">
            <div class="count-description">
                <span class="timer">4275</span><i class="fa fa-plus"></i>
                <h5 class="con4">Company</h5>
            </div>
        </div>
    </div>
</div>
<!-- jp counter Wrapper End -->
<!-- jp Best deals Wrapper Start -->
<div class="jp_best_deals_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="jp_best_deal_slider_main_wrapper">
                    <div class="jp_best_deal_heading_wrapper">
                        <h2>Offering the best Deals</h2>
                    </div>
                    <div class="jp_best_deal_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
                    <div class="jp_rightside_career_heading">
                        <h4>Recent Resumes</h4>
                    </div>
                    <div class="jp_rightside_career_main_content">
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="front/images/content/client_img1.jpg" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Akshay Handge</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;Developer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="front/images/content/client_img2.jpg" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Akshay Handge</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;UI Designer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="front/images/content/client_img3.jpg" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Jacklen Fandores</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;Web Designer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_btn">
                            <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Best deals Wrapper End -->
<!-- jp Client Wrapper Start -->
<div class="jp_client_slider_main_wrapper hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_first_client_slider_wrapper">
                    <div class="jp_first_client_slider_img_overlay"></div>
                    <div class="jp_client_heading_wrapper">
                        <h2>What Clients Say?</h2>
                    </div>
                    <div class="jp_client_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper">
                                        <img src="front/images/content/client_slider_img.jpg" alt="client_img" />
                                    </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin”</p>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ Jeniffer Doe &nbsp;<b>(Ui Designer)</b></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Client Wrapper End -->
<!-- jp pricing Wrapper Start -->
<div class="jp_pricing_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pricing_box1_wrapper pricing_border_box1_wrapper">
                    <div class="box1_heading_wrapper">
                        <h4>Basic Plan</h4>
                    </div>
                    <div class="price_box1_wrapper">
                        <div class="price_box1">
                            <h1>$<span>29</span></h1>
                        </div>
                    </div>
                    <div class="pricing_cont_wrapper">
                        <div class="pricing_cont">
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing_btn_wrapper">
                        <div class="pricing_btn1">
                            <ul>
                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_pricing_label_wrapper">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pricing_box1_wrapper pricing_border_box2_wrapper">
                    <div class="box1_heading_wrapper box2_heading_wrapper">
                        <h4>Premium Plan</h4>
                    </div>
                    <div class="price_box1_wrapper">
                        <div class="price_box2">
                            <h1>$<span>49</span></h1>
                        </div>
                    </div>
                    <div class="pricing_cont_wrapper">
                        <div class="pricing_cont">
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing_btn_wrapper">
                        <div class="pricing_btn2">
                            <ul>
                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_pricing_label_wrapper">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pricing_box1_wrapper pricing_border_box3_wrapper">
                    <div class="box1_heading_wrapper box3_heading_wrapper">
                        <h4>Advanced Plan</h4>
                    </div>
                    <div class="price_box1_wrapper">
                        <div class="price_box3">
                            <h1>$<span>79</span></h1>
                        </div>
                    </div>
                    <div class="pricing_cont_wrapper">
                        <div class="pricing_cont">
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>
                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing_btn_wrapper">
                        <div class="pricing_btn3">
                            <ul>
                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_pricing_label_wrapper">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp pricing Wrapper End -->


<!--main js file start-->
<script src="front/js/jquery_min.js"></script>
<script src="front/js/bootstrap.js"></script>
<script src="front/js/jquery.menu-aim.js"></script>
<script src="front/js/jquery.countTo.js"></script>
<script src="front/js/jquery.inview.min.js"></script>
<script src="front/js/owl.carousel.js"></script>
<script src="front/js/modernizr.js"></script>
<script src="front/js/custom.js"></script>
<!--main js file end-->


@endsection
