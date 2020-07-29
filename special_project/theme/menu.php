<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo WEB_ROOT; ?>index.php">
            <i class="fa fa-fw fa-dashboard text-light"></i>
            <span class="nav-link-text text-light">Dashboard</span>
          </a>
        </li>
         <?php

         if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator'){
          echo '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Project">
                  <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/project/">
          <?php 
          echo  '<i class="fa fa-fw fa-book text-light"></i>
                    <span class="nav-link-text text-light">Project</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Expenses">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/expenses/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Expenses</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Supplier">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/supplier/">
            <?php 
          echo  '<i class="fa fa-address-book-o text-light"></i>
            <span class="nav-link-text text-light">Supplier</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contractors/Artisans">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/contractor/">
           <?php 
          echo  '<i class="fa fa-address-book-o text-light"></i>
            <span class="nav-link-text text-light">Contractors/Artisans</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/reports/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Weekly Report</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="WorkPlan">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/workplan/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Work Plan</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="PaymentPlan">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/paymentplan/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Payment Plan</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="SOP">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/sop/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">SOP</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Requisition">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/requisition/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Requisition</span>
          </a>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Requisition">
          <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/complaints/">
           <?php 
          echo  '<i class="fa fa-money text-light"></i>
            <span class="nav-link-text text-light">Complaints</span>
          </a>
        </li>		
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench text-light"></i>
            <span class="nav-link-text text-light">Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            
            <li>
              <a href="'; ?><?php echo WEB_ROOT; ?>module/user/">User
 <?php 
          echo  '
              </a>
            
            </li>
          </ul>
        </li>
                ';
         }elseif ($_SESSION['ACCOUNT_TYPE'] == 'Employee') {
          echo ' <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Project">
                  <a class="nav-link" href="'; ?> <?php echo WEB_ROOT; ?>module/cproject/">
                    <?php 
          echo  '   <i class="fa fa-fw fa-book "></i>
                    <span class="nav-link-text">Project</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Expenses">
                    <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/expenses/">
          <?php 

             echo  '<i class="fa fa-money"></i>
                    <span class="nav-link-text">Expenses</span>
                  </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Supplier">
                  <a class="nav-link" href="'; ?><?php echo WEB_ROOT; ?>module/supplier/">
                    <?php 

             echo  '
                    <i class="fa fa-address-book-o"></i>
                    <span class="nav-link-text">Supplier</span>
                  </a>
                </li>
             
       
       
                ';
         }



         ?>
        
       

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         
      
       
      </ul>