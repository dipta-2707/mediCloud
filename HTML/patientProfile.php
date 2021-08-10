<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MediCloud</title>
    <!-- -----------------------Favicon adding----------------- -->
    <link
      rel="shortcut icon"
      href="../Assets/Icons/favicon.png"
      type="image/x-icon"
    />
    <!-- -----------------------Bootstrap CSS style adding----------------- -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <!-- -----------------------------------------------Font Awesome kit-------------------------- -->
    <script
      src="https://kit.fontawesome.com/04ecdf395d.js"
      crossorigin="anonymous"
    ></script>
    <!-- -----------------------------------------------Animate css-------------------------- -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- ------------------------------CSS link up ------------------------ -->
    <link rel="stylesheet" href="../CSS/style.css" />
  </head>
  <body>
    <header>
      <!-- nav-bar add. -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a
            class="navbar-brand d-flex align-items-center fw-bold fs-3"
            href="patientHome.php"
          >
            <img
              src="../Assets/Images/doctor.svg"
              alt=""
              width="40"
              height="40"
              class="d-inline-block align-text-top me-2"
            />
            <span style="color: #ea5044">Medi</span
            ><span style="color: #555657">Cloud</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2 fs-5">
                <a
                  class="nav-link active navbar-shortcutlink"
                  aria-current="page"
                  href="patientHome.php"
                  >Home</a
                >
              </li>
              <li class="nav-item mx-2 fs-5">
                <a
                  class="nav-link active navbar-shortcutlink"
                  aria-current="page"
                  href="searchDoctor.php"
                  >Search Doctor</a
                >
              </li>
              <li class="nav-item mx-2 fs-5">
                <a
                  class="nav-link active navbar-shortcutlink"
                  aria-current="page"
                  href="patientAppointment.php"
                  >Appointment</a
                >
              </li>
              <li class="nav-item mx-2 fs-5">
                <a
                  class="nav-link active navbar-shortcutlink current-page"
                  aria-current="page"
                  href="#"
                  >Profile</a
                >
              </li>
              <li class="nav-item mx-2 fs-5">
                <a
                  class="nav-link active navbar-shortcutlink"
                  aria-current="page"
                  href="logout.php"
                  >Logout</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="container mt-4">
        <h1 class="card-title text-center mb-4">Profile</h1>
        <div class="card mb-3 border-0">
          <div class="row g-0 align-items-center">
            <div class="col-md-4 d-flex flex-column align-items-center">
              <div class="profile-image mt-3">
                <img
                  src="../Assets/Images/doctor.svg"
                  class="img-fluid rounded-circle"
                  height="200"
                  width="200"
                  alt="..."
                />
              </div>
              <div class="my-3">
                <button type="button" class="btn btn-success me-2">
                  Edit Photo
                </button>
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  Edit Profile
                </button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          Edit Profile
                        </h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="patientRegistration.php">
                          <div class="mb-3">
                            <label
                              for="exampleInputNamePatient"
                              class="form-label"
                              >Name</label
                            >
                            <input
                              name="patientName"
                              type="text"
                              class="form-control"
                              id="exampleInputNamePatient"
                              placeholder="Write your name here..."
                            />
                          </div>

                          <div class="mb-3">
                            <label
                              for="exampleInputEmailPatient"
                              class="form-label"
                              >Email address</label
                            >
                            <input
                              name="patientEmail"
                              type="email"
                              class="form-control"
                              id="exampleInputEmailPatient"
                              aria-describedby="emailHelp"
                              placeholder="Write your email here..."
                              readonly="readonly"
                            />
                            <div id="emailHelp" class="form-text">
                              We'll never share your email with anyone else.
                            </div>
                          </div>
                          <div class="mb-3">
                            <label
                              for="exampleInputAgePatient"
                              class="form-label"
                              >Age</label
                            >
                            <input
                              name="patientAge"
                              type="number"
                              class="form-control"
                              id="exampleInputAgePatient"
                              placeholder="Write your age here..."
                            />
                          </div>
                          <div class="mb-3">
                            <label
                              for="exampleInputNumberPatient"
                              class="form-label"
                              >Phone Number</label
                            >
                            <input
                              name="patientNumber"
                              type="number"
                              class="form-control"
                              id="exampleInputNumberPatient"
                              placeholder="Write your phone number here..."
                            />
                          </div>

                          <div class="mb-3">
                            <label
                              for="exampleInputAddressPatient"
                              class="form-label"
                              >Address</label
                            >
                            <input
                              name="patientAddress"
                              type="text"
                              class="form-control"
                              id="exampleInputAddressPatient"
                              placeholder="Write your full address..."
                            />
                          </div>

                          <div class="mb-3">
                            <label
                              for="exampleInputPasswordPatient"
                              class="form-label"
                              >Password</label
                            >
                            <input
                              name="patientPassword"
                              type="password"
                              class="form-control"
                              id="exampleInputPasswordPatient"
                              placeholder="Enter a password..."
                            />
                          </div>
                          <div class="mb-3">
                            <label
                              for="exampleInputPasswordConfirmPatient"
                              class="form-label"
                              >Confirm Password</label
                            >
                            <input
                              name="patientConfirmPassword"
                              type="password"
                              class="form-control"
                              id="exampleInputPasswordConfirmPatient"
                              placeholder="Re-type your password"
                            />
                          </div>

                          <button
                            type="submit"
                            class="btn btn-submit-style text-white"
                          >
                            <i class="far fa-check-circle me-1"></i>Submit
                          </button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Save changes
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-body mt-3">
                <div class="card-text lh-lg fs-4">
                  <label for="patient-profile-name">Name: </label><br />
                  <label for="patient-profile-email">Email: </label><br />
                  <label for="patient-profile-age">Age: </label><br />
                  <label for="patient-profile-phone">Phone: </label><br />
                  <label for="patient-profile-phone">Address: </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ----------------------------JS Bundle CDN-------------------------------  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>