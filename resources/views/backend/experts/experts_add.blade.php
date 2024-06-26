@extends('layouts.backend.master')
@section('title', 'Expert Add')
@push('meta')
@endpush
@push('theme_css')
@endpush
@push('page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
@endpush
@push('custom_css')
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 12px;
        }

        .cke_contents {
            height: 325px !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend/assets/css/image-uploader.min.css') }}">
@endpush
@push('head')
@endpush
@section('breadcrumb')
@endsection

@section('content')
    <form action="{{ route('experts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Expert Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="contact_person_name" class="col-sm-2 col-form-label">Contact Person Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_person_name"
                                        class="form-control @error('contact_person_name') is-invalid @enderror"
                                        id="contact_person_name" placeholder="Contact Person Name"
                                        value="{{ old('contact_person_name') }}">
                                </div>
                                @error('contact_person_name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="address"
                                        placeholder="Address" value="{{ old('address') }}">
                                </div>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-sm-2 col-form-label">Mobile <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="mobile"
                                        class="form-control @error('mobile') is-invalid @enderror" id="mobile"
                                        placeholder="Mobile" value="{{ old('mobile') }}">
                                </div>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-sm-2 col-form-label">Telephone <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="telephone"
                                        class="form-control @error('telephone') is-invalid @enderror" id="telephone"
                                        placeholder="Telephone" value="{{ old('telephone') }}">
                                </div>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="whatsapp_number" class="col-sm-2 col-form-label">WhatsApp <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="whatsapp_number"
                                        class="form-control @error('whatsapp_number') is-invalid @enderror"
                                        id="whatsapp_number" placeholder="WhatsApp" value="{{ old('whatsapp_number') }}">
                                </div>
                                @error('whatsapp_number')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="price"
                                        class="form-control @error('price') is-invalid @enderror" id="price"
                                        placeholder="Price" value="{{ old('price') }}">
                                </div>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Title" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="about" class="col-sm-2 col-form-label">About <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="about" id="about" rows="3">{{ old('about') }}</textarea>
                                </div>
                                @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group row">
                                <label for="experts_categories_id" class="col-sm-2 col-form-label">Catgory <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select name="experts_categories_id" class="form-control select2"
                                        id="experts_categories_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('experts_categories_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="working_hours" class="col-sm-2 col-form-label">Working Hours</label>


                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Sunday</span>
                                            </div>
                                            <input type="text" class="form-control" name="sunday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Monday</span>
                                            </div>
                                            <input type="text" class="form-control" name="monday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Tuesday</span>
                                            </div>
                                            <input type="text" class="form-control" name="tuesday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Wednesday</span>
                                            </div>
                                            <input type="text" class="form-control" name="wednesday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Thursday</span>
                                            </div>
                                            <input type="text" class="form-control" name="thursday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Friday</span>
                                            </div>
                                            <input type="text" class="form-control" name="friday_hours"
                                                value="" required>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="form-control input-group-text" style="width: 100px;"
                                                    disabled>Saturday</span>
                                            </div>
                                            <input type="text" class="form-control" name="saturday_hours"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                                @error('working_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Description</h4>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="description" class="form-control ckeditor" id="description" rows="6">
                                        {{ old('description') }}
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="services " class="col-sm-2 col-form-label">Services <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="services" id="services" rows="3">
                                        {{ old('services') }}
                                    </textarea>
                                </div>
                                @error('services')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="starting_prices" class="col-sm-2 col-form-label">Starting Prices <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="starting_prices"
                                        class="form-control @error('starting_prices') is-invalid @enderror"
                                        id="starting_prices" placeholder="Starting Prices"
                                        value="{{ old('starting_prices') }}">
                                </div>
                                @error('starting_prices')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="social_profile" class="col-sm-2 col-form-label">Social Profile<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Facebook</span>
                                        </div>
                                        <input type="text" class="form-control" name="facebook" value=""
                                            required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Instagram</span>
                                        </div>
                                        <input type="text" class="form-control" name="instagram" value=""
                                            required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Twitter</span>
                                        </div>
                                        <input type="text" class="form-control" name="twitter" value=""
                                            required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Linkedin</span>
                                        </div>
                                        <input type="text" class="form-control" name="linkedin" value=""
                                            required>
                                    </div>
                                </div>
                                @error('social_profile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="google_map" class="col-sm-2 col-form-label">Contact Google Map</label>
                                <div class="col-sm-10">
                                    <input type="text" name="google_map"
                                        class="form-control @error('google_map') is-invalid @enderror" id="google_map"
                                        placeholder="Contact Google Map" value="{{ old('google_map') }}">
                                </div>
                                @error('google_map')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group row">
                                <label for="website" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="website"
                                        class="form-control @error('website') is-invalid @enderror" id="website"
                                        placeholder="Website" value="{{ old('website') }}">
                                </div>
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">City <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="city" class="form-control select2 @error('city') is-invalid @enderror"
                                    id="city">
                                    @foreach ($locations as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('city') == $item->id ? 'selected' : '' }}>
                                            {{ $item->title }}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label">Country <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-select select2" aria-label="Select Country"
                                        aria-describedby="countryHelp" data-placeholder="Select Country"
                                        v-model="formData.country" name="country" required>
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
                                </div>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Status <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control select2" id="status">
                                        <option value="active" selected>Active</option>
                                        <option value="pending">Pending</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">SEO Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="seo_title" class="col-sm-2 col-form-label">SEO Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="seo_title"
                                        class="form-control @error('seo_title') is-invalid @enderror" id="seo_title"
                                        placeholder="SEO Title" value="{{ old('seo_title') }}">
                                </div>
                                @error('seo_title')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="seo_keywords" class="col-sm-2 col-form-label">SEO Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="seo_keywords"
                                        class="form-control @error('seo_keywords') is-invalid @enderror"
                                        id="seo_keywords" placeholder="SEO Keywords" value="{{ old('seo_keywords') }}">
                                </div>
                                @error('seo_keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="seo_description" class="col-sm-2 col-form-label">SEO Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="seo_description" id="seo_description" rows="3"
                                        placeholder="SEO Description">
                                        {{ old('seo_description') }}
                                    </textarea>
                                </div>
                                @error('seo_description')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Expert Image <span class="text-danger">*</span></h4>
                            <hr>
                            <input type="file" class="form-control" id="expert_image" name="expert_image" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Cover Photo<span class="text-danger">*</span></h4>
                            <hr>
                            <input type="file" class="form-control" id="cover_photo" name="cover_photo" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
                <hr>
            </div>

        </div>
    </form>
@endsection

@push('theme_js')
@endpush
@push('page_js')
    <script src="{{ asset('Backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
@endpush
@push('custom_js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="{{ asset('Backend/assets/js/image-uploader.min.js') }}"></script>
    <script>
        $('.experts-images').imageUploader();
    </script>
    <script type="text/javascript">
        function convertToSlug(str) {
            console.log(str)
            //replace all special characters | symbols with a space
            str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .toLowerCase();
            // trim spaces at start and end of string
            str = str.replace(/^\s+|\s+$/gm, '');

            // replace space with dash/hyphen
            str = str.replace(/\s+/g, '-');
            document.getElementById("title_slug").value = str;
            //return str;
        }
    </script>
    <script>
        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
        $(".select2#brand_model").select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Model'
        });

        $(function() {
            $(".datepicker-2").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
        $(document).ready(function() {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
        $("#brandSelect").on("change", function(event) {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
