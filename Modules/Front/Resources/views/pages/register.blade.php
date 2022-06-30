<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{ url('/') }}/css/register.css">
    <link rel="icon" type="image/png" href="{{ url('/') }}/images/icons/favicon.ico"/>
    <style>
            select {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
}
    </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title>Register</title>
   
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="{{ route('patiant.post.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input value="{{ old('name') }}" type="text" name="name" placeholder="Enter your name" >
            @if ($errors->has('name'))
              <span class="invalid feedback "role="alert">
                  <strong style="color: rgb(197, 51, 51)">{{ $errors->first('name') }}.</strong>
              </span>
            @endif
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input value="{{ old('email') }}" type="email" name="email" placeholder="Enter your email" >
            @if ($errors->has('email'))
                <span class="invalid feedback "role="alert">
                    <strong style="color: rgb(197, 51, 51)">{{ $errors->first('email') }}.</strong>
                </span>
            @endif
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input value="{{ old('phone') }}" type="text" name="phone" placeholder="Enter your number" >
            @if ($errors->has('phone'))
                <span class="invalid feedback "role="alert">
                    <strong style="color: rgb(197, 51, 51)">{{ $errors->first('phone') }}.</strong>
                </span>
            @endif
          </div>
          <div class="input-box">
            <span class="details">Image</span>
           <input type="file" name="image" >
            @if ($errors->has('image'))
                <span class="invalid feedback "role="alert">
                    <strong style="color: rgb(197, 51, 51)">{{ $errors->first('image') }}.</strong>
                </span>
            @endif
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" >
            @if ($errors->has('password'))
                <span class="invalid feedback "role="alert">
                    <strong style="color: rgb(197, 51, 51)">{{ $errors->first('password') }}.</strong>
                </span>
            @endif
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password_confirmation" placeholder="Confirm your password" >
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>