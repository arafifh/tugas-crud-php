@extends('layout.layout')

@section('content')

<div class="container mt-2 pb-4" style="border-style: solid; border-radius: 6px;">
  <div class="row">
    <div class="col">
      <ol class="breadcrumb" style="background-color: white;">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">
          <a href="tbl_kar.html">Table Karyawan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Insert Page
        </li>
      </ol>
    </div>
  </div>
  <div class="col-">
    <div class="mb-4 text-center">
      <h1>Please Insert The Data Correctly!</h1>
    </div>
  </div>

  {{-- Cara untuk konect data ketika dikirim dengan controler --}}
  <form action="/karyawan" method="POST">
    @csrf
    <div class="row">
      <div class="col">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
      </div>
      <div class="col">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
      </div>
    </div>
    <div class="col">
      <label for="address">Address</label>
      <textarea name="address" id="address" cols="30" rows="10"></textarea>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="job_position">Job Position</label>
        <select name="job_position" id="job_position" class="form-control">
          <option value="Golongan IA">Golongan IA</option>
          <option value="Golongan IB">Golongan IB</option>
          <option value="Golongan IC">Golongan IC</option>
          <option value="Golongan ID">Golongan ID</option>
          <option value="Golongan IIA">Golongan IIA</option>
          <option value="Golongan IIB">Golongan IIB</option>
          <option value="Golongan IIC">Golongan IIC</option>
          <option value="Golongan IID">Golongan IID</option>
          <option value="Golongan IIIA">Golongan IIIA</option>
          <option value="Golongan IIIB">Golongan IIIB</option>
          <option value="Golongan IIIC">Golongan IIIC</option>
          <option value="Golongan IIID">Golongan IIID</option>
          <option value="Golongan IVA">Golongan IVA</option>
          <option value="Golongan IVB">Golongan IVB</option>
          <option value="Golongan IVC">Golongan IVC</option>
          <option value="Golongan IVD">Golongan IVD</option>
          <option value="Golongan IVE">Golongan IVE</option>
        </select>
      </div>
      <div class="col">
        <label for="gender">Gender</label>
        <div class="form-group">
          <select name="gender" id="gender" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="Date">Join Date</label>
        <br />
        <input type="date" id="join_date" name="join_date" />
      </div>
      <div class="col-0">
        <button type="reset" class="btn btn-danger">reset</button>
      </div>
      <div class="col-2">
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </div>
  </form>
</div>

@endsection