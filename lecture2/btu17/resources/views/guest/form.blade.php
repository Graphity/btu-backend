<!DOCTYPE html>
<html>
<head>
  <title>Form To Test Post Method</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<form action="{{ route("posttest") }}" method="POST">
  @csrf  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First name</label>
      <input type="text" class="form-control" placeholder="John" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label>Last name</label>
      <input type="text" class="form-control" placeholder="Doe" name="lname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Date of Birth</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <div class="form-group col-md-6">
      <label>Address</label>
      <input type="text" class="form-control" placeholder="1234 Main St" name="address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Biography</label>
      <textarea class="form-control" rows="4" placeholder="Your Biography" name="bio"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Test Post Request</button>
</form>
</body>
</html>
