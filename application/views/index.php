<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/tagsinput.css')}}">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/intlTelInput.css')}}">

  <title>Hello, world!</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="<?php echo base_url() ?>user_guide/_static/images/gambar/traveloka.png" height="70" width="150">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Promos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <form action="<?php echo base_url() ?>index.php/user/findticket" method="get" onsubmit="return validate()">

    <div class="container">
      <div class="col-md-12" style="border-style: solid; border-width: 1px;">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              1. Flight Destination
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              2. Date of Flight
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              3. Search Flights
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" style="border-style: solid; border-width: 0px 1px 0px 0px;">
            <div class="row align-items-center">
              <img src="<?php echo base_url() ?>user_guide/_static/images/gambar/planefly.png" height="42" width="42">
              <div class="col">
                <p>From:</p>
                <select id="from" name="from">
                  <?php foreach($negara as $negaralist): ?>
                    <option value=<?php echo $negaralist->Nama_Negara ?>><?php echo $negaralist->Nama_Negara ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="row align-items-center justify-content-center">
              <div class="col-md-8">
                <img src="<?php echo base_url() ?>user_guide/_static/images/gambar/swap.png" height="42" width="42" id="swap">
              </div>
            </div>
            <div class="row align-items-center">
              <img src="<?php echo base_url() ?>user_guide/_static/images/gambar/planeland.png" height="42" width="42">
              <div class="col">
                <p>To:</p>
                <select id="to" name="to">
                  <?php foreach($negara as $negaralist): ?>
                    <option value="<?php echo $negaralist->Nama_Negara ?>"><?php echo $negaralist->Nama_Negara ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="border-style: solid; border-width: 0px 1px 0px 0px;">
            <div class="row align-items-center">
              <img src="<?php echo base_url() ?>user_guide/_static/images/gambar/calendar.png" height="30" width="30">
              <div class="col">
                <p>Departure:</p>
                <input type="date" class="form-control" id="dateFlight" name="dateFlight">
              </div>
            </div>
          </div>
          <div class="col-md-4" style="border-style: solid; border-width: 0px 0px 0px 0px;">
            <div class="row align-items-center">
              How many people
              <select style="margin-left:10px" id="banyakOrang" name="banyakOrang">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="submit" class="btn btn-warning form-control" value="Search Flights">
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script type="text/javascript">
    document.getElementById("swap").addEventListener("click", function(){
      var fromSelect = document.getElementById("from");
      var from = fromSelect.options[fromSelect.selectedIndex].value;

      var toSelect = document.getElementById("to");
      var to = toSelect.options[toSelect.selectedIndex].value;

      fromSelect.value = to;
      toSelect.value = from;
    });
    function validate(){
      // console.log("haha");
      var fromSelect = document.getElementById("from");
      var from = fromSelect.options[fromSelect.selectedIndex].value;

      var toSelect = document.getElementById("to");
      var to = toSelect.options[toSelect.selectedIndex].value;

      if (from == to) {
        toastr.warning('Kota asal dan kota tujuan tidak boleh sama..!!!');
        return false;
      }

      var dateFlight = document.getElementById("dateFlight").value;

      if (dateFlight == null || dateFlight == "") {
        toastr.warning('Tanggal penerbangan harap diisi..!!!');
        return false;
      }

      var banyakOrangSelect = document.getElementById("banyakOrang");
      var banyakOrang = banyakOrangSelect.options[banyakOrangSelect.selectedIndex].value;

      return true;

      // var url = "{{URL::to('/findticket')}}";
      // url += "/" + from;
      // url += "/" + to;
      // url += "/" + dateFlight;
      // url += "/" + banyakOrang;

      // var url1 = "{{ URL::to('/findticket') }}";
      // var person = {firstName:"John", lastName:"Doe", age:46};
      // url1 += "/" + JSON.stringify(person);

      // console.log(url1);

      // window.open(url);
    }
  </script>

</body>
</html>
