<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="<?=asset('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?=asset('assets/css/jquery.fancybox.css')?>" rel="stylesheet" async>
    <!--<link href="css/chosen.css" rel="stylesheet" async>-->
    <!--<link href="css/portfolio-kit.css" rel="stylesheet">-->
    <!--<link href="css/style-v3.css" rel="stylesheet">-->
    <!--<link href="css/style-version3.css" rel="stylesheet">-->
    <!--<link href="css/careers.css" rel="stylesheet">-->
    <!--<link href="css/material-kit.css" rel="stylesheet">-->

    <!--<link href="css/v2.css" rel="stylesheet">-->

</head>

<body>


<div class="wizard" id="wizard">
    <h2></h2>
    <section data-id="select-utype">
        <div class="steps-form-div">
            <form name="select_utype" id="select_utype">
                <h3 class="text-center">Select Portfolio Type</h3>
                <div class="form-group label-floating">
                    <label for="portfolio_type" class="control-label">Select Portfolio Type<span class="required"
                                                                                                 aria-required="true">*</span></label>
                    <select class="form-control select-chosen " name="portfolio_type" id="portfolio_type">
                        <option value="">Select Portfolio</option>
                        <option value="1">Fresher</option>
                        <option value="2">Experience</option>
                        <option value="3">Company</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <h2></h2>
    <section data-id="select-temp-type">
        <div class="container">
            <div class="steps-template-div">
                <h3 class="text-center">Select Your Template</h3>
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">Free</div>
                                    <div class="card-body temp-div">
                                        <!--<a href="javascript:void(0);" class="utype-temp">-->
                                        <img src="<?=asset('assets/image/p1.png')?>" height="100%" width="100%">
                                        <!--</a>-->
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="view/template/t2/index.html" class="btn btn-success ifmodemy">Demo</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">Free</div>
                                    <div class="card-body temp-div">
                                        <!--<a href="javascript:void(0);" class="utype-temp">-->
                                        <img src="<?=asset('assets/image/p1.png')?>" height="100%" width="100%">
                                        <!--</a>-->
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="view/template/t1/index.html" class="btn btn-success ifmodemy">Demo</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">Free</div>
                                    <div class="card-body temp-div">
                                        <!--<a href="javascript:void(0);" class="utype-temp">-->
                                        <img src="<?=asset('assets/image/p1.png')?>" height="100%" width="100%">
                                        <!--</a>-->
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="view/template/t2/index.html" class="btn btn-success ifmodemy">Demo</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h2></h2>
    <section data-id="basic-information">


        <div class="steps-form-div">
            <form id="basic_information">
                <h3 class="text-center">Basic information</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating  is-empty">
                            <label class="label-floating" for="fname">First Name<span class="required"
                                                                                      aria-required="true">*</span></label>
                            <input type="text" class="form-control" name="fname" id="fname"
                                   placeholder="Enter First Name">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <!--<div class="form-group label-floating  is-empty">-->
                        <!--<label class="label-floating" for="lname">Last Name<span class="required"-->
                        <!--aria-required="true">*</span></label>-->
                        <!--<input type="text" class="form-control" name="lname" id="lname"-->
                        <!--placeholder="Enter Last Name">-->
                        <!--</div>-->
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Last Name<span class="required"
                                                                        aria-required="true">*</span></label>
                            <input type="text" id="lname" class="form-control"
                                   name="lname" value=""
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone Number<span class="required"
                                                                 aria-required="true">*</span></label>
                            <input type="tel" class="form-control" name="phone" id="phone"
                                   placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email<span class="required"
                                                          aria-required="true">*</span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Date of Birth<span class="required"
                                                                aria-required="true">*</span></label>
                            <input type="date" class="form-control" name="dob" id="dob"
                            >
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="control-label">Gender<span class="required"
                                                                                  aria-required="true">*</span></label>
                            <select class="form-control select-chosen" name="gender" id="gender">
                                <option value="">Select gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <!--<div class="col-md-6">-->

                    <!--</div>-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country" class="control-label">Select country<span class="required"
                                                                                           aria-required="true">*</span></label>
                            <select class="form-control select-chosen" name="country" id="country">
                                <option value="">Select country</option>
                                <option value="1">India</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country" class="control-label">Select state<span class="required"
                                                                                         aria-required="true">*</span></label>
                            <select class="form-control select-chosen" name="state" id="state">
                                <option value="">Select state</option>
                                <option value="1">Uttar Pradesh</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="city" class="control-label">Select city<span class="required"
                                                                                     aria-required="true">*</span></label>
                            <select class="form-control select-chosen" name="city" id="city">
                                <option value="">Select city</option>
                                <option value="1">Kanpur</option>
                                <option value="2">Lucknow</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postal_code">Postal Code<span class="required"
                                                                      aria-required="true">*</span></label>
                            <input type="text" class="form-control" name="postal_code" id="postal_code"
                                   placeholder="Enter Postal Code">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address<span class="required"
                                                              aria-required="true">*</span></label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="Enter Address">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <h2></h2>
    <section data-id="education-information">


        <div class="steps-form-div">
            <form id="eduaction_information_form">
                <h3>Education information</h3>
                <div id="education-div" class="education-div">
                    <div class="education_container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating  ">
                                    <label class="control-label">Institution <span class="required">*</span></label>
                                    <input type="text" id="edu_institution0" class="form-control"
                                           name="education_information[0][edu_institution]" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Degree <span class="required">*</span></label>
                                    <input type="text" id="edu_degree_name0"
                                           name="education_information[0][edu_degree_name]" class="form-control"
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"> Specialisation</label>
                                    <input type="text" id="edu_specialisation0" class="form-control"
                                           name="education_information[0][edu_specialisation]" autocomplete="off">
                                    <span class="material-input"></span></div>
                            </div>

                            <!--<div class="col-md-12 col-sm-12 col-xs-12 no-padding">-->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select Country <span class="required">*</span></label>
                                    <select id="edu_country0" class="form-control "
                                            name="education_information[0][edu_country]"
                                            data-placeholder="Choose a country..."
                                    >
                                        <option value="">Select Country</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>


                                        <option value="260">Sint Maarten (Dutch part)</option>
                                        <option value="261">South Sudan</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select State / County<span
                                            class="required">*</span></label>
                                    <select id="state0" class="form-control" name="education_information[0][edu_state]"
                                            style="">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select City / District<span
                                            class="required">*</span></label>
                                    <select id="city0" class="form-control" name="education_institution[0][edu_city]"
                                            style="" disabled="disabled">
                                        <option value="">Select City</option>
                                    </select>

                                </div>
                            </div>
                            <!--<div class="col-md-8 col-sm-12 col-xs-12 no-padding">-->
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <label>Start Date<span class="required"
                                                       aria-required="true">*</span></label>
                                <input type="date" class="form-control" name="education_institution[0][edu_start_date]"
                                       id="start_date0"
                                >
                                <span class="material-input"></span>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <label>End Date<span class="required"
                                                     aria-required="true">*</span></label>
                                <input type="date" class="form-control" name="education_institution[0][edu_end_date]"
                                       id="end_date0">
                                <span class="material-input"></span>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 ctc-field no-padding">
                                <!--<div class="col-md-12 col-sm-12 col-xs-12">-->
                                <div class="form-group label-floating register-field is-empty">
                                    <label class="control-label textarea-label">Description... </label>
                                    <textarea rows="2" id="edu_description0" class="form-control"
                                              name="education_institution[0][edu_description]"
                                              maxlength="200"></textarea>
                                    </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <div class="form-group label-floating btn-box">
                                    <a href="javascript:void(0);"
                                       class="remove-edu-btn btn btn-sm btn-danger yt_link_clear"
                                       data-key-url="" title="Remove field">Remove</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                    <a href="javascript:void(0);" class="btn btn-success btn-sm add_education" id="add_education">Add
                        More Education</a>
                </div>

            </form>
            <!--</div>-->
        </div>


    </section>
    <h2></h2>
    <section data-id="experience-information">


        <div class="steps-form-div">
            <form id="experience_information_form">
                <h3 class="text-center">Experience information</h3>
                <div id="experience-div" class="education-div">
                    <div class="experience_container">
                        <div class="row">


                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Occupation / Title <span
                                            class="required">*</span></label>
                                    <input type="text" id="exp_occupation0" class="form-control" value=""
                                           name="experience_information[0][exp_occupation]" autocomplete="off"
                                    >
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Company / Business Name <span
                                            class="required">*</span></label>
                                    <input type="text" id="exp_business0" class="form-control"
                                           value=" " name="experience_information[0][exp_business]" autocomplete="off"
                                         >
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select Country <span class="required">*</span></label>
                                    <select id="exp_country0" class="form-control"
                                            name="experience_information[0][exp_country]"
                                            data-placeholder="Choose a country..."
                                    >
                                        <option value="">Select Country</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select State / County<span
                                            class="required">*</span></label>
                                    <select id="state-exp-0" class="form-control"
                                            name="experience_information[0][exp_state]"
                                    >
                                        <option value="">Select State</option>
                                    </select>


                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Select City / District<span
                                            class="required">*</span></label>
                                    <select id="city-exp-0" class="form-control"
                                            name="experience_information[0][exp_city]"
                                    >
                                        <option value="">Select City</option>
                                    </select>


                                </div>
                            </div>


                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <label class="control-label">Start Date<span class="required"
                                                                             aria-required="true">*</span></label>
                                <input type="date" class="form-control" name="experience_information[0][exp_start_date]"
                                       id=""
                                >
                                <span class="material-input"></span>

                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <label class="control-label">End Date<span class="required"
                                                                           aria-required="true">*</span></label>
                                <input type="date" class="form-control" name="experience_information[0][exp_end_date]"
                                       id="experience_information[0][exp_end_date]">
                                <span class="material-input"></span>

                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 ">
                                <div class="form-group label-floating">
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="checkbox" name="experience_information[0][exp_is_working]"
                                                   id="exp_is_working0"
                                                   class="is-working"><span
                                                class="checkbox-material"><span class="check"></span></span>
                                            <small>Currently Working</small>
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-12 col-sm-12 col-xs-12 ctc-field no-padding">-->

                            <!--<div class="col-md-9 col-sm-12 col-xs-12 ctc-allfield">-->
                            <!--<div class="row">-->
                            <div class="col-md-4 col-sm-12 col-xs-12 fee-inputbox">
                                <div class="form-group label-floating">
                                    <label class="control-label">Salary<span
                                            class="required">*</span></label>
                                    <select id="salary0" class="form-control"
                                            name="experience_information[0][exp_salary]">
                                        <option value="">Select City</option>
                                    </select>


                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 amount-field">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Net Salary Per Annum <span
                                            class="required">*</span></label>
                                    <input type="number" id="net-amount-exp-0" class="form-control"
                                           name="experience_information[0][exp_net_salary]"
                                           autocomplete="off">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 amount-field">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Gross Salary Per Annum
                                        <span class="required">*</span></label>
                                    <input type="number" id="exp_gross_salary0" class="form-control"
                                           name="experience_information[0][exp_gross_salary]" autocomplete="off">
                                    <span class="material-input"></span></div>
                            </div>
                            <!--</div>-->
                            <!--</div>-->

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating register-field is-empty">
                                    <label class="control-label textarea-label">Description... </label>
                                    <textarea rows="2" name="experience_information[0][exp_desc]" id="exp_desc0"
                                              class="form-control" value="" maxlength="200"></textarea>
                                    </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <div class="form-group label-floating btn-box">
                                    <a href="javascript:void(0);"
                                       class="remove-exp-btn btn btn-sm btn-danger"
                                       data-key-url="" title="Remove field">Remove</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                    <a href="javascript:void(0);" class="btn btn-success btn-sm add_education" id="add_experience">Add
                        More Education</a>
                </div>
            </form>
        </div>


    </section>
    <h2></h2>
    <section data-id="achievement-and-awards">

        <div class="steps-form-div">
            <form id="achievement_and_awards_form">
                <h3 class="text-center">Achievement AND Awards</h3>
                <div id="achievement_and_awards_div" class="achievement_and_awards_div">
                    <div class="achievement_and_awards_container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group label-floating  is-empty">
                                    <label class="control-label">Title <span class="required">*</span></label>
                                    <input type="text" id="ach_title0" class="form-control"
                                           name="achievement_and_awards[0][ach_title]"
                                           autocomplete="off">
                                </div>
                            </div>
                            <!--<div class="col-md-6 col-sm-12 col-xs-12">-->
                            <!--Add ACHIEVEMENTS AND AWARDS-->
                            <!--</div>-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Institution / Organisation</label>
                                    <input type="text" id="ach_institution0" class="form-control"
                                           name="achievement_and_awards[0][ach_institution]"
                                           data-rule-minlength="2" data-rule-maxlength="100" autocomplete="off">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating register-field is-empty">
                                    <label class="control-label textarea-label">Description... </label>
                                    <textarea rows="2" id="ach_desc0" class="form-control"
                                              name="achievement_and_awards[0][ach_desc]"
                                              maxlength="200"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <div class="form-group label-floating btn-box">
                                    <a href="javascript:void(0);"
                                       class="remove-ach-btn btn btn-sm btn-danger"
                                       data-key-url="" title="Remove field">Remove</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                    <a href="javascript:void(0);" class="btn btn-success btn-sm add_achievement_and_awards"
                       id="add_achievement_and_awards">Add
                        More</a>
                </div>
            </form>
        </div>
    </section>
    <h2></h2>
    <section data-id="skills">

        <div class="steps-form-div">
            <h3 class="text-left">Add Your Skills </h3>
            <div id="skills_div" class="skills_div">
                <div class="skills_container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Skill <span class="required">*</span></label>
                                <input type="text" id="skill_title0" class="form-control" data-rule-required="true"
                                       name="skill[0][skill_title]"
                                       data-rule-minlength="2" data-rule-maxlength="100" autocomplete="off">
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="country" class="control-label">Level<span class="required"
                                                                                      aria-required="true">*</span></label>
                                <select class="form-control select-chosen" name="skill[0][skill_level]" id="skill_level0">
                                    <option value="">Select Level</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                            <div class="form-group label-floating btn-box">
                                <a href="javascript:void(0);"
                                   class="remove-skill-btn btn btn-sm btn-danger"
                                   data-key-url="" title="Remove field">Remove</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                <a href="javascript:void(0);" class="btn btn-success btn-sm add_skills"
                   id="add_skills">Add
                    More</a>
            </div>
            <div id="hobbies_div" class="hobbies_div">
                <div class="hobbies_container">
                    <h3 class="text-left">Add Your Hobbies</h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Hobbies <span class="required">*</span></label>
                                <input type="text" id="hob_title0" class="form-control" data-rule-required="true"
                                       name="hobbies[0][hob_title]"
                                       data-rule-minlength="2" data-rule-maxlength="100" autocomplete="off">
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                            <div class="form-group label-floating btn-box">
                                <a href="javascript:void(0);"
                                   class="remove-hobbies-btn btn btn-sm btn-danger"
                                   data-key-url="" title="Remove field">Remove</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                <a href="javascript:void(0);" class="btn btn-success btn-sm add_hobbies"
                   id="add_hobbies">Add
                    More</a>
            </div>

        </div>
    </section>
</div>


</body>
<!--<script src="js/material-kit.js"></script>-->
<script src="<?=asset('assets/js/jquery.steps-1.1.0/jquery.steps.js')?>"></script>
<script src="<?=asset('assets/js/jquery.steps-1.1.0/jquery.steps.min.js')?>"></script>
<script src="<?=asset('assets/js/fancybox/jquery.fancybox.js')?>"></script>
<script src="<?=asset('assets/js/jquery.validate.js')?>"></script>
<script src="<?=asset('assets/js/cloneData.js')?>"></script>
<script src="<?=asset('assets/js/jquery.charactercounter.min.js')?>"></script>
<!--<link src="css/bootstrap-datepicker.css"></link>-->
<!--<link href="css/bootstrap-datepicker.css" rel="stylesheet">-->
<!--<script src="js/datepicker/datepicker.min.js"></script>-->
<!--<script src="js/datepicker/bootstrap-datepicker.js"></script>-->


<!--<script src="js/chosen/chosen.jquery.js"></script>-->

<script>

    jQuery(function () {
        $(".check").hide();
        jQuery("#wizard").steps({
            startIndex: 0,
            headerTag: "h2",
            bodyTag: "section",
            stepsOrientation: "vertical",
            titleTemplate: '#title# #index#',
            enableAllSteps: true,
            transitionEffectSpeed: 500,
            labels: {
                finish: "Submit",
                next: "Next",
                previous: "Previous"
            },
            onInit: function (event, currentIndex, newIndex) {

            },
            onStepChanging: function (event, indexOn, indexTo) {
                var step = parseInt(indexOn) + 1, rettype = true;
                if (indexTo > indexOn) {
                    rettype = eval('validate_and_save_step' + step)();
                    if (rettype == false) {

                    }
                } else {

                }
                return rettype;
            }

        });
        jQuery('.title').hide();

    });

    jQuery(function () {
        // jQuery('#dob').dropdownDatepicker(
        //     {
        //         daySuffixes: false,
        //         submitFormat: 'yyyy-mm-dd',
        //         sortYear: 'desc',
        //         dropdownPluginInit: 'chosen'
        //     }
        // );
        // $(".date-dropdowns select").chosen();
        // $('.select-chosen').chosen({no_results_text: 'Oops, nothing found!', "disable_search_threshold": 8, "width": "100%"});
    });

    jQuery(document).ready(function () {
        jQuery(".fancybox").fancybox({
            type: 'image',
            showCloseButton: false,

        });
        $(".ifmode").fancybox({type: 'iframe'});
        $(".feedbackbox").fancybox({type: 'iframe', scrolling: 'no', maxWidth: 800, maxHeight: 800, minHeight: 400});
        $(".ifmodemy").fancybox(
            {
                type: 'iframe',
                scrolling: 'no',
                width: 1400,
                heigth: 600,
                maxWidth: 1400,
                maxHeight: 600,
                // afterLoad: function () {
                //     setTimeout(function () {
                //         var width = $(".fancybox-inner").width();
                //         if (width) {
                //             var height = parseInt((width * 27) / 16);
                //             height = height.toString() + 'px';
                //             $(".fancybox-inner").css('height', height);
                //             $(".noscroll ").css('height', height);
                //         }

                //     }, 1000);
                // }
            });

    });

    $(document).ready(function () {
        // _chosen_library_focused();
    });

    function _chosen_library_focused() {
        setTimeout(function () {
            $('.chosen-container,.date-dropdowns,.select-chosen,.select-chosen-1,.select-chosen-other,.select-chosen-profile').on('focusin', function () {
                $(this).parent().addClass('is-focused');
            });
            $('.chosen-container,.date-dropdowns,.select-chosen,.select-chosen-1,.select-chosen-other,.select-chosen-profile').on('focusout', function () {
                $(this).parent().removeClass('is-focused');
            });
        }, 500);
    }

    function validate_and_save_step1() {
        $('#select_utype').validate({
            ignore: '',
            rules: {
                portfolio_type: {
                    required: true
                }
            },
            errorElement: "div",
            errorClass: "help-block-others",
            onfocusin: false,
            errorPlacement: function (error, element) {
                element.parent().after(error);
            },
            highlight: function (element) {

                jQuery(element).parent().addClass("has-error");

            },
            unhighlight: function (element) {

                jQuery(element).parent().removeClass("has-error");
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids()) {
                    //return false;
                }
            },
            submitHandler: function (form) {
            }
        });
        if ($('#select_utype').valid()) {
            return true;
        } else {
            return false;
        }
    }

    function validate_and_save_step2() {
        return true;
    }

    function validate_and_save_step3() {
        $('#basic_information').validate({
            ignore: '',
            rules: {
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                phone: {
                    required: true,
                    digits: true
                },
                email: {
                    required: true,
                    email: true
                },
                dob: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                country: {
                    required: true,
                },
                state: {
                    required: true,
                },
                city: {
                    required: true,
                },
                postal_code: {
                    required: true,
                },
                address: {
                    required: true,
                }

            },
            errorElement: "div",
            errorClass: "help-block-others",
            onfocusin: false,
            errorPlacement: function (error, element) {
                element.parent().after(error);
            },
            highlight: function (element) {

                jQuery(element).parent().addClass("has-error");

            },
            unhighlight: function (element) {

                jQuery(element).parent().removeClass("has-error");
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids()) {
                    //return false;
                }
            },
            submitHandler: function (form) {
            }
        });
        if ($('#basic_information').valid()) {
            return true;
        } else {
            return true;
        }
    }

    $("#education-div").show();
    $(document).ready(function () {
        $('#add_education').cloneData({
            mainContainerId: "education-div",
            cloneContainer: 'education_container',
            removeButtonClass: 'remove-edu-btn',
            maxLimit: 5,
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure you want to remove this?',
            beforeRender: function () {

                $('.remove-edu-btn').show();
            },
            afterRender: function () {

                $('.remove-yt-btn:first').hide();
                if ($('.clone-div').length == 5) {
                    $('#add_education').hide();
                }
                $('.remove-edu-btn').click(function () {

                    $('#add_education').show();
                });
            }
        });
        $('#add_experience').cloneData({
            mainContainerId: "experience-div",
            cloneContainer: 'experience_container',
            removeButtonClass: 'remove-exp-btn',
            maxLimit: 5,
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure you want to remove this?',
            beforeRender: function () {

                $('.remove-exp-btn').show();
            },
            afterRender: function () {

                $('.remove-exp-btn:first').hide();
                if ($('.clone-div').length == 5) {
                    $('#add_experience').hide();
                }
                $('.remove-exp-btn').click(function () {

                    $('#add_experience').show();
                });
            }
        });
        $('#add_achievement_and_awards').cloneData({
            mainContainerId: "achievement_and_awards_div",
            cloneContainer: 'achievement_and_awards_container',
            removeButtonClass: 'remove-ach-btn',
            maxLimit: 5,
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure you want to remove this?',
            beforeRender: function () {

                $('.remove-exp-btn').show();
            },
            afterRender: function () {

                $('.remove-ach-btn:first').hide();
                if ($('.clone-div').length == 5) {
                    $('#add_achievement_and_awards').hide();
                }
                $('.remove-ach-btn').click(function () {

                    $('#add_achievement_and_awards').show();
                });
            }
        });
        $('#add_hobbies').cloneData({
            mainContainerId: "hobbies_div",
            cloneContainer: 'hobbies_container',
            removeButtonClass: 'remove-hobbies-btn',
            maxLimit: 5,
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure you want to remove this?',
            beforeRender: function () {

                $('.remove-hobbies-btn').show();
            },
            afterRender: function () {

                $('.remove-hobbies-btn:first').hide();
                if ($('.clone-div').length == 5) {
                    $('#add_hobbies').hide();
                }
                $('.remove-hobbies-btn').click(function () {

                    $('#add_hobbies').show();
                });
            }
        });
        $('#add_skills').cloneData({
            mainContainerId: "skills_div",
            cloneContainer: 'skills_container',
            removeButtonClass: 'remove-skill-btn',
            maxLimit: 5,
            removeConfirm: true,
            removeConfirmMessage: 'Are you sure you want to remove this?',
            beforeRender: function () {
                $('.remove-skill-btn').show();
            },
            afterRender: function () {
                $('.remove-skill-btn:first').hide();
                if ($('.clone-div').length == 5) {
                    $('#add_skills').hide();
                }
                $('.remove-skill-btn').click(function () {

                    $('#add_skills').show();
                });
            }
        });
        $("#edu_description0").characterCounter({
            limit: 250,
        });
        $("#exp_desc0").characterCounter({
            limit: 250,
        });
    });

    function validate_and_save_step4() {
        $('#eduaction_information_form').validate({
            ignore: '',
            rules: {
                'education_information[0][edu_institution]': {
                    required: true
                },
            },
            errorElement: "div",
            errorClass: "help-block-others",
            onfocusin: false,
            errorPlacement: function (error, element) {
                element.parent().after(error);
            },
            highlight: function (element) {

                jQuery(element).parent().addClass("has-error");

            },
            unhighlight: function (element) {

                jQuery(element).parent().removeClass("has-error");
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids()) {
                    //return false;
                }
            },
            submitHandler: function (form) {
            }
        });
        if ($('#eduaction_information_form').valid()) {
            return true;
        } else {
            return false;
        }
    }

    function validate_and_save_step5() {
        $('#experience_information_form').validate({
            ignore: '',
            rules: {
                'experience_information[0][exp_occupation]': {
                    required: true
                },
            },
            errorElement: "div",
            errorClass: "help-block-others",
            onfocusin: false,
            errorPlacement: function (error, element) {
                element.parent().after(error);
            },
            highlight: function (element) {

                jQuery(element).parent().addClass("has-error");

            },
            unhighlight: function (element) {

                jQuery(element).parent().removeClass("has-error");
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids()) {
                    //return false;
                }
            },
            submitHandler: function (form) {
            }
        });
        if ($('#experience_information_form').valid()) {
            return true;
        } else {
            return false;
        }
    }
    function validate_and_save_step6() {
        $('#experience_information_form').validate({
            ignore: '',
            rules: {
                'experience_information[0][exp_occupation]': {
                    required: true
                },
            },
            errorElement: "div",
            errorClass: "help-block-others",
            onfocusin: false,
            errorPlacement: function (error, element) {
                element.parent().after(error);
            },
            highlight: function (element) {

                jQuery(element).parent().addClass("has-error");

            },
            unhighlight: function (element) {

                jQuery(element).parent().removeClass("has-error");
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids()) {
                    //return false;
                }
            },
            submitHandler: function (form) {
            }
        });
        if ($('#experience_information_form').valid()) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>
