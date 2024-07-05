<?php $__env->startSection('title'); ?>
    <title>Listing | GSP - The best place to explore your favourite business.</title>
    <style>
        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #FF0C0E;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
            /* Added cursor pointer */
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #FF0C0E;
            z-index: -1;
        }

        #multi-step-form {
            overflow-x: hidden;
        }

        .progress-bar {
            background-color: #FF0C0E !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container my-4 form-container pt-3 rounded-3">
            <ul class="nav nav-underline justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-business-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-business" type="button" role="tab" aria-controls="pills-business"
                        aria-selected="true">
                        <small class="fw-semibold">Business Listing</small>
                    </button>
                </li>
                <!--<li class="nav-item" role="presentation">-->
                <!--    <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill" data-bs-target="#pills-product" type="button" role="tab" aria-controls="pills-product" aria-selected="false">-->
                <!--        <small class="fw-semibold">Product Listing</small>-->
                <!--    </button>-->
                <!--</li>-->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-expert-tab" data-bs-toggle="pill" data-bs-target="#pills-expert"
                        type="button" role="tab" aria-controls="pills-expert" aria-selected="false">
                        <small class="fw-semibold">Expert Listing</small>
                    </button>
                </li>
                <!--<li class="nav-item" role="presentation">-->
                <!--    <button class="nav-link" id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand" type="button" role="tab" aria-controls="pills-brand" aria-selected="false">-->
                <!--        <small class="fw-semibold">Brand Listing</small>-->
                <!--    </button>-->
                <!--</li>-->
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-business" role="tabpanel"
                    aria-labelledby="pills-business-tab" tabindex="0">
                    <h4 class="text-center my-3" style="color: var(--sky-blue);">Add Your Business</h4>


                    <div id="container" class="container mt-5">
                        <div class="progress px-1" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="step-container d-flex justify-content-between">
                            <div class="step-circle" onclick="displayStep(1)"><i class="fa fa-user"></i></div>
                            <div class="step-circle" onclick="displayStep(2)"><i class="fa fa-city"></i></div>
                            <div class="step-circle" onclick="displayStep(3)"><i class="fa fa-info"></i></div>
                        </div>

                        <form action="<?php echo e(route('business.create.home')); ?>" method="post" enctype="multipart/form-data">
                            <div id="multi-step-form">
                                <?php echo csrf_field(); ?>
                                <div class="step step-1">
                                    <div class="mb-3">
                                        <div class="text-center">
                                            <label for="contact_image">
                                                <div class="text-center">
                                                    <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                                        class="rounded-circle avatar img-circle img-thumbnail"
                                                        alt="avatar" style="width: 150px; height: 150px;">
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6>Upload a 150*150 Photo</h6>
                                                </div>
                                                <input type="file" class="text-center center-block file-upload"
                                                    name="contact_image" id="contact_image" style="visibility: hidden;">
                                            </label>

                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-2">
                                        <div class="col">
                                            <div class="mb-2">
                                                <label for="contact_person_name" class="form-label">
                                                    <small class="fw-semibold asterisk">Contact Person Name</small>
                                                </label>
                                                <input type="text" class="form-control" id="contact_person_name"
                                                    aria-describedby="contactPersonNameHelp"
                                                    placeholder="Enter Contact person name" name="contact_person_name"
                                                    required value="<?php echo e(old('contact_person_name')); ?>">
                                                <div id="contactPersonNameHelp" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="email" class="form-label">
                                                    <small class="fw-semibold asterisk">Email address</small>
                                                </label>
                                                <input type="email" class="form-control" id="contact_email"
                                                    aria-describedby="emailHelp" placeholder="example@gmail.com"
                                                    name="contact_email" required value="<?php echo e(old('contact_email')); ?>">
                                                <div id="emailHelp" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="mobile" class="form-label">
                                                    <small class="fw-semibold asterisk">Mobile</small>
                                                </label>
                                                <input type="number" class="form-control" id="mobile"
                                                    aria-describedby="mobileHelp" placeholder="+880 17899 888888"
                                                    name="contact_mobile" required value="<?php echo e(old('contact_mobile')); ?>">
                                                <div id="mobileHelp" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="contact_whatsapp" class="form-label">
                                                    <small class="fw-semibold asterisk">Whatsapp Number</small>
                                                </label>
                                                <input type="number" class="form-control" id="contact_whatsapp"
                                                    aria-describedby="whatsappNumberHelp" placeholder="+880 17899 888888"
                                                    name="contact_whatsapp" required
                                                    value="<?php echo e(old('contact_whatsapp')); ?>">
                                                <div id="whatsappNumberHelp" class="form-text"></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="mb-2">
                                                <label for="contact_google_map" class="form-label">
                                                    <small class="fw-semibold">Google Map Direction</small>
                                                </label>
                                                <input type="url" class="form-control" id="contact_google_map"
                                                    aria-describedby="googleMapDirectionHelp"
                                                    placeholder="https://www.google.com/maps/@23.798594,90.3465982,15z/data=!4m2!7m1!2e1?shorturl=1"
                                                    name="contact_google_map">
                                                <div id="contact_google_map" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="contact_address" class="form-label">
                                                    <small class="fw-semibold asterisk">Address</small>
                                                </label>
                                                <input type="text" class="form-control" id="contact_address"
                                                    aria-describedby="addressHelp" placeholder="Enter Your Address"
                                                    name="contact_address" required>
                                                <div id="addressHelp" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="website" class="form-label">
                                                    <small class="fw-semibold">Website Link</small>
                                                </label>
                                                <input type="url" class="form-control" id="website"
                                                    aria-describedby="websiteLinkHelp"
                                                    placeholder="https://www.example.com" name="website_link">
                                                <div id="websiteLinkHelp" class="form-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary next-step">Next</button>
                                </div>

                                <div class="step step-2">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-2">
                                                <label for="company_name" class="form-label">
                                                    <small class="fw-semibold asterisk">Company Name</small>
                                                </label>
                                                <input type="text" class="form-control" id="company_name"
                                                    aria-describedby="companyNameHelp" placeholder="Enter Company Name"
                                                    name="company_name" required value="<?php echo e(old('company_name')); ?>">
                                                <div id="companyNameHelp" class="form-text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-2">
                                                <label for="company_email" class="form-label">
                                                    <small class="fw-semibold asterisk">Email address</small>
                                                </label>
                                                <input type="email" class="form-control" id="company_email"
                                                    aria-describedby="companyEmailHelp" placeholder="example@gmail.com"
                                                    name="company_email" required value="<?php echo e(old('company_email')); ?>">
                                                <div id="companyEmailHelp" class="form-text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-2">
                                                <label for="company_mobile" class="form-label">
                                                    <small class="fw-semibold asterisk">Company Mobile</small>
                                                </label>
                                                <input type="number" class="form-control" id="company_mobile"
                                                    aria-describedby="companyMobileHelp" placeholder="+880 17899 888888"
                                                    name="company_mobile" required value="<?php echo e(old('company_mobile')); ?>">
                                                <div id="companyMobileHelp" class="form-text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">

                                            

                                            <div class="mb-2">
                                                <label for="businessCategory" class="form-label">
                                                    <small class="fw-semibold asterisk">Business Category</small>
                                                </label>
                                                <select name="business_category_id" class="form-select select2"
                                                    aria-label="Select Business Category"
                                                    aria-describedby="businessCategoryHelp" id="business_category_id">
                                                    <?php $__currentLoopData = $business_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->category_name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="whatsapp_number" class="form-label">
                                                    <small class="fw-semibold">WhatsApp Number (Optional)</small>
                                                </label>
                                                <input type="text" class="form-control" id="whatsapp_number"
                                                    aria-describedby="whatsapp_number" placeholder="Enter WhatsApp Number"
                                                    name="whatsapp_number" required value="<?php echo e(old('whatsapp_number')); ?>">
                                                <div id="whatsapp_number" class="form-text"></div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="businessType" class="form-label">
                                                    <small class="fw-semibold">Social Media Links (Optional)</small>
                                                </label>
                                                <div class="">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Facebook</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="facebook"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Instagram</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="instagram"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Twitter</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="twitter"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Linkedin</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="linkedin"
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <?php $__errorArgs = ['social_media'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <span><?php echo e($message); ?></span>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="website" class="form-label">
                                                    <small class="fw-semibold ">Website</small>
                                                </label>
                                                <input type="text" class="form-control" id="website"
                                                    aria-describedby="businessTypeHelp" placeholder="Enter Website"
                                                    name="website" required value="<?php echo e(old('website')); ?>">
                                                <div id="businessTypeHelp" class="form-text"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="businessType" class="form-label">
                                                    <small class="fw-semibold asterisk">Business Hours</small>
                                                </label>

                                                <div class="">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Sunday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="sunday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Monday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="monday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Tuesday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="tuesday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Wednesday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="wednesday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Thursday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="thursday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Friday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="friday_hours"
                                                            value="" required>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control input-group-text"
                                                                style="width: 100px;" disabled>Saturday</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="saturday_hours"
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <?php $__errorArgs = ['business_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <span><?php echo e($message); ?></span>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-12">
                                            <div class="mb-2">
                                                <label for="company_description asterisk" class="form-label">
                                                    <small class="fw-semibold">Company Description</small>
                                                </label>
                                                <textarea class="form-control" id="company_description" rows="10" name="company_description"
                                                    aria-describedby="companyDescriptionHelp" placeholder="Write Company Description Here..."
                                                    name="company_description" required>
                                                <?php echo e(old('company_description')); ?>

                                            </textarea>
                                                <div id="companyDescriptionHelp" class="form-text"></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <button type="button" class="btn btn-primary prev-step">Previous</button>
                                            <button type="button" class="btn btn-primary next-step">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="step step-3">
                                    <div class="mb-2">
                                        <label for="country" class="form-label">
                                            <small class="fw-semibold asterisk">Country</small>
                                        </label>
                                        <select class="form-select select2" name="country" aria-label="Select Country"
                                            aria-describedby="countryHelp" data-placeholder="Select Country"
                                            name="country" required>
                                            <option>Select country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh" selected>Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic (Czechia)">Czech Republic (Czechia)</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="DR Congo">DR Congo</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Eswatini">Eswatini</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Holy See">Holy See</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="North Macedonia">North Macedonia</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts & Nevis">Saint Kitts & Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Vincent & Grenadines">St. Vincent & Grenadines</option>
                                            <option value="State of Palestine">State of Palestine</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <div id="countryHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="city" class="form-label">
                                            <small class="fw-semibold asterisk">City</small>
                                        </label>
                                        <select name="city"
                                            class="form-control select2 <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="city">
                                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"
                                                    <?php echo e(old('city') == $item->id ? 'selected' : ''); ?>>
                                                    <?php echo e($item->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <button type="button"
                                        class="btn btn-primary border-0 mb-3 px-3 prev-step">Previous</button>

                                    <button type="submit" class="btn btn-primary border-0 mb-3 px-3">
                                        <i class="bi bi-send-fill"></i>
                                        <small class="fw-semibold">Submit</small>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-expert" role="tabpanel" aria-labelledby="pills-expert-tab"
                    tabindex="0">
                    <h4 class="text-center my-3" style="color: var(--sky-blue);">Add Expert</h4>

                    <form action="<?php echo e(route('experts.create')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="expertCategory" class="form-label">
                                        <small class="fw-semibold asterisk">Expert Category</small>
                                    </label>
                                    <select name="experts_categories_id" class="form-select select2"
                                        aria-label="Select Expert Category" aria-describedby="expertCategoryHelp"
                                        data-placeholder="Select Expert Category" id="experts_categories_id">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e(old('experts_categories_id') == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->category_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div id="expertCategoryHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="contactPersonName" class="form-label">
                                        <small class="fw-semibold asterisk">Contact Person Name</small>
                                    </label>
                                    <input type="text" class="form-control" id="contact_person_name"
                                        aria-describedby="contact_person_name" placeholder="Enter Contact person name"
                                        name="contact_person_name" required value="<?php echo e(old('contact_person_name')); ?>">
                                    <div id="contact_person_name" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="email" class="form-label">
                                        <small class="fw-semibold asterisk">Email address</small>
                                    </label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="example@gmail.com" name="email"
                                        required value="<?php echo e(old('email')); ?>">
                                    <div id="emailHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="mobile" class="form-label">
                                        <small class="fw-semibold asterisk">Mobile</small>
                                    </label>
                                    <input type="phone" class="form-control" id="mobile"
                                        aria-describedby="mobileHelp" placeholder="+880 17899 888888" name="mobile"
                                        required value="<?php echo e(old('mobile')); ?>">
                                    <div id="mobileHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="whatsapp_number" class="form-label">
                                        <small class="fw-semibold asterisk">Whatsapp Number</small>
                                    </label>
                                    <input type="phone" class="form-control" id="whatsapp_number"
                                        aria-describedby="whatsapp_number" placeholder="+880 17899 888888"
                                        name="whatsapp_number" required value="<?php echo e(old('whatsapp_number')); ?>">
                                    <div id="whatsapp_number" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="address" class="form-label">
                                        <small class="fw-semibold asterisk">Address</small>
                                    </label>
                                    <input type="text" class="form-control" id="address"
                                        aria-describedby="addressHelp" placeholder="Enter Your Address" name="address"
                                        required value="<?php echo e(old('address')); ?>">
                                    <div id="addressHelp" class="form-text"></div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-2">
                                    <label for="google_map" class="form-label">
                                        <small class="fw-semibold">Google Map Direction</small>
                                    </label>
                                    <input type="url" class="form-control" id="google_map"
                                        aria-describedby="googleMapDirectionHelp"
                                        placeholder="https://www.google.com/maps/@23.798594,90.3465982,15z/data=!4m2!7m1!2e1?shorturl=1"
                                        name="google_map">
                                    <div id="google_map" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="website" class="form-label">
                                        <small class="fw-semibold">Website Link</small>
                                    </label>
                                    <input type="url" class="form-control" id="website"
                                        aria-describedby="websiteLinkHelp" placeholder="https://www.example.com"
                                        name="website" value="<?php echo e(old('website')); ?>">
                                    <div id="websiteLinkHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="country" class="form-label">
                                        <small class="fw-semibold asterisk">Country</small>
                                    </label>
                                    <select class="form-select select2" aria-label="Select Country"
                                        aria-describedby="countryHelp" data-placeholder="Select Country" name="country"
                                        required>
                                        <option>Select country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh" selected>Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic (Czechia)">Czech Republic (Czechia)</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="DR Congo">DR Congo</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="North Macedonia">North Macedonia</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts & Nevis">Saint Kitts & Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Vincent & Grenadines">St. Vincent & Grenadines</option>
                                        <option value="State of Palestine">State of Palestine</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <div id="countryHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="city" class="form-label">
                                        <small class="fw-semibold asterisk">City</small>
                                    </label>

                                    <select name="city"
                                        class="form-control select2 <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="city"
                                        required>
                                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e(old('city') == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div id="cityHelp" class="form-text"></div>
                                </div>

                                <div class="mb-2">
                                    <label for="description" class="form-label">
                                        <small class="fw-semibold">Description</small>
                                    </label>
                                    <textarea class="form-control" id="description" rows="4" aria-describedby="descriptionHelp"
                                        placeholder="Write Your Description Here..." name="description" required>
                                        <?php echo e(old('description')); ?>

                                    </textarea>
                                    <div id="descriptionHelp" class="form-text"></div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary border-0 mb-3 px-3">
                                <i class="bi bi-send-fill"></i>
                                <small class="fw-semibold">Submit</small>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab"
                    tabindex="0">
                    <h4 class="text-center my-3" style="color: var(--sky-blue);">Add Your Brand</h4>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<script>
    const app = Vue.createApp({
        data() {
            return {
                formData: {
                    contact_person_name: '',
                    email: '',
                    mobile: '',
                    whatsapp_number: '',
                    google_map_direction: '',
                    address: '',
                    website_link: '',
                    company_name: '',
                    company_email: '',
                    company_mobile: '',
                    company_description: '',
                    business_type: '',
                    business_category_id: '',
                    country: '',
                    city: '',
                },
                formTitle: 'Business Listing',
                formSubtitle: 'Business listing in multiple steps',
                nextButtonText: 'Next',
                backButtonText: 'Previous',
                finishButtonText: 'Submit',
                stepSize: 'xs',
                validateOnBack: false,
                color: '#ff0c0e',
                errorColor: '#8b0000',
                shape: 'circle',
                transition: '',
                startIndex: 0
            };
        },
        methods: {
            onComplete() {
                Swal.fire({
                    icon: 'success',
                    title: 'Business List Submitted Successfully!',
                    showConfirmButton: true,
                    timer: 2500
                });
            },
            validateStep() {
                if (this.contact_person_name && this.email) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    });

    const {
        FormWizard,
        TabContent
    } = window.Vue3FormWizard;
    app.component('form-wizard', FormWizard);
    app.component('tab-content', TabContent);

    app.mount('#app');
</script>


<?php $__env->startSection('custom_script'); ?>
    <script>
        $('#companyDescription').summernote({
            placeholder: 'Write Company Description Here...',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['font-family', ['style', 'fontname', 'fontsize', 'fontsizeunit']],
                ['font-style', ['bold', 'italic', 'underline', 'strikethrough']],
                ['color', ['color', 'forecolor', 'backcolor']],
                ['font', ['superscript', 'subscript']],
                ['clear', ['clear']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['table', 'link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help', 'undo', 'redo']]
            ]
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select An Option',
                width: '100%'
            });

            var currentStep = 1;
            var updateProgressBar;

            function displayStep(stepNumber) {
                if (stepNumber >= 1 && stepNumber <= 3) {
                    $(".step-" + currentStep).hide();
                    $(".step-" + stepNumber).show();
                    currentStep = stepNumber;
                    updateProgressBar();
                }
            }

            $(document).ready(function() {
                $('#multi-step-form').find('.step').slice(1).hide();

                $(".next-step").click(function() {
                    if (currentStep < 3) {
                        $(".step-" + currentStep).addClass(
                            "animate__animated animate__fadeOutLeft");
                        currentStep++;
                        setTimeout(function() {
                            $(".step").removeClass("animate__animated animate__fadeOutLeft")
                                .hide();
                            $(".step-" + currentStep).show().addClass(
                                "animate__animated animate__fadeInRight");
                            updateProgressBar();
                        }, 500);
                    }
                });

                $(".prev-step").click(function() {
                    if (currentStep > 1) {
                        $(".step-" + currentStep).addClass(
                            "animate__animated animate__fadeOutRight");
                        currentStep--;
                        setTimeout(function() {
                            $(".step").removeClass(
                                "animate__animated animate__fadeOutRight").hide();
                            $(".step-" + currentStep).show().addClass(
                                "animate__animated animate__fadeInLeft");
                            updateProgressBar();
                        }, 500);
                    }
                });

                updateProgressBar = function() {
                    var progressPercentage = ((currentStep - 1) / 2) * 100;
                    $(".progress-bar").css("width", progressPercentage + "%");
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/listing.blade.php ENDPATH**/ ?>