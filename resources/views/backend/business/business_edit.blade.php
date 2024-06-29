@extends('layouts.backend.master')
@section('title', 'Business Add')
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
    <form action="{{ route('business.update', $business->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $business->id }}">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Contact Person</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Person Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_person_name"
                                        class="form-control @error('contact_person_name') is-invalid @enderror"
                                        id="contact_person_name" placeholder="Contact Person Name"
                                        value="{{ $business->contact_person_name }}">
                                </div>
                                @error('contact_person_name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="contact_email"
                                        class="form-control @error('contact_email') is-invalid @enderror" id="contact_email"
                                        placeholder="Contact Email" value="{{ $business->contact_email }}">
                                </div>
                                @error('contact_email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Mobile <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_mobile"
                                        class="form-control @error('contact_mobile') is-invalid @enderror"
                                        id="contact_mobile" placeholder="Contact Mobile"
                                        value="{{ $business->contact_mobile }}">
                                </div>
                                @error('contact_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact WhatsApp <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_whatsapp"
                                        class="form-control @error('contact_whatsapp') is-invalid @enderror"
                                        id="contact_whatsapp" placeholder="Contact WhatsApp"
                                        value="{{ $business->contact_whatsapp }}">
                                </div>
                                @error('contact_whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Google Map</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_google_map"
                                        class="form-control @error('contact_google_map') is-invalid @enderror"
                                        id="contact_google_map" placeholder="Contact Google Map"
                                        value="{{ $business->contact_google_map }}">
                                </div>
                                @error('contact_google_map')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Address <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_address"
                                        class="form-control @error('contact_address') is-invalid @enderror"
                                        id="contact_address" placeholder="Contact Address"
                                        value="{{ $business->contact_address }}">
                                </div>
                                @error('contact_address')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="contact_image"
                                        class="form-control @error('contact_image') is-invalid @enderror"
                                        id="contact_image" placeholder="Contact Website">
                                </div>
                                @error('contact_image')
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
                            <h4 class="card-title">Company Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_name"
                                        class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                                        placeholder="Company Name" value="{{ $business->company_name }}">
                                </div>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Mobile <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_mobile"
                                        class="form-control @error('company_mobile') is-invalid @enderror"
                                        id="company_mobile" placeholder="Company Mobile"
                                        value="{{ $business->company_mobile }}">
                                </div>
                                @error('company_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="company_email"
                                        class="form-control @error('company_email') is-invalid @enderror"
                                        id="company_email" placeholder="Company Email"
                                        value="{{ $business->company_email }}">
                                </div>
                                @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Company Description</h4>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control ckeditor" id="company_description" name="company_description" rows="6">{{ $business->company_description }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    @error('company_description')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
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
                            <h4 class="card-title">Business Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Business Type <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="business_type"
                                        class="form-control @error('business_type') is-invalid @enderror"
                                        id="business_type" placeholder="Business Type"
                                        value="{{ $business->business_type }}">
                                </div>
                                @error('business_type')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="business_price" class="col-sm-2 col-form-label">Business Price <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" name="business_price"
                                        class="form-control @error('business_price') is-invalid @enderror"
                                        id="business_price" placeholder="Business Price"
                                        value="{{ $business->business_price }}">
                                </div>
                                @error('business_price')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group row">
                                <label for="business_category_id" class="col-sm-2 col-form-label">Business Catgory <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="business_category_id" class="form-control select2"
                                        id="business_category_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $business->business_category_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Business Hours <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <?php $business_hours = json_decode($business->business_hours); ?>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Sunday</span>
                                        </div>
                                        <input type="text" class="form-control" name="sunday_hours"
                                            value="{{ $business_hours->sunday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Monday</span>
                                        </div>
                                        <input type="text" class="form-control" name="monday_hours"
                                            value="{{ $business_hours->monday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Tuesday</span>
                                        </div>
                                        <input type="text" class="form-control" name="tuesday_hours"
                                            value="{{ $business_hours->tuesday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Wednesday</span>
                                        </div>
                                        <input type="text" class="form-control" name="wednesday_hours"
                                            value="{{ $business_hours->wednesday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Thursday</span>
                                        </div>
                                        <input type="text" class="form-control" name="thursday_hours"
                                            value="{{ $business_hours->thursday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Friday</span>
                                        </div>
                                        <input type="text" class="form-control" name="friday_hours"
                                            value="{{ $business_hours->friday_hours }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Saturday</span>
                                        </div>
                                        <input type="text" class="form-control" name="saturday_hours"
                                            value="{{ $business_hours->saturday_hours }}" required>
                                    </div>
                                </div>
                                @error('business_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">WhatsApp Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="whatsapp_number"
                                        class="form-control @error('whatsapp_number') is-invalid @enderror"
                                        id="whatsapp_number" placeholder="WhatsApp Number"
                                        value="{{ $business->whatsapp_number }}">
                                </div>
                                @error('whatsapp_number')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Social Media</label>
                                <div class="col-sm-10">
                                    <?php $social_media = json_decode($business->social_media); ?>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Facebook</span>
                                        </div>
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ $social_media->facebook }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Instagram</span>
                                        </div>
                                        <input type="text" class="form-control" name="instagram"
                                            value="{{ $social_media->instagram }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Twitter</span>
                                        </div>
                                        <input type="text" class="form-control" name="twitter"
                                            value="{{ $social_media->twitter }}" required>
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="form-control input-group-text" style="width: 100px;"
                                                disabled>Linkedin</span>
                                        </div>
                                        <input type="text" class="form-control" name="linkedin"
                                            value="{{ $social_media->linkedin }}" required>
                                    </div>
                                </div>
                                @error('social_media')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="social_media"
                                        class="form-control @error('website') is-invalid @enderror" id="website"
                                        placeholder="Website" value="{{ $business->website }}">
                                </div>
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">City <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                        <select name="city" class="form-control select2 @error('city') is-invalid @enderror" id="city">
                                            @foreach ($locations as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $business->locations_id == $item->id ? 'selected' : '' }}>
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
                                <label for="title" class="col-sm-2 col-form-label">Country <span
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
                                        <option value="active" @if($business->status == 'active') selected @endif>Active</option>
                                        <option value="pending" @if($business->status == 'pending') selected @endif>Pending</option>
                                        <option value="inactive" @if($business->status == 'inactive') selected @endif>Inactive</option>
                                        <option value="rejected" @if($business->status == 'rejected') selected @endif>Rejected</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="is_featured" class="col-sm-2 col-form-label">Featured <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="is_featured" class="form-control select2" id="is_featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
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
                                        placeholder="SEO Title" value="{{ $business->seo_title }}">
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
                                        id="seo_keywords" placeholder="SEO Keywords"
                                        value="{{ $business->seo_keywords }}">
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
                                        {{ $business->seo_description }}
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
                            <h4 class="card-title text-uppercase">Business Images <span class="text-danger">*</span></h4>
                            <hr>
                            <div class="business-images"></div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
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
        $('.business-images').imageUploader();
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
