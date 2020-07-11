
<!-- candidates modal-->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="candidate_modal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="profile-tabs">
                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#mister" role="tab" data-toggle="tab">Mister</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#miss" role="tab" data-toggle="tab">Miss</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content tab-space pb-0 pt-0">
          <div class="tab-pane active gallery" id="mister">
            <div class="row">
              <div class="col-lg-5 col-sm-12">
                <div class="card bg-dark text-white">
                  <img class="card-img animated fadeIn" id="image1" alt="Card image">
                  <div class="card-img-overlay text-center" style="padding-top:99%;">
                    <h4 class="card-title mb-0" id="candidateName1">CANDIDATE NAME</h4>
                    <h4 class="card-title mb-0" id="candidateID1" hidden="">ID</h4>
                    <p class="card-text" id="candidateCollege1">COLLEGE</p>
                  </div>
                </div>
              </div>


              <div class="col-lg-7 col-sm-12 pt-5 animated fadeIn" style="margin-top:0px">
                <h5 class="text-primary mb-0 mt-0" id="category">THEME WEAR</h5>
                <h5 class="text-primary mb-0 mt-0">TALENT/PERFORMANCE</h5>
                <input type="hidden" name="1cid">
                <P class="description mt-0" style="font-size:.7em;">Talent score will be 50% of Candidate's score</P>
                <div class="row">
                  <div class="col-6" style="border-right: solid grey;">
                    <h3 class="text-center"><span id="lblMenTalents">0</span> %</h3>
                  </div>
                  <div class="col-6">
                    <h3 class="text-center">100 %</h3>
                  </div>
                </div>
                <div id="menTalents" class="slider"></div>
                <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>
                
                <h5 class="text-primary mb-0">POISE</h5>
                <P class="description" style="font-size:.7em;">Performance score will be 50% of Candidate's score</P>
                <div class="row">
                  <div class="col-6" style="border-right: solid grey;">
                    <h3 class="text-center"><span id="lblMenPerformance"></span> %</h3>
                  </div>
                  <div class="col-6">
                    <h3 class="text-center">100 %</h3>
                  </div>
                </div>
                <div id="menPerformance" class="slider"></div>
                <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>

              </div>








            </div>
          </div>
          <div class="tab-pane gallery" id="miss">
            <div class="row">
            <div class="col-lg-5 col-sm-12">
              <div class="card bg-dark text-white">
                <img class="card-img animated fadeIn" id="image2" alt="Card image">
                <div class="card-img-overlay text-center" style="padding-top:99%;">
                  <h4 class="card-title mb-0" id="candidateName2">CANDIDATE NAME</h4>
                    <h4 class="card-title mb-0" id="candidateID2" hidden="">ID</h4>
                  <p class="card-text" id="candidateCollege2">COLLEGE</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-sm-12 pt-5 animated fadeIn" style="margin-top:0px">
              <h5 class="text-primary mb-0 mt-0">TALENT/PERFORMANCE</h5>
              <P class="description mt-0" style="font-size:.7em;">Talent score will be 50% of Candidate's score</P>
              <div class="row">
                <div class="col-6" style="border-right: solid grey;">
                  <h3 class="text-center"><span id="lblLadiesTalents">0</span> %</h3>
                </div>
                <div class="col-6">
                  <h3 class="text-center">100 %</h3>
                </div>
              </div>
              <div id="ladiesTalents" class="slider"></div>
              <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>
              
              <h5 class="text-primary mb-0">POISE</h5>
              <P class="description" style="font-size:.7em;">Performance score will be 50% of Candidate's score</P>
              <div class="row">
                <div class="col-6" style="border-right: solid grey;">
                  <h3 class="text-center"><span id="lblLadiesPerformance">0</span> %</h3>
                </div>
                <div class="col-6">
                  <h3 class="text-center">100 %</h3>
                </div>
              </div>
              <div id="ladiesPerformance" class="slider"></div>
              <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>

            </div>
            </div>
          </div>
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="values();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 700, //7 millisecons
        arrows: false,
        dots: false,
          pauseOnHover: true,
          responsive: [{
          breakpoint: 920,
          settings: {
            slidesToShow: 6
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 4
          }
        }]
      });
    });
  </script>

  <script>
  //talents
  var menTalents= document.getElementById('menTalents');

    noUiSlider.create(menTalents, {
      connect: [true,false],  
      start: [0],
        range: {
          'min': 0,
          'max': 100
        },
        start: 0,
        step: 1,
        format: wNumb({
            decimals: 0,
            thousand: ','
        })
    });
    var lblMenTalents = document.getElementById('lblMenTalents');

    // Show the value for the *last* moved handle.
    menTalents.noUiSlider.on('update', function (values, handle) {
      lblMenTalents.innerHTML = values[handle];
    });


    //Performance
    var menPerformance = document.getElementById('menPerformance');

  noUiSlider.create(menPerformance, {
    connect: [true,false],  
    start: [0],
      range: {
        'min': 0,
        'max': 100
      },
      start: 0,
      step: 1,
      format: wNumb({
          decimals: 0,
          thousand: ','
      })
  });
  var lblMenPerformance = document.getElementById('lblMenPerformance');

  // Show the value for the *last* moved handle.
  menPerformance.noUiSlider.on('update', function (values, handle) {
    lblMenPerformance.innerHTML = values[handle];
  });


  </script>
  
  <script>
  //female Candidate slider script
  

    noUiSlider.create(ladiesTalents, {
      connect: [true,false],  
      start: [0],
        range: {
          'min': 0,
          'max': 100
        },
        start: 0,
        step: 1,
        format: wNumb({
            decimals: 0,
            thousand: ','
        })
    });
    var lblLadiesTalents = document.getElementById('lblLadiesTalents');

    // Show the value for the *last* moved handle.
    ladiesTalents.noUiSlider.on('update', function (values, handle) {
      lblLadiesTalents.innerHTML = values[handle];
    });


    //Performance
    var ladiesPerformance = document.getElementById('ladiesPerformance');

  noUiSlider.create(ladiesPerformance, {
    connect: [true,false],  
    start: [0],
      range: {
        'min': 0,
        'max': 100
      },
      start: 0,
      step: 1,
      format: wNumb({
          decimals: 0,
          thousand: ','
      })
  });
  var lblLadiesPerformance = document.getElementById('lblLadiesPerformance');

  // Show the value for the *last* moved handle.
  ladiesPerformance.noUiSlider.on('update', function (values, handle) {
    lblLadiesPerformance.innerHTML = values[handle];
  });


  </script>