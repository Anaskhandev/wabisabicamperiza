 <aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo !empty($this->session->userdata('master_admin_image'))?base_url('uploads/settings/').$this->session->userdata('master_admin_image'):base_url('admin/assets/admin/img/placeholder.png');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo !empty($this->session->userdata('master_admin_name'))?$this->session->userdata('master_admin_name'):'Name';?></p>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('admin');?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-gear"></i>
          <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/settings/general');?>"><i class="fa fa-circle-o"></i>General</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/home_slider_one');?>"><i class="fa fa-circle-o"></i>HomePage Slider One</a></li>
          <li><a href="<?php echo base_url('admin/home_slider_two');?>"><i class="fa fa-circle-o"></i>HomePage Slider Two</a></li>
          <li><a href="<?php echo base_url('admin/home_slider_three');?>"><i class="fa fa-circle-o"></i>HomePage Slider Three</a></li>
          <li><a href="<?php echo base_url('admin/blog');?>"><i class="fa fa-circle-o"></i>Manage Blogs</a></li>
          <!--<li><a href="<?php echo base_url('admin/privacy');?>"><i class="fa fa-circle-o"></i>Privacy Policy</a></li>-->
        </ul>
      </li>


       <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Inquiries</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/checkout');?>"><i class="fa fa-circle-o"></i>Payment Details</a></li> 
         <li><a href="<?php echo base_url('admin/contact');?>"><i class="fa fa-circle-o"></i>Contact Inquiry</a></li> 
         <li><a href="<?php echo base_url('admin/bnr_questions');?>"><i class="fa fa-circle-o"></i>Banner Questions</a></li> 
         <li><a href="<?php echo base_url('admin/reviews');?>"><i class="fa fa-circle-o"></i>Reviews</a></li> 
         <li><a href="<?php echo base_url('admin/newsletter');?>"><i class="fa fa-circle-o"></i>News Letter</a></li> 
         <li><a href="<?php echo base_url('admin/blog_comment');?>"><i class="fa fa-circle-o"></i>Blogs Comments</a></li> 
         <li><a href="<?php echo base_url('admin/waitlist');?>"><i class="fa fa-circle-o"></i>Wait List</a></li> 
          <li><a href="<?php echo base_url('admin/book_review'); ?>"><i class="fa fa-circle-o"></i>Book Reviews</a></li>
       </ul>
     </li>


     <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/users');?>"><i class="fa fa-circle-o"></i>Users</a></li> 
       </ul>
     </li>
     <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Book Payments</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/books');?>"><i class="fa fa-circle-o"></i>Book Payments</a></li> 
         <li><a href="<?php echo base_url('admin/price');?>"><i class="fa fa-circle-o"></i>Book Price</a></li> 
       </ul>
     </li>
  </ul>

</section>
</aside>
<?php if(isset($output)):?>
  <div class="content-wrapper">    
    <?php echo $output;?> 
  </div>
  <?php endif;?>