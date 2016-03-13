





                    
                    <!-- page content holder -->
  {{Form::open(array('route' => 'session.store'))}}
                        
                                   	Just type your email and password and Logged in
	                                   	<div class="form-group">
	                                   
                                                    <input name="email" style="float:none; width:80%;" class="form-control" type="email" placeholder="Enter your email" required="" />
	                                    </div>
                                        <div class="form-group">
                                            
                                            <input name="password" style="float:none; width:80%;" class="form-control" type="password" required=""  placeholder="Your Password"/>
                                        </div>
                                        <div class="form-group">
                                             	
                                          <button type="submit" style=" width:100%;" class="btn btn-primary btn-lg pull-right">Log in</button>
                                        </div>
                                        <br>
                                            <br>                                  <br>

                                            <a href="/password/remind" style=" width:100%;" class="btn btn-primary btn-lg pull-right">Recover Password</a>
                                        
                       
                        
                        
                   
</form>
