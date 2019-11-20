<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task 2</title>
  </head>
  <body>
    <p class="form-option-tittle">Task 2</p>
    <div class="attributes">
      <div class="atrribute-label">
        Provinsi :
      </div>
      <div class="attribute-list">
        <select class="" name="province" id="province">
          <option value="">Provinsi</option>
          @foreach ($data as $province)
          <option value="{{$province['province_id']}}">{{$province['province']}}</option>
          @endforeach

        </select>
      </div>

    </div>
    <!-- <div class="attributes">
      <div class="atrribute-label">
        Provinsi :
      </div>
      <div class="attribute-list">
        <select class="" name="city" id="city">
          <option value="1">Pilih Kota</option>

        </select>

      </div>

    </div> -->


  </body>

</html>
