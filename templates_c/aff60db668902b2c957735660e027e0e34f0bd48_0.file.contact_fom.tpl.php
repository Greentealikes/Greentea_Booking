<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 08:41:12
  from 'D:\xampp\htdocs\booking-web_v0301\templates\tpl\contact\contact_fom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cb8983eabe8_81447682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff60db668902b2c957735660e027e0e34f0bd48' => 
    array (
      0 => 'D:\\xampp\\htdocs\\booking-web_v0301\\templates\\tpl\\contact\\contact_fom.tpl',
      1 => 1582794304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cb8983eabe8_81447682 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "logoimage" >     
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn01.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn02.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn03.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn04.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn05.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn06.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn07.jpg" class="d-block w-100 " alt="...">
      </div>
    </div>
  </div>
</div>    

<div class="Marquee-alert">
  <marquee behavior="behavior" width="100%" loop="2">
  歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
  </marquee>
</div> 

<div class="site-wrap" id="home-section">

  <div class="site-section bg-left-half">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5">
          <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Email address">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                  rows="10"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Address:</span>
                <span>34 Street Name, City Name Here, United States</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div> 
</div>
<?php }
}
