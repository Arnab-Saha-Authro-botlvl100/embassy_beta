<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

  <!-- JavaScript -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
      #candidatetable_filter{
        margin-bottom: 20px;
      }
      .tooltip {
      position: relative;
      display: inline-block;
    /* If you want dots under the hoverable text */
      }
    
    /* Tooltip text */
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: #92560c;
      color: #fff;
      border:1px solid white;
      text-align: center;
      padding: 3px 3px;
      font-size:14px;
      border-radius: 6px;
    
      /* Position the tooltip text - see examples below! */
      position: absolute;
      z-index: 1;
      right:10px;
      top:40px;
    }
    
    /* Show the tooltip text when you mouse over the tooltip container */
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
  </style> 
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
  @include('layout.head')
</head>

<body>
  <div class="container-fluid">
   @include('layout.navbar')
  </div>
  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
 
  <!-- ======= Hero Section ======= -->
  <section id="" class=" align-items-center">
   
    </div>
    @if(session('success'))
      <script>
          alert("{{ session('success') }}");
          {!! session()->forget('success') !!}
      </script>
    @endif


    <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <form action="{{route('user/update')}}">
                @csrf
                <div class="row">
                  <div class="col">
                    <div class="form-outline ">
                      <label class="form-label" for="form6Example4">Agency Name(Arabic)</label>
                      @php
                        if($user->arabic_name){
                          echo '<input type="text" id="form6Example4" placeholder="+88 0188273878" class="form-control bg-secondary" value="'.$user->arabic_name.'" name="arabic_name" readonly/>';

                        }
                        else {
                          echo '<input type="text" id="form6Example4" placeholder="" class="form-control" name="arabic_name"/>';
                        }
                      @endphp
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-outline ">
                        <label class="form-label" for="form6Example4">Agency Phone</label>
                        @php
                        // dd($user->phone);
                        if($user->phone){
                          echo '<input type="text" id="form6Example4" placeholder="+88 0188273878" class="form-control bg-secondary" value="'.$user->phone.'" name="phone" readonly/>';

                        }
                        else {
                          echo '<input type="text" id="form6Example4" placeholder="+88 0188273878" class="form-control" name="phone"/>';           
                        }
                      @endphp
                    </div>
                  </div>
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">What's App Number</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="wsphn">
                </div>
                
                <button
                      type="submit"
                      class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
                    >
                     Save
                    </button>
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
           
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Candidate</h5>
            <button type="button" class="btn-close btn btn-outline-dark" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

         
          <div class="modal-body">
              <form class="row g-3" id="addcandidate" action="{{route('user/index')}}" method="post">
                  @csrf
                      
                    <div class="px-10 gap-x-10 grid md:grid-cols-2">
                      <div class="py-1">
                      <div class="font-semibold text-lg" >Candidate Name </div>
                      <input type="text" class="form-control uppercase" id="pname" name="pname" placeholder="Candidate Name" required>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Number</div>
                      <input type="text" class="form-control uppercase " id="pnumber" name="pnumber" minlength="0" maxlength="9" required placeholder="Passport Number">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Issue Date</div>
                      <input type="text" class="form-control uppercase " id="pass_issue_date" placeholder="Passport Issue Date" name="pass_issue_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Expire Date</div>
                      <input type="text" class="form-control uppercase" id="pass_expire_date" name="pass_expire_date" placeholder="Passport Expiry Date" >
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Date Of Birth</div>
                      <input type="date" class="form-control uppercase" id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Place Of Birth</div>
                      <input type="text" class="form-control uppercase" id="place_of_birth" name="place_of_birth" list="districts" placeholder="Place">
                              <datalist id="districts">
                                <option value="Bagerhat">
                                  <option value="Barishal">
                                    <option value="Jashore">
                                    <option value="Chattogram">
                                    <option value="Cumilla">
                                    <option value="Bogura">
                                <option value="Bandarban">
                                <option value="Barguna">
                                <option value="Barisal">
                                <option value="Bhola">
                                <option value="Bogra">
                                <option value="Brahmanbaria">
                                <option value="Chandpur">
                                <option value="Chapainawabganj">
                                <option value="Chittagong">
                                <option value="Chuadanga">
                                <option value="Comilla">
                                <option value="Cox's Bazar">
                                <option value="Dhaka">
                                <option value="Dinajpur">
                                <option value="Faridpur">
                                <option value="Feni">
                                <option value="Gaibandha">
                                <option value="Gazipur">
                                <option value="Gopalganj">
                                <option value="Habiganj">
                                <option value="Jamalpur">
                                <option value="Jessore">
                                <option value="Jhalokati">
                                <option value="Jhenaidah">
                                <option value="Joypurhat">
                                <option value="Khagrachhari">
                                <option value="Khulna">
                                <option value="Kishoreganj">
                                <option value="Kurigram">
                                <option value="Kushtia">
                                <option value="Lakshmipur">
                                <option value="Lalmonirhat">
                                <option value="Madaripur">
                                <option value="Magura">
                                <option value="Manikganj">
                                <option value="Meherpur">
                                <option value="Moulvibazar">
                                <option value="Munshiganj">
                                <option value="Mymensingh">
                                <option value="Naogaon">
                                <option value="Narail">
                                <option value="Narayanganj">
                                <option value="Narsingdi">
                                <option value="Natore">
                                <option value="Netrokona">
                                <option value="Nilphamari">
                                <option value="Noakhali">
                                <option value="Pabna">
                                <option value="Panchagarh">
                                <option value="Patuakhali">
                                <option value="Pirojpur">
                                <option value="Rajbari">
                                <option value="Rajshahi">
                                <option value="Rangamati">
                                <option value="Rangpur">
                                <option value="Satkhira">
                                <option value="Shariatpur">
                                <option value="Sherpur">
                                <option value="Sirajganj">
                                <option value="Sunamganj">
                                <option value="Sylhet">
                                <option value="Tangail">
                                <option value="Thakurgaon">
                              </datalist>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Address</div>
                      <input type="text" class="form-control uppercase" id="address" name="address" placeholder="Place">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Fathers Name</div>
                      <input type="text" class="form-control uppercase" id="father" name="father" placeholder="Father's Name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Mothers Name</div>
                      <input type="text" class="form-control uppercase" id="mother" name="mother" placeholder="Mother's Name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Religion</div>
                      <select class="form-control p-2 rounded-lg w-full" size="large" placeholder="Select a religion" id="religion" name="religion">
                        <option selected>Choose...</option>
                        <option value="MUSLIM">MUSLIM</option>
                        <option value="NON MUSLIM">NON MUSLIM</option>
                      </select>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Gender</div>
                      <select class="form-control p-2 rounded-lg w-full" size="large" placeholder="Select..."  name="gender" id="gender">
                        <option selected>Choose...</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                      </select>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Marital Status</div>
                      <select id="inputState" class="form-select uppercase" name="married">
                        <option selected>Choose...</option>
                        <option value="MARRIED">MARRIED</option>
                        <option value="UNMARRIED">UNMARRIED</option>
                      </select>
                    </div>
                    <h2 class='my-2 font-bold text-2xl '>Other Inoformaition</h2>
                    <br/>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Center Name</div>
                      <input type="text" class="form-control uppercase" placeholder="Medical Center Name" id="medical_center_name" name="medical_center_name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Issue Date</div>
                      <input type="text" class="form-control uppercase" placeholder="Medical Issue Date" id="medical_issue_date" name="medical_issue_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Expiry Date</div>
                      <input type="text" class="form-control uppercase" placeholder="Medical Expiry Date" id="medical_expire_date" name="medical_expire_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Driver Licence Number</div>
                      <input type="text" class="form-control uppercase" id="driving_licence" placeholder="Driving Licence Number" name="driving_licence">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Police Clearence No</div>
                      <input type="text" class="form-control uppercase" id="police_licence" placeholder="Police Clearence Number" name="police_licence">
                    </div>
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
                    >
                      Add Candidate
                    </button>
                  </div>
            </form>
          </div>  
          <div class="modal-footer">
            <button type="button" class=" bg-[#074f56] p-3 rounded text-white font-semibold" data-bs-dismiss="modal">Close</button>
        
          </div>
        </div>
      </div>
    </div>
     
    

  </section><!-- End Hero -->
  <div class="container ">
    <div class="table-responsive">
      <table class="table table-bordered border-primary" id="candidatetable">
        <thead>
          <tr>
            <th scope="col">Serial Number</th>
            <th scope="col">Creation Date</th>
            <th scope="col">Name</th>
            <th scope="col">Passport Number</th>
            <th scope="col" style="width: 20%">VISA/Sponsor Number</th>
            <th scope="col">MOFA Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($candidates as $candidate)
          <tr>
            <th scope="row">{{$candidate->id}}</th>
            <td>{{$candidate->created_at}}</td>
            <td>{{$candidate->name}}</td>
            <td>{{$candidate->passport_number}}</td>
            <td><strong>Visa No:</strong> {{$candidate->visa_no}} </br>
                <strong>Sponsor No:</strong> {{$candidate->spon_id}}</td>
            </td>
            <td>{{$candidate->mofa_no}}</td>
            <td class="text-center p-2">
              @php
                if(!$candidate->visa_no){
                  echo '<a href="' . route('user/visaadd', ['id' => $candidate->id]) . '" target="_blank" class="fw-semibold text-primary"><i class="bi bi-file-earmark-plus"></i></a>';
                }
              @endphp
              
              <a href="{{ route('user/edit', ['id' => $candidate->id]) }}" target="_blank" class="fw-semibold text-success"><i class="bi bi-pencil-square"></i></a>
              <a href="{{ route('user/print', ['id' => $candidate->id]) }}" target="_blank" class="fw-semibold text-warning"><i class="bi bi-printer-fill"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    
  </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>
 @include('layout.script')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
 
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function() {
    $('#candidatetable').DataTable();

    $('#medical_issue_date').datepicker({
      dateFormat: 'd/m/y',
      onSelect: function(selectedDate) {
            var issueDate = $(this).datepicker('getDate');
            issueDate.setMonth(issueDate.getMonth() + 2);
            issueDate.setDate(issueDate.getDate() - 1);
            var formattedDate = $.datepicker.formatDate('d/m/y', issueDate);
            $('#medical_expire_date').val(formattedDate);
      }
    });
    $('#pass_issue_date').datepicker({
      dateFormat: 'd/m/y',
      onSelect: function(selectedDate) {
            var issueDate = $(this).datepicker('getDate');
            issueDate.setFullYear(issueDate.getFullYear() + 10);
            issueDate.setDate(issueDate.getDate() - 1);
            var formattedDate = $.datepicker.formatDate('d/m/y', issueDate);
            $('#pass_expire_date').val(formattedDate);
      }
    });
    // $('#pass_expire_date').datepicker({
    //   dateFormat: 'd/m/y'
    // });
    var apiUrl = window.location.origin + '/user/get';
    var method = "GET";
    var data = {
       
    };
    var headers = {
       
    };
    
    callApi(apiUrl, method, data, headers);
   
});
var dataObject = {};
function callApi(apiUrl, method, data, headers) {
            $.ajax({
                url: apiUrl,
                type: method,
                data: data,
                headers: headers,
                dataType: "json",
                // success: function (response) {
                //     console.log(response);
                //     for (var key in response) {
                //         dataObject[key] = response[key];
                //     }
                      
                // },
                success: function (response) {
                        console.log(response);
                        
                        for (var key in response.candidates) {
                            var candidateValue = response.candidates[key];
                            var userEmail = key;
                            var combinedValue = {
                                candidate: candidateValue,
                                user: response.users[candidateValue] || null 
                            };
                            dataObject[userEmail] = combinedValue;
                        }
                        console.log(dataObject);
                    },   
                    error: function (error) {
                    console.error("Error calling API:", error);
                }
            });
}
$('#pnumber').on('change', function () {
    var inputValue = $(this).val();
    var foundObject = dataObject[inputValue];
   
    if (foundObject) {
        // var email = Object.keys(foundObject)[0];
        var email = foundObject.candidate;
        // var licenceName = foundObject[email].user ? foundObject[email].user.licence_name : "Not available";
        var licenceName = foundObject.user.licence_name ? foundObject.user.licence_name : "Not available";
        alert(inputValue + " exists in database under: " + licenceName+'('+ foundObject.user.rl_no +')'+' Contact here: '+ email);
        $('#pnumber').val("");
    } else {
        
    }
});



$('#addcandidate').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = form.serialize();
        console.log(formData);
        $.ajax({
              url: form.attr('action'),
              method: form.attr('method'),
              data: form.serialize(),
              success: function(response) {
                
                  console.log(response);
                  
                  Swal.fire({
                      title: response.title,
                      text: response.message,
                      icon: response.icon,
                      
                  });
                  if (response.redirect_url) {
                            setTimeout(function() {
                              var redirectUrl = window.location.origin + '/'+ response.redirect_url;
                              window.location.href = redirectUrl;
                            }, 3000);
                    }
                                          
              },
              error: function(response) {
                
                  console.log(response);
                  var errorMessage = xhr.responseText;
                  var regex = /SQLSTATE\[23000\]:.*Duplicate entry.*'(.+)' for key '(.+)'/;
                  var matches = errorMessage.match(regex);
                  var duplicateEntryValue = matches ? matches[1] : null;
                  var duplicateEntryKey = matches ? matches[2] : null;

                  console.log("Duplicate Entry Value:", duplicateEntryValue);
                  console.log("Duplicate Entry Key:", duplicateEntryKey);
                  Swal.fire({
                      title: "Error",
                      text: "Cannot add candidate\n 1: Complete all fields are required\n 2: Same ID check",
                      icon: 'error',
                    
                  });
                  if (response.redirect_url) {
                            setTimeout(function() {
                              var redirectUrl = window.location.origin + '/'+ response.redirect_url;
                              window.location.href = redirectUrl;
                            }, 3000);
                    }
                  
              }
          });
      });
// document.getElementById('pass_issue_date').addEventListener('change', function() {
//   var issueDate = new Date(this.value);
//   var expireDate = new Date(issueDate.getFullYear() + 10, issueDate.getMonth(), issueDate.getDate());
//   var formattedExpireDate = formatDate(expireDate);
//   console.log(formattedExpireDate);
//   document.getElementById('pass_expire_date').value = formattedExpireDate;
// });

function formatDate(date) {
  date.setDate(date.getDate() - 1); // Subtract 1 day from the date

  var year = date.getFullYear();
  var month = ('0' + (date.getMonth() + 1)).slice(-2);
  var day = ('0' + date.getDate()).slice(-2);

  return year + '-' + month + '-' + day;
}


</script>

</body>

</html>