<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            #title{
                text-align: center;
                font-size: 55px;
            }
            #description{
              text-align: center;
              font-size: 20px;
              margin-top: 40px;
            }
            #survey-form{
              max-width: 40%;
              margin: auto;
              margin-bottom: 40px;
            }
        </style>

    <title>Survey Form</title>
  </head>
  <body>
    <h1 id="title">Form Survey</h1>
      <p id="description">Silahkan isi form dibawah ini dengan benar !</p>
  <form id="survey-form" method="POST" action="{{route('inputdata')}}">
              @csrf
            <div class="form-group">
              <label id="name-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="masukan nama dengan benar dan lengkap" required name="name">
            </div>
            <div class="form-group">
              <label id="email-label">Email</label>
              <input type="text" class="form-control" id="email" placeholder="pastikan gunakan email aktif anda" required name="email">
            </div>
                <div class="form-group">
                  <label id="number-label">Number</label>
                  <input type="number" class="form-control" name="number" id="number" min="1" max="20" placeholder="max 20">
              </div>
            <input type="hidden" name="id_data" value="{{Auth::user()->id}}">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select  class="form-control" id="dropdown" name="jurusan">
                    <option disabled selected value>Masukan Jurusan</option>
                      <option>Tekhnik Industri</option>
                      <option>Tekhnik Pemesinan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label id="jenis-label" >Jenis Kelamin</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">female</label>
              </div>
              <div class="form-group">
                <label id="Hoby-label" >Hoby</label><br>
                  <input type="checkbox" id="sepakbola" name="hoby" value="sepakbola">
                  <label for="sepakbola">Sepak bola</label><br>
                  <input type="checkbox" id="ngoding" name="hoby" value="ngoding">
                  <label for="ngoding">Ngoding</label>
            </div>
                <div class="form-group">
                  <label id="Alamat-label" >Alamat</label><br>
                    <textarea id="alamat" name="alamat" rows="3" cols="30"></textarea>
                </div>
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
