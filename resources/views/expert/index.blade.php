@extends('layouts.frontend')
@section('title')
    <title>Expert List| GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg expert my-5">
          <div class="row row-cols-1 g-4">
            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person1.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person2.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person3.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person4.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person5.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person6.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card expert-list border-0">
                <div class="row g-0">
                  <div class="col-md-4 p-2">
                    <div class="img-container rounded">
                      <img src="{{ asset('images/person9.png') }}" class="img-fluid rounded d-block m-auto" alt="..." title="..." style="width: auto; height: 235px;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                      <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">Brittany Watkins</h5>

                      <div class="social-media-link">
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                          <i class="bi bi-telegram"></i>
                        </a>
                      </div>


                      <div class="row row-cols-1 row-cols-md-2 my-3 info">
                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Office: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-top border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Email: </span>
                            <a href="mailto:" class="text-decoration-none  float-end">example@gmail.com</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Mobile: </span>
                            <a href="tel:+" class="text-decoration-none float-end">+880 1789 777777</a>
                          </div>
                        </div>

                        <div class="col">
                          <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                            <span>Website: </span>
                            <a href="#" class="text-decoration-none  float-end">https://www.example.com</a>
                          </div>
                        </div>
                      </div>


                      <div>
                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0" href="#" role="button">
                          <i class="bi bi-envelope"></i>
                          <small>Message</small>
                        </a>

                        <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0" href="#" role="button">
                          <i class="bi bi-whatsapp"></i>
                          <small>Whatsapp</small>
                        </a>

                        <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0" href="./expert_profile.html" role="button">
                          <small>View Profile</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
