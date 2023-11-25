@extends('admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=""><i class="material-icons"></i> {{ __('RECTUS Home') }} </a></li>
    </ol>
  </nav>

@endsection

@section('content')

<div class="row">
    <div class="col-lg-2 col-2"></div>
          {{-- <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$rounds}}</h3>

                <p>Rounds on {{$monthRound}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$roundsYear}}</h3>

                <p>Rounds on {{$year}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div> --}}
          <div class="col-lg-2 col-2"></div>
          <!-- ./col -->
        </div>
        <!-- /.row -->


</div>
@endsection
