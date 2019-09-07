@extends('layouts.app')
@section('profile')

        <!-- Services Subpage -->
            <section class="pt-page" data-id="profile">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="images/photo.png" alt="">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1>Alex Smith</h1>
                        <div class="owl-carousel text-rotation">                                    
                          <div class="item">
                            <div class="sp-subtitle">Web Designer</div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Frontend-developer</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <div class="block-title">
                          <h3>About <span>Me</span></h3>
                        </div>
                        <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                      </div>
                     
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <li><span class="title">Age</span><span class="value">29</span></li>
                        <li><span class="title">Residence</span><span class="value">USA</span></li>
                        <li><span class="title">Address</span><span class="value">Los Angeles, USA</span></li>
                        <li><span class="title">e-mail</span><span class="value"><a href="https://lmpixels.com/cdn-cgi/l/email-protection#ec89818d8580ac89948d819c8089c28f8381"><span class="__cf_email__" data-cfemail="e0858d81898ca08598818d908c85ce838f8d">[email&#160;protected]</span></a></span></li>
                        <li><span class="title">Phone</span><span class="value">+0123 123 456 789</span></li>
                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
                <div class="download-resume">
                    <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
                </div>
            </section>
            <!-- End of Profile Subpage -->

            @endsection
