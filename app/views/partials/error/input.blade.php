@if($errors->has($name))

 <label class="control-label" for="inputError">
     <i class="fa fa-times-circle-o"></i> 
     {{$errors->first($name)}}
 </label>
@endif                      