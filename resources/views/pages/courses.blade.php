@extends('layouts.master')
@section('title', 'Kurslar')

@section('main')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ asset('kurslar/comp.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>250 000 swm</h4>
                  {{-- <p class="price">$169</p> --}}
                </div>

                <h3><a href="course-details.html">Kompyuter sawatqanlıǵı</a></h3>
                <p>Siz student yaki jumıs isleysizba,  sizdiń jumısıńızǵa kompyuter boyınsha bilimlerińız jetispey atırma?. Bunıń sheshimi bar azizler. Bizde jańa Kompyuter sawatqanlıǵı kursı ashılǵanın jariyalaymız.</p>
              </div>
            </div>
          </div> 

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ asset('kurslar/php.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>300 000 swm</h4>
                  {{-- <p class="price">$169</p> --}}
                </div>

                <h3><a href="course-details.html">PHP Development</a></h3>
                <p>Bul kurs arqalı 5 ay dawamında Web sayt hám Web Applicationlardı  jaratıp úyrenesiz. Kursımızdıń fokusı tiykarınan PHP backendke qaratılǵan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ asset('kurslar/java.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>250 000 swm</h4>
                  {{-- <p class="price">$169</p> --}}
                </div>

                <h3><a href="course-details.html">Java Core basic</a></h3>
                <p>Java Core basic kursında dásturlewdi 0 den úyreniw imkaniyatına iyesiz.</p>
                <p>Java Core basic kursında  algoritmnen nen baslap quramalı Java  klasslarǵa shekem 3 ay dawamında bilim alasız.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
@endsection