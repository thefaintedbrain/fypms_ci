<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php user_img($user['image'])?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['name']; ?></p>
          <small><?php echo usertype($user['type']); ?></small>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
            
            <?php 
                switch ($user['type']){
                    case 'SA':?>
                       <!-- Sidebar list items for SuperAdmin goes here-->
                        <li><a href="add_coordinator.php"><i class="fa fa-plus"></i> <span>Add Coordinator</span></a> </li>
                        <li><a href="manage_coordinator.php"><i class="fa fa-circle-o"></i><span> Manage Coordinator</span></a> </li>
                         <!-- Sidebar list items for SuperAdmin end here-->
                        <?php break;
                       
                    case 'CO':?>
                        <!-- Sidebar list items for Coordinator goes here-->
                        <li><a href="create_batch.php"><i class="fa fa-plus"></i> <span>Create Batch</span></a> </li>
                        <li><a href="register_students.php"><i class="fa fa-user-plus"></i><span> Register Students</span></a></li>
                        <!-- Sidebar list items for Coordinator goes here-->
                       <?php break;
                    
                    case 'ST':?>
                       <!-- Sidebar list items for Student goes here-->
                       <li class="treeview">
                        <li>
                          <a href="#"><i class="fa fa-users"></i> <span>Group</span> <i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a id="group_members" href="#"><i class="fa fa-circle-o"></i><span>Group Members</span></a></li>
                              <?php 
                              //if( $_SESSION["isLead"]!="1")
                              //{?>
                              <li><a id="InitiateGroup" href="initGroupForm.php"><i class="fa fa-circle-o"></i><span>Initiate Group</span></a></li>
                              <li><a id="JoinGroup" href="joinGroup.php"><i class="fa fa-circle-o"></i><span>Join Group</span></a></li>
                              <?php
                              //}
                              ?>  
                          </ul>
                        </li>
                       <!-- Sidebar list items for Student goes here-->
                         
                         
                       <?php break;
                    
                    case 'SU':?>
                        <!-- Sidebar list items for Student goes here-->
                        <!-- Sidebar list items for Student goes here-->
                        
                        
                        <?php break;
                    
                    case 'EE':?>
                        <!-- Sidebar list items for External Examiner goes here-->
                        <!-- Sidebar list items for External Examiner goes here-->
                        
                        
                        <?php break;
                    
                    case 'FA':?>
                        <!-- Sidebar list items for SuperAdmin goes here-->
                        <!-- Sidebar list items for SuperAdmin goes here-->
                        
                        
                        <?php break;
                    
                    
                    default:
                        ;
                }
  
            ?>
        <!--Default List Items for All users-->
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bell-o"></i> <span>Notifications</span>
           </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>

        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li><a href="#"><i class="fa fa-question"></i> <span>Help</span></a></li>  
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

