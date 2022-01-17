@extends('layouts.admin')


@section('content')
<div class="container-fluid py-4">
    <h1><b>Overview</b></h1>
    <div class="row">

      <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Sales</p>
                  <h3 class="font-weight-bolder mb-0">
                  <b>{{$money}} Dt</b>
                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">paid</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Registred Users</p>
                  <h3 class="font-weight-bolder mb-0">
                  <b>{{$usercount}} Users</b>
                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">person</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">New Orders</p>
                  <h3 class="font-weight-bolder mb-0">
                    <b> {{$orders}} Order </b>

                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">reorder</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Products</p>
                  <h3 class="font-weight-bolder mb-0">
                    <b> {{$product}} Product </b>

                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">category</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Out of Stock</p>
                  <h3 class="font-weight-bolder mb-0">
                    <b> {{$outstock}} Product </b>

                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">close</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">In Stock</p>
                  <h3 class="font-weight-bolder mb-0">
                    <b> {{$stock}} Product </b>

                  </h3>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="material-icons" aria-hidden="true" style="font-size:50px; ">done</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
@endsection
