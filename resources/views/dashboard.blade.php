@extends('layouts.app')

@section('content')

<!--Section: Breadcrumb-->
<section class="mb-4">
  <div class="card">
    <div class="card-header text-center py-3" style="padding-bottom: 0 !important;">
      <h5 class="mb-0 text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Statistic-->
<section>
  <div class="row">
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="#">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>375</h3>
                <p class="mb-0">FORMULIR</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="#">
          <div class="card-body link-success">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fa-solid fas fa-check text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>246</h3>
                <p class="mb-0">DISETUJUI</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="#">
          <div class="card-body link-warning">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-chart-line text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>86</h3>
                <p class="mb-0">DITINJAU</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="#">
          <div class="card-body link-danger">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-times text-danger fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>43</h3>
                <p class="mb-0">DITOLAK</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Section: Statistic-->

<!--Section: News-->
<section>
  <div class="card">
      <div class="card-body col-xl-12 col-sm-12 col-12 mb-4" style="display:block">
        <!--Table-->
        <table class="table-responsive">
        </table>
        <table class="table table-hover table-forum">
          <!--Table head-->
          <thead>
            <tr>
              <th class="text-align-left"><h5>Berita Terkini</h5></th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
            <tr>
              <td class="text-start">
                <a href="#" class="font-weight-bold blue-text">
                  Pengisian STATUS Vaksinasi MAHASISWA
                </a>
                <div class="my-2">
                  <a href="#" class="blue-text">
                    <strong>Universitas Gunadarma</strong>
                  </a>
                  <span class="badge bg-secondary mx-1">staff</span><span
                    class="badge bg-primary mx-1">pro</span><span
                    class="badge bg-warning mx-1">premium</span>
                  <span>a year ago</span>
                  <div></div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-start">
                <a href="#" class="font-weight-bold blue-text">
                  Pisah Sambut Peserta Program MSIB Mahasiswa Universitas Gunadarma </a>
                <div class="my-2">
                  <a href="#" class="blue-text">
                    <strong>Universitas Gunadarma</strong>
                  </a>
                  <span class="badge bg-secondary mx-1">staff</span><span
                    class="badge bg-primary mx-1">pro</span><span
                    class="badge bg-warning mx-1">premium</span>
                  <span>a year ago</span>
                </div>
                <div></div>
              </td>
            </tr>
            <tr>
              <td class="text-start">
                <a href="#" class="font-weight-bold blue-text">
                  PENGUMUMAN KURSUS PEMBEKALAN SERTIFIKASI PROFESI Semester Ganjil PTA 2021/2022 </a>
                <div class="my-2">
                  <a href="#" class="blue-text">
                    <strong>Universitas Gunadarma</strong>
                  </a>
                  <span class="badge bg-secondary mx-1">staff</span><span
                    class="badge bg-primary mx-1">pro</span><span
                    class="badge bg-warning mx-1">premium</span>
                  <span>a year ago</span>
                </div>
                <div></div>
              </td>
            </tr>
            <tr>
              <td class="text-start">
                <a href="#" class="font-weight-bold blue-text">
                  OPEN RECRUITMENT ASISTEN MATA KULIAH PRAKTIKUM UNGGULAN (DGX) ATA 2021/2022 </a>
                <div class="my-2">
                  <a href="#" class="blue-text">
                    <strong>Universitas Gunadarma</strong>
                  </a>
                  <span class="badge bg-secondary mx-1">staff</span><span
                    class="badge bg-primary mx-1">pro</span><span
                    class="badge bg-warning mx-1">premium</span>
                  <span>a year ago</span>
                </div>
                <div></div>
              </td>
            </tr>
          </tbody>
          <!--Table body-->
        </table>
    
        <!-- Table -->
    
        <!--Bottom Table UI-->
        <div class="d-flex justify-content-center">
          <!--Pagination -->
          <nav class="my-2 pt-2">
            <ul class="pagination pagination-circle pg-info mb-0">
              <!--First-->
              <li class="page-item clearfix d-none d-md-block">
                <a href="#" class="page-link waves-effect">
                  First </a>
              </li>
              <!--Arrow left-->
              <li class="page-item">
                <a href="#" class="page-link waves-effect" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">
                    Previous </span>
                </a>
              </li>
              <!--Numbers-->
              <li class="page-item active">
                <a href="#" class="page-link waves-effect">1</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link waves-effect">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link waves-effect">3</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link waves-effect">4</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link waves-effect">5</a>
              </li>
              <!--Arrow right-->
              <li class="page-item">
                <a href="#" class="page-link waves-effect" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
              <!--First-->
              <li class="page-item clearfix d-none d-md-block">
                <a href="#" class="page-link waves-effect">
                  Last </a>
              </li>
            </ul>
          </nav>
          <!--/Pagination -->
        </div>
        <!--Bottom Table UI-->
      </div>
    </div>
</section>
<!--Section: News-->
@endsection