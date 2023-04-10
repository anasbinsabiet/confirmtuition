@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-xl-3">
                    <aside class="tu-asider-holder">
                        <!-- <div class="tu-asidebox">
                            <figure>
                                <img src="{{asset('public/frontend/asset/images/profile/img-01.jpg')}}"
                                    alt="image-description">
                                <figcaption class="tu-uploadimage">
                                    <input type="file" id="dropbox" name="dropbox">
                                    <label for="dropbox"><i class="icon icon-camera"></i></label>
                                </figcaption>
                            </figure>
                            <div class="tu-uploadinfo text-center">
                                <h6>
                                    Your profile photo should not be larger that 500px X 500px & weight should not
                                    exceede 100kb
                                </h6>
                                <div class="tu-uploadimgbtn">
                                    <input type="file" name="file" class="tu-primbtn" id="uploadimg">
                                    <label for="uploadimg" class="tu-primbtn">Upload photo</label>
                                </div>
                            </div>
                        </div> -->
                        <ul class="tu-side-tabs">
                            <li class="nav-item ">
                                <a href="profile-setting-a.html" class="active nav-link"><i
                                        class="icon icon-user"></i><span>Personal details</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-setting-b.html" class="nav-link"><i
                                        class="icon icon-phone"></i><span>Contact details</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-setting-c.html" class="nav-link"><i
                                        class="icon icon-book"></i><span>Education</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-setting-d.html" class="nav-link"><i
                                        class="icon icon-book-open"></i><span>Subjects I can teach</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-setting-e.html" class="nav-link"><i
                                        class="icon icon-image"></i><span>Media gallery</span></a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="tu-profilewrapper">
                        <div class="tu-boxwrapper">
                            <div class="tu-boxarea">
                                <div class="tu-boxsm">
                                    <div class="tu-boxsmtitle">
                                        <h4>Personal details</h4>
                                    </div>
                                </div>
                                <div class="tu-box">
                                    <div class="card-body p-4">
                                        <div class="d-flex text-black">
                                            <div class="flex-shrink-0">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                                    alt="Generic placeholder image" class="img-fluid"
                                                    style="width: 180px; border-radius: 10px;">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-1">Danny McLoan</h5>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">Senior Journalist</p>
                                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                                    style="background-color: #efefef;">
                                                    <div>
                                                        <p class="small text-muted mb-1">Articles</p>
                                                        <p class="mb-0">41</p>
                                                    </div>
                                                    <div class="px-3">
                                                        <p class="small text-muted mb-1">Followers</p>
                                                        <p class="mb-0">976</p>
                                                    </div>
                                                    <div>
                                                        <p class="small text-muted mb-1">Rating</p>
                                                        <p class="mb-0">8.5</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex pt-1">
                                                    <button type="button"
                                                        class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                                                    <button type="button"
                                                        class="btn btn-primary flex-grow-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <form class="tu-themeform tu-dhbform">
                                        <fieldset>
                                            <div class="tu-themeform__wrap">
                                                <div class="form-group-wrap">
                                                    <div class="form-group form-group-half">
                                                        <label class="tu-label">First name</label>
                                                        <div class="tu-placeholderholder">
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="Your first name">
                                                            <div class="tu-placeholder">
                                                                <span>Your first name</span>
                                                                <em>*</em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <label class="tu-label">Last name</label>
                                                        <div class="tu-placeholderholder">
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="Your last name">
                                                            <div class="tu-placeholder">
                                                                <span>Your last name</span>
                                                                <em>*</em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <label class="tu-label">Your tagline</label>
                                                        <div class="tu-placeholderholder">
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="Add your tagline">
                                                            <div class="tu-placeholder">
                                                                <span>Add your tagline</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <label class="tu-label">Hourly fee</label>
                                                        <div class="tu-placeholderholder">
                                                            <input type="number" class="form-control" required=""
                                                                placeholder="Your hourly fee">
                                                            <div class="tu-placeholder">
                                                                <span>Your hourly fee</span>
                                                                <em>*</em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-3half">
                                                        <label class="tu-label">Country</label>
                                                        <div class="tu-select">
                                                            <select id="selectv8"
                                                                data-placeholder="Select Country from list"
                                                                data-placeholderinput="Select Country from list"
                                                                class="form-control" required>
                                                                <option label="Select Country from list"></option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire">Bonaire</option>
                                                                <option value="Bosnia & Herzegovina">Bosnia &
                                                                    Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Ter">British Indian
                                                                    Ocean Ter</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Canary Islands">Canary Islands</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Channel Islands">Channel Islands</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island
                                                                </option>
                                                                <option value="Cocos Island">Cocos Island</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-3half">
                                                        <label class="tu-label">City</label>
                                                        <div class="tu-select">
                                                            <select id="selectv9" data-placeholder="Select city"
                                                                data-placeholderinput="Select city" class="form-control"
                                                                required>
                                                                <option label="Select City from list"></option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire">Bonaire</option>
                                                                <option value="Bosnia & Herzegovina">Bosnia &
                                                                    Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Ter">British Indian
                                                                    Ocean Ter</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Canary Islands">Canary Islands</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Channel Islands">Channel Islands</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island
                                                                </option>
                                                                <option value="Cocos Island">Cocos Island</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-3half">
                                                        <label class="tu-label">Zipcode</label>
                                                        <div class="tu-placeholderholder">
                                                            <input type="number" class="form-control" required
                                                                placeholder="Enter zipcode">
                                                            <div class="tu-placeholder">
                                                                <span>Enter zipcode</span>
                                                                <em>*</em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="tu-label">Languages</label>
                                                        <div class="tu-select">
                                                            <select id="selectv5"
                                                                data-placeholder="Select languages you know"
                                                                class="form-control" required>
                                                                <option label="Select languages you know"></option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                            </select>
                                                        </div>
                                                        <ul class="tu-labels">
                                                            <li><span>Arabic <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                            <li><span>English <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                            <li><span>Chinese <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                            <li><span>Hebrew <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                            <li><span>Spanish <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                            <li><span>German <a href="javascript:void(0);"><i
                                                                            class="icon icon-x"></i></a></span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="tu-label">I can teach on</label>
                                                        <ul class="tu-status-filter">
                                                            <li>
                                                                <div class="tu-status-contnent">
                                                                    <div class="tu-check tu-checksm">
                                                                        <input type="checkbox" id="home" name="expcheck"
                                                                            checked="">
                                                                        <label for="home">My home</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="tu-status-contnent">
                                                                    <div class="tu-check tu-checksm">
                                                                        <input type="checkbox" id="home1"
                                                                            name="expcheck" checked="">
                                                                        <label for="home1">Student's home</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="tu-status-contnent">
                                                                    <div class="tu-check tu-checksm">
                                                                        <input type="checkbox" id="online"
                                                                            name="expcheck">
                                                                        <label for="online">Online</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="tu-label">A brief introduction</label>
                                                        <div class="tu-placeholderholder">
                                                            <textarea class="form-control"
                                                                placeholder="Enter description"></textarea>
                                                            <div class="tu-placeholder">
                                                                <span>Enter description</span>
                                                            </div>
                                                        </div>
                                                        <div class="tu-input-counter">
                                                            <span>Characters left:</span>
                                                            <b>500</b>
                                                            /
                                                            <em> 500</em>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="tu-btnarea-two">
                            <span>Save & update the latest changes to the live</span>
                            <a href="profile-setting-b.html" class="tu-primbtn-lg tu-primbtn-orange">Save & update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection