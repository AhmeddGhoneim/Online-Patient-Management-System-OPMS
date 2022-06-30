<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{ url('/') }}/css/register.css">
    <link rel="icon" type="image/png" href="{{ url('/') }}/images/icons/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
      <form action="{{ route('doctor.post.register') }}" method="POST">
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
            <span class="details">Category</span>
            <select name="category_id" >
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option {{ old('category_id') == $category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('category_id'))
                <span class="invalid feedback "role="alert">
                    <strong style="color: rgb(197, 51, 51)">{{ $errors->first('category_id') }}.</strong>
                </span>
            @endif
          </div>


          <div class="input-box">
            <span class="details">Address</span>
            <input value="{{ old('address') }}" type="text" name="address" placeholder="Enter your address" >
            @if ($errors->has('address'))
              <span class="invalid feedback "role="alert">
                  <strong style="color: rgb(197, 51, 51)">{{ $errors->first('address') }}.</strong>
              </span>
            @endif
          </div>

          <div class="input-box">
            <span class="details">Price</span>
            <input value="{{ old('price') }}" type="number" name="price" placeholder="Enter your price" >
            @if ($errors->has('price'))
              <span class="invalid feedback "role="alert">
                  <strong style="color: rgb(197, 51, 51)">{{ $errors->first('price') }}.</strong>
              </span>
            @endif
          </div>


          <div class="input-box">
            <span class="details">Doctor Days</span>
            <select id="days" required name="days[]" multiple >
                                           
          
                                                <option  value="Saturday">Saturday</option>
                                                <option  value="Sunday">Sunday</option>
                                                <option  value="Monday">Monday </option>
                                                <option  value="Tuesday">Tuesday</option>
                                                <option  value="Wednesday">Wednesday</option>
                                                <option  value="Thursday">Thursday</option>
                                                <option  value="Friday">Friday</option>
                                           
                                        </select>
        
          </div>


          <div class="input-box">
            <span class="details">From</span>
                <input type="time" name="from" class="form-control">
          
          </div>

          <div class="input-box">
            <span class="details">To</span>
            <input type="time" name="to" class="form-control">
          
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
      $('#days').select2();
  });
</script>
</body>
</html>