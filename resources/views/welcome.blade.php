<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @include('layout.head')
       
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        important:true,
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
            backgroundImage:{
                'hero-pattern': "url('/asset/image/hero1.jpg')",
            }
          },
        },
      };
    </script>
     <!-- tailwind css cdn -->
  </head>
  <body>
    <div
      class="flex justify-between  items-center text-primary bg-white shadow-lg h-20 px-7 font-semibold text-xl"
    >
      <div class="flex gap-3">
        <div class="border-r-2 pr-2 border-primary flex flex-col">
          <span>حل الملف </span>File Solution
        </div>
        <div class="flex items-center">Embassy Print Format Platform</div>
      </div>
      <div>
    
    
            <!-- Button trigger modal -->
<button  class="focus:border-none text-[22px]" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Register
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Register Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
              <div class="container mt-5">
                <form id="signupform" action="{{route('signup')}}" method="post">
                  @csrf
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form6Example1">Recruiting Licence Name</label>
                          <input type="text" id="form6Example1" placeholder="Recruiting Licence Name" class="form-control" name="licence_name"/>
                          
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">Recruiting Licence Number (RL)</label>
                          <input type="text" id="form6Example2" class="form-control" placeholder="Recruiting Licence Number (123)" name="rl_no"/>
                          
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline ">
                            <label class="form-label" for="form6Example3">Email</label>
                          <input type="email" id="form6Example3" placeholder="abc@gmail.com" class="form-control" name="email"/>
                          
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline ">
                            <label class="form-label" for="form6Example4">Phone</label>
                          <input type="text" id="form6Example4" placeholder="+88 0188273878" class="form-control" name="phone"/>
                          
                        </div>
                      </div>
                    </div>
                  
                    <!-- Text input -->
                    
                  
                    <!-- Text input -->
                    
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Office Address </label>
                        <textarea class="form-control" id="form6Example7" placeholder="Type Your Office Address" name="address" rows="3"></textarea>
                      
                    </div>
                  
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline ">
                                <label class="form-label" for="form6Example6" >Password</label>
                              <input type="password" id="form6Example6" placeholder="Enter Password" class="form-control" name="pass" />
                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example7" >Confirm Password</label>
                                <input type="password" id="form6Example6" placeholder="Enter Confirm Password"  class="form-control" name="pass1" />
                              
                            </div>
                        </div>
                      </div>



                   
                  
                    <!-- Message input -->
                    
                  
                    <!-- Checkbox -->
                    <div class="form-check flex items-center mb-4">
                        <label class="form-check-label" for="form6Example8"> I agree, with the terms and condition of the company </label>
                      <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                    
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 text-blue-800 hover:text-white text-xl">Sign Up</button>
                
              </form>
              </div>
          </div>
          <!-- <div class="modal-footer m-0">
            <button type="button" class="btn " data-dismiss="modal">Close</button>
            <button  class="bg-blue-600 text-white px-4 py-2 rounded-lg">Submit</button>
          </div> -->
        </div>
      </div>
  </div>

          <!-- bootstrap register modal starts -->

          {{-- <button  class="focus:border-none text-[22px]" data-toggle="modal" data-target="#exampleModalCenter1">
            Register
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Register Account</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body ">
                    <div class="container mt-5">
                      <form id="signupform" action="{{route('signup')}}" method="post">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                <label class="form-label" for="form6Example1">Recruiting Licence Name</label>
                                <input type="text" id="form6Example1" placeholder="Recruiting Licence Name" class="form-control" name="licence_name"/>
                                
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                  <label class="form-label" for="form6Example2">Recruiting Licence Number (RL)</label>
                                <input type="text" id="form6Example2" class="form-control" placeholder="Recruiting Licence Number (123)" name="rl_no"/>
                                
                              </div>
                            </div>
                          </div>

                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline ">
                                  <label class="form-label" for="form6Example3">Email</label>
                                <input type="email" id="form6Example3" placeholder="abc@gmail.com" class="form-control" name="email"/>
                                
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline ">
                                  <label class="form-label" for="form6Example4">Phone</label>
                                <input type="text" id="form6Example4" placeholder="+88 0188273878" class="form-control" name="phone"/>
                                
                              </div>
                            </div>
                          </div>
                        
                          <!-- Text input -->
                          
                        
                          <!-- Text input -->
                          
                        
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example5">Office Address </label>
                              <textarea class="form-control" id="form6Example7" placeholder="Type Your Office Address" name="address" rows="3"></textarea>
                            
                          </div>
                        
                          <div class="row mb-4">
                              <div class="col">
                                  <div class="form-outline ">
                                      <label class="form-label" for="form6Example6" >Password</label>
                                    <input type="password" id="form6Example6" placeholder="Enter Password" class="form-control" name="pass" />
                                  
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-outline">
                                      <label class="form-label" for="form6Example7" >Confirm Password</label>
                                      <input type="password" id="form6Example6" placeholder="Enter Confirm Password"  class="form-control" name="pass1" />
                                    
                                  </div>
                              </div>
                            </div>



                         
                        
                          <!-- Message input -->
                          
                        
                          <!-- Checkbox -->
                          <div class="form-check flex items-center mb-4">
                              <label class="form-check-label" for="form6Example8"> I agree, with the terms and condition of the company </label>
                            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                          
                          </div>
                        
                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block mb-4 text-blue-800 hover:text-white text-xl">Sign Up</button>
                      
                    </form>
                    </div>
                </div>
                <!-- <div class="modal-footer m-0">
                  <button type="button" class="btn " data-dismiss="modal">Close</button>
                  <button  class="bg-blue-600 text-white px-4 py-2 rounded-lg">Submit</button>
                </div> -->
              </div>
            </div>
          </div> --}}

          <!-- bootstrap register modal ends-->
         
          
      </div>
    </div>
    <div class="bg-green-700 h-[91vh] bg-cover flex items-center px-[200px] justify-end bg-hero-pattern">
        <div class="mt-3 bg-[#1AAE9B] rounded-2xl py-5 px-5 mr-14">
            <form class="" id="loginform" action="{{ route('login') }}" method="post">
                <!-- Email input -->
                @csrf
                <h2 class="text-center text-white pb-6 font-semibold text-2xl">Login</h2>
                <div> <div class="flex flex-col gap-1 mb-4">
                    <label class="text-white text-xl font-semibold" for="form2Example1">Email address</label>
                    <input type="email" id="form2Example1" placeholder="abc@gmail.com" class="w-full p-3 rounded-lg" name="email"/>
                    </div>
        
                    <!-- Password input -->
                    <div class="">
                    <label class="text-white text-xl font-semibold" for="form2Example2">Password</label>
                    <input
                        type="password"
                        placeholder="Enter Password"
                        id="form2Example2"
                        class="w-full p-3 rounded-lg"
                        name="pass"
                    />
                    </div>
                </div>
                <!-- 2 column grid layout for inline styling -->
        
                <div class="flex justify-center  ">
                  <button type="submit" class="text-white text-xl rounded-lg py-2 border-white text-center flex justify-center bg-[#04352f] px-14 hover:bg-blue-500 font-semibold mt-4 transition ease-in-out delay-250">
                    Login
                  </button>
                </div>
            </form>
               
            <div class="flex justify-between pt-4">
                <a href="#!" class="text-white hover:text-blue-600 text-md">Forgot password?</a>
            </div>
            <div class="pt-2 flex justify-between ">
                <span>Dont have any account?</span>

                <button  class="focus:border-none text-[22px]" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sign-UP
                </button>
            
            </div>
        </div>
    </div>


   <!-- bootstrap scripts -->
   @include('layout.script')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <script type="text/javascript">
       $(document).ready(function() {
           $('#loginform').on('submit', function(e) {
               e.preventDefault();

               var form = $(this);
               var formData = form.serialize();

               $.ajax({
                   url: form.attr('action'),
                   method: 'POST',
                   data: formData,

                   success: function(response){
                       Swal.fire({
                           title: response.title,
                           text: response.message,
                           icon: response.icon,

                       });
                       setTimeout(function() {
                           window.location.href = response.redirect_url;
                       }, 500);
                   },
                   error: function(xhr) {
                       Swal.fire({
                           title: response.title,
                           text: response.message,
                           icon: response.icon,

                       });
                       setTimeout(function() {
                           window.location.href = response.redirect_url;
                       }, 3000);
                   }
               });
           });
       });
   </script>
  </body>
</html>
