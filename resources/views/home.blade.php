@extends ('layout.bootstrap')

@section ('main')

<main>
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mar-top">
        <h3>PORTFOLIO</h3>
        <div class="linea line-black"></div>
        <span class="glyphicon glyphicon-star sta-size" aria-hidden="true"></span>
        <div class="linea line-black"></div>
      </div>
    </div>
    <div class="row ">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:25.jpg" alt="image">
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:27.jpg" alt="image">
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:30.jpg" alt="image">
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:35.jpg" alt="image">
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:46.jpg" alt="image">
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mar-top square">
      <img src="css/home/img/IMAGE 2020-10-06 11:55:51.jpg" alt="image">
    </div>
    </div>
  </div>
  <div class="bg-green mar-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center color-w pad">
          <h3>ABOUT</h3>
          <div class="linea line-white"></div>
          <span class="glyphicon glyphicon-star sta-size color-w" aria-hidden="true"></span>
          <div class="linea line-white"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4 ">
          <div class="brick color-w">
              Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
          </div>
        </div>
        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4">
          <div class="brick color-w">
            You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center pad">
          <a class="btn btn-default bott-down color-w bg-green" href="#" role="button">Download</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mar-top">
        <h3>CONTACT ME</h3>
        <div class="linea line-black"></div>
        <span class="glyphicon glyphicon-star sta-size" aria-hidden="true"></span>
        <div class="linea line-black"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2  col-lg-8">
        <div class="form-group input-boot">
          <div class="pad">
            <p>Name</p>
            <div class="col-sm-12">
              <input type="email" class="form-control " id="inputEmail3" placeholder="Name">
            </div>
          </div>
          <div class="pad">
            <p>Email-Address</p>
            <div class="col-sm-12">
              <input type="email" class="form-control " id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="pad">
            <p>Phone-Number</p>
            <div class="col-sm-12">
              <input type="email" class="form-control " id="inputEmail3" placeholder="Number">
            </div>
          </div>
          <div class="pad">
            <p>Message</p>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Text input">
            </div>
          </div>
          <div class="pad">
          <button type="button" class="btn btn-success btn-lg">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
