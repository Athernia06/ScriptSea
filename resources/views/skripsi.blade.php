@extends('layouts.app')

@section('content')
<!--Section: Breadcrumb-->
<section class="mb-4">
  <div class="card">
    <div class="card-header text-center py-3" style="padding-bottom: 0 !important;">
      <h5 class="mb-0 text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Skripsi</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Minimal statistics cards-->
<section>
  <div class="card-body py-5 px-4 p-md-5" style="background: white; border-radius: 0.5rem;padding: 0.5rem 1.5rem 1rem !important;">
    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a
        class="nav-link active"
        id="ex1-tab-1"
        data-mdb-toggle="tab"
        href="#ex1-tabs-1"
        role="tab"
        aria-controls="ex1-tabs-1"
        aria-selected="true"
        >Upload Syarat Sidang</a
        >
      </li>
      <li class="nav-item" role="presentation">
        <a
        class="nav-link"
        id="ex1-tab-2"
        data-mdb-toggle="tab"
        href="#ex1-tabs-2"
        role="tab"
        aria-controls="ex1-tabs-2"
        aria-selected="false"
        >Cek Jadwal Sidang</a
        >
      </li>
      <li class="nav-item" role="presentation">
        <a
        class="nav-link"
        id="ex1-tab-3"
        data-mdb-toggle="tab"
        href="#ex1-tabs-3"
        role="tab"
        aria-controls="ex1-tabs-3"
        aria-selected="false"
        >Cek Hasil Sidang</a
        >
      </li>
    </ul>
    <!-- Tabs navs -->
    
    <!-- Tabs content -->
    <div class="tab-content" id="ex1-content">
      <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
        <p>1. Blanko semester 1-8 yg sdh dibayarkan</p> 
        <p>2. Blanko sarpras cicil 1-3 yg sdh dibayarkan</p>
        <p>3. Lembar persetujuan/ACC skripsi</p>
        <p>4. KTP</p>
        <p>5. Fotokopi Ijasah SMA</p>
        <p>6. Format berkas sidang setelah lulus</p>
        <br>
        <label for="formFileMultiple" class="form-label">Multiple files input</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple />
        <br>
        <button type="submit" class="btn btn-primary mb-4">Submit File</button>
      </div>
      <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        <div class="month">
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>August<br><span style="font-size:18px">2021</span></li>
          </ul>
        </div>
        
        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>
        
        <ul class="days">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
        <div class="table-responsive" style="background: white; border-radius: 0.5rem; padding: 1rem">
          <table class="table table-striped table-hover table-bordered border-dark">
            <thead>
              <tr>
                <th scope="col">Mahasiswa</th>
                <th scope="col">Nilai1</th>
                <th scope="col">Nilai2</th>
                <th scope="col">Nilai3</th>
                <th scope="col">Total Nilai</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">Muhammad Rafi</td>
                <td>85</td>
                <td>80</td>
                <td>90</td>
                <td><b>85</b></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Tabs content -->
  </div>
</section>
<!--Section: Minimal statistics cards-->

<!--Section: Statistics with subtitles-->
<!--<section>
  <div class="row">
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
              </div>
              <div>
                <h4>Total Posts</h4>
                <p class="mb-0">Monthly blog posts</p>
              </div>
            </div>
            <div class="align-self-center">
              <h2 class="h1 mb-0">18,000</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <i
                class="far fa-comment-alt text-warning fa-3x me-4"
                ></i>
              </div>
              <div>
                <h4>Total Comments</h4>
                <p class="mb-0">Monthly blog posts</p>
              </div>
            </div>
            <div class="align-self-center">
              <h2 class="h1 mb-0">84,695</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <h2 class="h1 mb-0 me-4">$76,456.00</h2>
              </div>
              <div>
                <h4>Total Sales</h4>
                <p class="mb-0">Monthly Sales Amount</p>
              </div>
            </div>
            <div class="align-self-center">
              <i class="far fa-heart text-danger fa-3x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <h2 class="h1 mb-0 me-4">$36,000.00</h2>
              </div>
              <div>
                <h4>Total Cost</h4>
                <p class="mb-0">Monthly Cost</p>
              </div>
            </div>
            <div class="align-self-center">
              <i class="fas fa-wallet text-success fa-3x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--Section: Statistics with subtitles-->
@endsection