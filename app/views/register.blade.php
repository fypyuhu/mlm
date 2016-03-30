                                    
                                   	Fill the Forum and Register
	                              @include('partials.error.list')
   {{Form::open(array('url' => '/register','method' => 'post'))}}
                                <input name="ref" value="{{\Input::get('ref')}}" style="float:none; width:80%;" class="form-control" type="hidden">
	                                   	<div class="form-group">
                                                    <input name="name" value="{{@$name;}}" placeholder="Full Name" style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>

	                                   	<div class="form-group">
	                                            <input name="email" value="{{@$email;}}" placeholder="Email"  style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>

	                                   	<div class="form-group">
	                                            <input name="username" value="{{@$username;}}" placeholder="Username"  style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>
	                                    <div class="form-group">
	                                            <input name="city" value="{{@$city;}}" placeholder="City" style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>
	                                      <div class="form-group">
	                                            <input name="country" value="{{@$country;}}" placeholder="Country" style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>
	                                    <div class="form-group">
	                                            <input name="mobile" value="{{@$mobileno;}}" placeholder="Mobile No" style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>
	                                    

                                        <div class="form-group">
                                            <input name="password" style="float:none; width:80%;" placeholder="Password" class="form-control" type="password">
                                        </div>
                                         <div class="form-group">
                                                <input name="apassword" style="float:none; width:80%;" placeholder="Again Password" class="form-control" type="password">
                                        </div>
                                        <div class="form-group">
                                             	
                                          <button type="submit" style=" width:100%;" class="btn btn-primary btn-lg pull-right">Register</button>
                                        </div>

                                      </form>  
