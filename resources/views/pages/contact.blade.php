@extends('layouts.master')
@section('content')
<!-- HEADER -->
<header id="t3-header" class="t3-header">
  <div class="t3-header-wrapper">
    <div class="container ">
      <div class="row"></div>
    </div>
  </div>
</header>
<!-- //HEADER -->
<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul itemscope class="breadcrumb">
          <li itemprop="itemListElement" itemscope>
            <a itemprop="item" href="index.php" class="pathway">
              <span itemprop="name">Home</span>
            </a>
          </li>
          <li itemprop="itemListElement" itemscope class="active">
            <span itemprop="name">Contact Us</span>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- //BREADCRUMBS -->
</div>
<div id="t3-mainbody" class="t3-mainbody">
  <div class="map wrap t3-sl t3-sl-map ">
    <div class="container ">
      <div class="row">
        <div class="moduletable col-sm-12" id="mapper">
          <div class="module_container">
            <div class='page_header'>
              <h2 class="moduleTitle ">
                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Contact</span>
                <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">us</span>
              </h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7951.524580430431!2d7.064938686690919!3d4.810829805499672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cce0c27811bd%3A0xeb2ada6f2b1fcbb9!2sWesHam%20Filling%20Station!5e0!3m2!1sen!2sng!4v1574023783028!5m2!1sen!2sng" class="resetSize" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- MAIN CONTENT -->
      <div id="t3-content" class="t3-content col-sm-12">
        <div id="system-message-container">
        </div>
        <div class="page page-contact page-contact__">
          <!-- CONTACT FORM -->
          <div class="row">
            <!-- Address -->
            <div class="contact_details col-sm-4">
              <h4>
                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Address:</span>
              </h4>
              <div class="contact_address"><i class="icons-marker fa fa-home"></i>Elzazi plaza, opposite Wesham filling station, New Woji layout Port Harcourt, Rivers State</div>
              <h4>
                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Phones:</span>
              </h4>
              <div class="contact_details_telephone"><i class="icons-marker fa fa-phone"></i>+2349087654690</div>
              <div class="clearfix"></div>
              <div class="contact_details_telephone"><i class="icons-marker fa fa-phone"></i>+2349087654692</div>
              <div class="clearfix"></div>
              <div class="contact_details_telephone"><i class="icons-marker fa fa-phone"></i>+2349087654693</div>
              <div class="clearfix"></div>
              <br>
              <h4>
                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">E-mail:</span>
              </h4>
              <div class="contact_details_emailto"><i class="icons-marker fa fa-envelope"></i>
                palg.academy@gmail.com
              </div>
              <div class="contact_details_emailto"><i class="icons-marker fa fa-envelope"></i>
                info@pealgacademy.com
              </div>
              <div class="clearfix"></div>

              <div class="clearfix"></div>
            </div>
            <div class="col-sm-8">
              <!-- Misc -->
              <div class="contact_misc">
                <h4>
                  <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Miscellaneous</span>
                  <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">information:</span>
                </h4>
                <p>Email us with any questions or inquiries or use our contact data.</p>
              </div>
              <div id="contact_115">
                <form class="mod_tm_ajax_contact_form mod_tm_ajax_contact_form_ no-edit" id="contact-form_115" novalidate>
                  <input type="hidden" id="module_id" name="module_id" value="115">
                  <fieldset>
                    <div class="row">
                      <div class="control control-group-input col-sm-4">
                        <div class="control">
                          <input type="text" placeholder="Name" name="name" id="name_0_115" class="mod_tm_ajax_contact_form_text" required>
                        </div>
                      </div>
                      <div class="control control-group-input col-sm-4">
                        <div class="control">
                          <input type="email" placeholder="Email" name="email" id="email_1_115" class="mod_tm_ajax_contact_form_email" required>
                        </div>
                      </div>
                      <div class="control control-group-input col-sm-4">
                        <div class="control">
                          <input type="text" placeholder="Phone" name="phone" id="phone_2_115" class="mod_tm_ajax_contact_form_text">
                        </div>
                      </div>
                      <div class="control control-group-input col-sm-6">
                        <div class="control">
                          <input type="times" placeholder="Time" name="time" id="time_3_115" class="mod_tm_ajax_contact_form_times timepicker_3_115" required>
                        </div>
                      </div>
                      <div class="control control-group-input col-sm-6">
                        <div class="control">
                          <input type="text"  placeholder="date" name="date" id="date_4_115" class="mod_tm_ajax_contact_form_date datepicker_4_115" required>
                        </div>
                      </div>
                      <div class="control control-group-input col-sm-12">
                        <div class="control">
                          <textarea name="message" placeholder="Message" id="message_5_115" class="mod_tm_ajax_contact_form_textarea" required></textarea>
                        </div>
                      </div>

                      <!-- Submit Button -->
                      <div class="control control-group-button col-sm-12">
                        <div class="control">
                          <button type="submit" class="btn btn-primary mod_tm_ajax_contact_form_btn">Send</button>
                          <button type="reset" id="clear_115" class="btn btn-primary mod_tm_ajax_contact_form_btn">Clear</button>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <!-- MISC INFO -->
        </div>
      </div>
      <!-- //MAIN CONTENT -->
    </div>
  </div>
</div>
<div id="fixed-sidebar-left">
  <div class="moduletable  ">
    <div class="module_container"></div>
  </div>
</div>
<div id="fixed-sidebar-right"></div>
</div>
@endsection
