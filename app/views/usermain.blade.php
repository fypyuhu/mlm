@extends('template.mlm.layout2')


@section('navigation')
<ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{URL::to('/')}}/bs-binary-admin/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="/user/index"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    			                   
                    <li>
                        <a href="/user/refferals"><i class="fa fa-sitemap fa-3x"></i> Refferals</a>
                       
                      </li>  
               </li>
               <li>
                        <a  href="/user/transfer"><i class="fa fa-bar-chart-o fa-3x"></i> Transfer the Balance</a>
                    </li>
                    <li>
                        <a  href="/user/withdraw"><i class="fa fa-bar-chart-o fa-3x"></i> Withdraw</a>
                    </li>
                    </li>				
                    <li  >
                        <a   href="/user/upgrade"><i class="fa fa-bolt fa-3x"></i> Upgrade</a>
                    </li>
                      <li>
                        <a  href="/shop/myorders"><i class="fa fa-qrcode fa-3x"></i> My Orders</a>
                    	
                      <li  >
                    
                      <li>
                        <a  href="/user/profile"><i class="fa fa-edit fa-3x"></i> Profile </a>
                    	
                         </li>
                     <li>
                   
                        <a   href="/user/security"><i class="fa fa-laptop fa-3x"></i> Security</a>
                    </li>
                     	
                </ul>

@stop

@section('pageTitle')
	hafsa
@stop
@section('footer')
 <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>aaa</h3>
                                <p>aaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaa a.</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="index">Home</a>                                    
                                    <a href="aboutus">aboutus</a>
                                    <a href="contactus">contactus</a>
                                    <a href="login">login</a>
                                      <a href="	register">register</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- recent tweets -->
		                            <div class="col-md-3">
		                                <h3>Recent Updates</h3>
		                                
		                                
		                                
		                            </div>
                            <!-- ./recent tweets -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        000 asad, 13aasd 111,<br/> 
                                        Casdakahe, OK 231
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        (123) 456-2222
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Muhammad Usama Riaz</strong><br>
                                        <a href="mailto:#">info@mlm.com</a>
                                    </div>                                    
                                </div>
                                
                                

                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
@stop
@section('developedBy')

<div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                           
                            © 2015  DEVELOPED BY <a href="https://www.facebook.com/muhammadusama.riaz.7">MUHAMMAD USAMA RIAZ (+923118222625)</a> - All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-facebook"></span></a>
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-twitter"></span></a>
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-google-plus"></span></a>
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-linkedin"></span></a>
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-vimeo-square"></span></a>
                            <a href="https://www.facebook.com/WEBdevelopmentXtream?ref=e4earning.com"><span class="fa fa-dribbble"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>

@stop	