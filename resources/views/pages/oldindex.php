<hr>

<div class="container" id="about-section">
  <div id="about-header" class="text-center">
    <h2>About</h2>
  </div>
  <div id="about-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel efficitur erat. Integer vestibulum metus et augue cursus, nec scelerisque ipsum finibus. Aenean mauris erat, semper quis ultrices vitae, suscipit ut mi. Nam libero ipsum, viverra et ligula non, suscipit laoreet augue. Proin et nulla et diam maximus vehicula.</p>

    <p>Sed at libero neque. Morbi eget vulputate leo. Suspendisse a accumsan nisl. Mauris est augue, hendrerit et mauris sed, placerat placerat libero. Etiam consequat ante ut nunc molestie, a vehicula sem pellentesque. Curabitur vestibulum urna vestibulum nisl tincidunt eleifend.</p>


  </div>
  <br>
  <div id="about-footer" class="text-center">
    <small>Donec cursus lacus ac metus pretium imperdiet. Vestibulum rhoncus est leo</small>
  </div>
  <br>
  <hr>
</div>

fffffffff
<div class="container" id="contact-section">
  <div id="contact-header" class="text-center">
    <h2>Contact Me</h2>
  </div>
  {{-- <p>Feel free to sreach me via contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p> --}}
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      {!! Form::open(['route' => 'contact.store']) !!}
        <div class="form-group">
          {{form::label('name', 'Name')}}
          {{form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jane Doe'])}}
        </div>
        <div class="form-group">
          {{form::label('name', 'Email')}}
          {{form::text('email', null, ['class' => 'form-control', 'placeholder' => 'me@example.com'])}}
        </div>
        <div class="form-group ">
          {{form::label('msg', 'Message')}}
          {{form::textarea('msg', null, ['class' => 'form-control'])}}
          {{-- <label for="exampleInputText">Your Message</label> --}}
          {{-- <textarea  class="form-control" placeholder="Description"></textarea> --}}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}

      {!! Form::close() !!}


      <br>
      <hr>
      <br>
    </div>
  </div>
</div>


    {{--
       <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
  <li><a href="#">Action</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="#">Separated link</a></li>
</ul>
</div>
--}}
