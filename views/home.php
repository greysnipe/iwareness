<?php session_start(); ?>

<?php require_once '../includes/database/config.php'; ?>
<?php require_once "header-footer/header.php"; ?>

<style type="text/css">.hide{display: none;}</style>
<div class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">
        <nav class="tab-bar">
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
          </section>
          <section class="right tab-bar-section">

            <div>

            <div class="small-3 large-3 columns mB20">
             <h1><small>Hi, User!</small></h1>

            </div>
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>iwAreness</label></li>
            <li><a id="button1"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>
            <li><a id="button2"><i class="fa fa-barcode fa-fw"></i>&nbsp;Check Serial Number</a></li>
            <li><a id="button3"><i class="fa fa-question fa-fw"></i>&nbsp;What's Happening?</a></li>
            <li><a id="button4"><i class="fa fa-bullseye fa-fw"></i>&nbsp;Most Wanted</a></li>
            <li><a><i class="fa fa-sign-out fa-fw"></i>&nbsp;Logout</a></li>
          </ul>
        </aside>

        <section class="main-section">
          <!-- main content --> 
          <a name="first"></a>
            <h1 class="center"> <img src="../lib/img/logos.png"></h1> 
              <div class="panel center">
                <div class="row">
                  <div class="small-3 large-6 columns mB20">
                  Why You Need it?
                  </div>

                  <div class="small-3 large-6 columns mB20">  
                    Goal
                  </div>
                </div>
              </div>

          <a name="second">
             
            <div class="panel mT-20">
            <h3 class="logo text-left block mL50">Recent Posts</h3>
              <div class="row">
                <div class="small-4 large-4 columns mB20">
                  <div class="row">
                    <div class="small-3 large-4 column">
                    <a href="#">
                      <img class="feeds border" src="../lib/img/sample/hakaton.jpg">
                    </a>
                    </div>
                    Here is the something in here ofcourse
                   <br/>
                   <br/> Read More..
                  </div>
                </div>

                <div class="small-4 large-4 columns mB20">
                  <div class="row">
                    <div class="small-3 large-4 column">
                    <a href="#">
                      <img class="feeds border" src="../lib/img/sample/hakaton.jpg">
                    </a>
                    </div>
                    Here is the something in here ofcourse
                   <br/>
                   <br/> Read More..
                  </div>
                </div>

                <div class="small-4 large-4 columns mB20">
                  <div class="row">
                    <div class="small-3 large-4 column">
                    <a href="#">
                      <img class="feeds border" src="../lib/img/sample/hakaton.jpg">
                    </a>
                    </div>
                    Here is the something in here ofcourse
                   <br/>
                   <br/> Read More..
                  </div>
                </div>

            </div>
      </div>  
        
            

          <a name="fourth"></a>
          <a name="first" />
          <div class="panel">
            <a name="second" />

          <div class="row">
            <div class="small-6 large-6 column">
            <div class="panel fillup">
              <h1 class="red center logo">REPORT LOST ITEM</h1>
              <div class="row">
                <div class="large-offset-1 small-6 large-3 columns mB20">
                  <form id="form-addSN" method="post">
                    <fieldset>
                      <legend>Fill up the following. </legend>

                      <label>
                        <br>
                        <div id="alert-msg" data-alert class="alert-box alert round hide">
                          alert that is rounded.
                        </div>
                        <input type="text" placeholder="Serial Number" name="serial">
                        <input type="text" placeholder="Item Name" name="item">
                        <input type="date" placeholder="Date Lost" name="date">
                        <input type="text" placeholder="Contact Number" name="contact">
                        <input type="hidden"  name="form" value="sn">
                        <textarea type="text" placeholder="Message" name="message"></textarea>
                        <button type="submit" class="btn btn-4-login btn-4c icon-arrow-right">Submit</button>
                      </label>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        

          <div class="small-6 large-6 column">
            <div class="panel fillup">
              <h1 class="red center logo">CHECK SERIAL NUMBER</h1>
              <div class="row">
                <div class="large-offset-1 small-6 large-3 columns mB20">
                  <form id="form-searchSN" method="post">
                    <fieldset>
                      <legend>Fill up the following. </legend>

                      <label>
                        <br>
                        <div id="alert-msg-s" data-alert class="alert-box alert round hide">
                          <span class="white">alert that is rounded.</span>
                          <a href="#" class="close">&times;</a>
                        </div>
                        <input type="text" placeholder="Serial Number" name="serials">
                        <input type="hidden" name="form" value="sns">
                        <button type="submit" class="btn btn-4-register btn-4c icon-arrow-right">Check</button>
                      </label>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
         </div>

          <a name="third"></a>
            <div class="panel">
              <h1 class="center logo"><span class="red">WHAT'S HAPPENING?</span></h1>
              <div class="row">
                  <div class="small-offset-1 large-offset-2 small-10 large-8 column">
                    <div class="panel">
                      <form>
                        <div class="row">
                          <div class="small-11">
                            <div class="row">
                              <div class="small-3 columns">
                                <label for="right-label" class="right inline"><img class="default border mL5 mT-10" src="../lib/../lib/img/default.png"><span class="left small mL5">Name:</span><p class="center ">ANONYMOUSE</p></label>
                              </div>
                              <div class="small-9 columns">
                               <textarea class="right" id="right-label" rows="4" ></textarea>
                              </div>
                                  <div class="row">
                                    <div class="small-4 large-4 column">
                                    <label>Category :
                                      <select class="select">
                                        <option value="Phone">Phone</option>
                                        <option value="Fire">Fire</option>
                                        <option value="Accident">Accident</option>
                                        <option value="Crime">Crime</option>
                                        <option value="Flood">Flood</option>
                                        <option value="Wanted">Wanted</option>
                                      </select>
                                      <input class=" " type="file"> 
                                    </label>
                                    </div>
                                    <div class="small-3 large-3 column">
                                    <button class="button border-radius"><span>Submit</span></button> 
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>    
                    
                  </div>
                </div>
                <div class="panel">
                       <form>
                        <div class="row">
                          <div class="small-10">
                            <div class="row">
                              <div class="small-2 large-2 columns">
                                <label for="right-label" class="right inline"><img class="default border" src="../lib/img/default.png">
                                  <span class="left small mL5">Name:</span>
                                </label>
                              </div>
                              <div class="small-1 large-1 columns">
                                  <span class="left small mT50">Category:</span>
                              </div>
                              <div class="small-9  columns">
                               <textarea readonly="true" class="right" id="right-label" rows="6" style="overflow:auto" ></textarea>
                              </div>
                                 

                            </div>
                          </div>
                        </div>
                      </form>
                          
                        </div>
              </div>


           


            
            <div class="panel">
            <h1 class="center"><span class="red logo">MOST WANTED</span></h1>
              <div class="row">
                <div class="small-3 large-3 columns mB20">
                  <div class="panel">
                    <a href="#">
                    <img class="thumb border" src="../lib/img/sample/hakaton.jpg">
                    </a>
                    <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>    
                </div>
                <div class="small-3 large-3 columns mB20">
                  <div class="panel">  
                    <a href="#">
                    <img class="thumb border" src="../lib/img/sample/hakaton2.jpg">
                    </a>
                    <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>  
                </div>
                <div class="small-3 large-3 columns mB20">
                  <div class="panel">  
                    <a href="#">
                    <img class="thumb border" src="../lib/img/sample/hakaton3.jpg">
                    </a>
                    <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>
                </div>
                <div class="small-3 large-3 columns mB20">
                  <div class="panel">  
                    <a href="#">
                    <img  class="thumb border" src="../lib/img/sample/hakaton4.jpg">
                    </a>
                     <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div> 
                </div>
              </div>

                 <div class="row">
                  <div class="small-3 large-3 columns">
                    <div class="panel">
                      <a href="#">
                      <img class="thumb border" src="../lib/img/sample/hakaton.jpg">
                      </a>
                      <div>Name:</div>
                      <div>Age:</div>
                      <div>Alias:</div>
                      <div>Case:</div>
                    </div>  
                      
                </div>
                <div class="small-3 large-3 columns">
                  <div class="panel">  
                    <a href="#">
                    <img class="thumb border" src="../lib/img/sample/hakaton2.jpg">
                    </a>
                    <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>  
                </div>
                <div class="small-3 large-3 columns">
                  <div class="panel">  
                    <a href="#">
                    <img class="thumb border" src="../lib/img/sample/hakaton3.jpg">
                    </a>
                    <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>
                </div>
                <div class="small-3 large-3 columns">
                  <div class="panel">  
                    <a href="#">
                    <img  class="thumb border" src="../lib/img/sample/hakaton4.jpg">
                    </a>
                     <div>Name:</div>
                    <div>Age:</div>
                    <div>Alias:</div>
                    <div>Case:</div>
                  </div>  
                </div>
              </div>
            </div>
            <button align="center" id="button5" class="btn btn-4-register btn-4c icon-arrow-right">Back to Top</button>
        </section>

      <a class="exit-off-canvas"></a>

      </div>
    </div>
<?php require_once "header-footer/footer.php"; ?>
<script>
	
$("#form-addSN").submit(function(e){
  var form_data = $("#form-addSN").serialize();
  console.log(e);
  console.log(form_data);
  $.ajax({
      url: '../includes/request.php',
      type: 'post',
      data: form_data,
      success: function(data, status) {
        if(data != "not"){
          alert("Device added!");
          console.log(data);
          $("#alert-msg").css("display","show");
          $("#alert-msg").html("Your device is recorded.");

          setTimeout(function() {
            $("#alert-msg").css("display", "none");
          }, 2000);

          $("#form-addSN")[0].reset();

        }else{
          console.log(data);
          alert("Please fill up the form!");

          $("#alert-msg").css("display","show");
          $("#alert-msg").html("Please fill up the form!");
        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
      }
    }); 
    return false;
});

$("#form-searchSN").submit(function(e){
  var form_data = $("#form-searchSN").serialize();
  console.log(e);
  console.log(form_data);
  $("#alert-msg-s").css("display","show!important");

  $.ajax({
      url: '../includes/request.php',
      type: 'post',
      data: form_data,
      success: function(data, status) {

        if(data != ""){
          alert("Device found!");
          $("#alert-msg-s").css("display","show!important");

          $("#form-searchSN")[0].reset();

        }else{
          alert("Device not found");

          $("#alert-msg-s").css("display","show!important");

          $("#alert-msg-s").html("Device not found");
        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
      }
    }); 
    return false;
});


</script>