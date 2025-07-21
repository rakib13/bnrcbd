<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Registration </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary"> Login</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Registration Start -->
<div class="container-fluid bg-light blog pb-2">
    <div class="text-center mx-auto py-5 pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
        <div id="mission" class="bg-white rounded px-5 py-4 h-100 section active">
            <h4 class="text-primary text-center mt-2" class="col-12">Registration</h4>
            <div class="row g-4 justify-content-center mt-1">
                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="name" placeholder="User Name">
                            <label for="name">User Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="name" placeholder="Email">
                            <label for="name">Email</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <input type="password" class="form-control border-0" id="name" placeholder="Password">
                            <label for="name">Password</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <input type="password" class="form-control border-0" id="name"
                                placeholder="Re-Password">
                            <label for="name">Re-Password</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="mx-auto">
                        <select data-mdb-select-init class="form-select" aria-label="Default select example">
                            <option selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="name">
                        <label class="form-check-label" for="name"><b>Is Archive User</b></label>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mt-3">
                    <div class="mx-auto">
                        <div class="form-floating">
                            <button class="btn btn-primary w-100 py-3">Register</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Registration End -->

@include('layouts.footer')

</body>

</html>
