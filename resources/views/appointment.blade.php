@extends('head')

@section('content')
  <div class="row text-center imondgray" style="padding-top: 60px;">
    <h1>Book An Appointment</h1>
  </div>

  <div class="row imondgray">
<!-- start appointment form -->
    <div class="col-md-6"><h1 class="imond2">Fill Up The Appointment Form</h1>
      <form class="form-horizontal" action="malto://keringlaban@yahoo.com">
        <div class="form-group">
          <label for="name" class="col-sm-2 imond2 control-label">Your Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="your name goes here">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 imond2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="your email">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 imond2 control-label">Details</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" placeholder="Details of the appointment" name="content"></textarea>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Book</button>
        </div>
    </div>
    </form>
  </div>
<!-- end appointment form -->

    <div class="row imondopac">
      <div class="col-md-6 imondopac">
        <h2 class="imond2">Introducing Kalya &amp; CO advocates</h2>

        <p class="text-center imond1 mg-lg animated fadeInUp animDelay02"> <br><br><br><br>
          We practice in the Supreme Court, Court of Appeal, <br>the High Court, Subordinate Courts,
          the Tribunals, Quasi Judicial <br>Tribunals and other fora where there is need for advocacy
          and litigation on behalf of our clients <br>. We have over 1500 litigation matters of which
          60% are in the subordinate courts, 38% in the High Court <br>and 20% in the court of Appeal.
          Our success rate in contentious matters is high.
        </p>

      </div>
    </div>

  </div>

@endsection
