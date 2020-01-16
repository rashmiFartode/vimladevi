@extends('frontEnd.layouts.mainlayouts')
@section('title','Contact Us')
@section('customcss')
<style>
.hei{
    height: 126px;
    /*margin-bottom:5px;*/
  }


/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
 /* width: 33.33%;*/
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #cfc1d0;
  cursor: pointer;
  color:#4f5063 ;
}

.btn:hover {
  background-color: #ddd;
  color: black;
}

.btn.active {
  background-color: #69406a;
  color: white;
}
.content{
  color: #fff;
  font-size: 48px;
  font-family: "Playfair Display", serif;
  margin-bottom: 0px;
  font-weight: bold;
}
.page_link{
  font-size: 14px;
  font-family: "Roboto", sans-serif;
  margin-right: 32px;
  position: relative;
}
.col{
 color:white;
}
</style>
@endsection
@section('content-wrapper')
<section>
  <div class="banner">
  </div>
</section>
<!-- #intro -->
<main id="main">
  <!--========================== Welcome Section ============================-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-heading1 text-center"><b>Contact</b></h2><hr>
        </div>
        <div class="col-md-6">
            @if($message = Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        <form class="was-validated" action="{{ route('send') }}" method="POST">
            @csrf
            <div class="form-group">
              {{-- <label for="uname">Name:</label> --}}
              <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname" required>
              @error('uname')  <small class="text-danger">{{ $errors->first('uname') }}</small> @enderror
            </div>
            <div class="form-group">
              {{-- <label for="email">Email:</label> --}}
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
              @error('email')  <small class="text-danger">{{ $errors->first('email') }}</small> @enderror
            </div>
            <div class="form-group">
              {{-- <label for="phone">Phone No:</label> --}}
              <input type="text" class="form-control" id="phone" placeholder="Enter Mobile No" name="phone" required>
              @error('phone')  <small class="text-danger">{{ $errors->first('phone') }}</small> @enderror
            </div>
            <div class="form-group">
              {{-- <label for="mgs">Message:</label> --}}
              <input type="text" class="form-control" id="mgs" placeholder="Enter message" name="mgs" required>
              @error('mgs')  <small class="text-danger">{{ $errors->first('mgs') }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <label for="add"><b>Address</b></label>
          <p>Address
            Vimaladevi Ayurvedic College, Wandhari,<br>
            Maharashtra 442406, India
          </p>
          <label for="emailo"><b>Email:</b></label>
          <p> vimladeviayurved@gmail.com</p>
          <label for="mob"><b>Phone</b></label>
          <p>91-9765934704,
            91-9552083366,<br>
            91-9552173366<br>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.5816852763505!2d79.20746451466334!3d19.984086986573462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd2d7f1be4f3e0d%3A0x237648086c1d3a28!2sVimala%20Devi%20Ayurvedic%20Medical%20College%2C%20Chandrapur!5e0!3m2!1sen!2sin!4v1576497302473!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
</main>
@endsection
@section('customjs')
@endsection
