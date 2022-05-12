@extends('layout.master')




@section('content')
    
<div class="container">
    <div class="signup-content">
        <div class="signup-img">
            <div class="signup-img-content">
                <h2>Register now </h2>
                {{-- <img src="{{ asset('/asset/images/register.jpg') }}" alt=""> --}}
                <p></p>
            </div>
        </div>
        <div class="signup-form">
            <form method="POST" class="register-form" id="registerForm" action="{{ route('save-users') }}" >
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <div class="form-input">
                            <label for="first_name" class="required">Full name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong >{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="last_name" class="required">Designation</label>
                            <input type="text" name="designation" id="designation" />
                        </div>
                        @error('designation')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="company" class="required">Date Of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" />
                        </div>
                        @error('date_of_birth')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="email" class="required">D.O.J</label>
                            <input type="date" name="date_of_joining" id="date_of_joining" />
                        </div>
                        @error('date_of_joining')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">Office</label>
                            <input type="text" name="office" id="office" />
                        </div>
                        @error('office')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">District</label>
                            <select name="district" id="district">
                                <option>Select</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->district }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('district')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror


                        <div class="form-input">
                            <label for="phone_number" class="required">Circle</label>
                            <select name="circle" id="circle">
                                
                                <option>Select</option>

                            </select>
                        </div>
                        @error('circle')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                    

                        <div class="form-input">
                            <label for="last_name" class="required">Division</label>
                            <select name="division" id="division">
                                
                                <option>Select</option>

                            </select>
                        </div>
                        @error('division')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <div class="form-input">
                            <label for="company" class="required">Range</label>
                            <select name="range" id="range">
                                
                                <option>Select</option>

                            </select>
                        </div>
                        @error('range')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="email" class="required">Ofice Address</label>
                            <input type="text" name="office_address" id="office_address" />
                        </div>
                        @error('office_address')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="gender" class="required">Gender</label>
                            {{-- <input type="text" name="gender" id="gender" /> --}}
                            <select name="gender" id="gender">
                                <option ></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        @error('gender')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">Qualification</label>
                            <input type="text" name="qualification" id="qualification" />
                        </div>
                        @error('qualification')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">User Name</label>
                            <input type="text" name="username" id="username" />
                        </div>
                        @error('username')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">Password</label>
                            <input type="password" name="password" id="password" />
                        </div>
                        @error('password')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        <div class="form-input">
                            <label for="phone_number" class="required">Contact</label>
                            <input type="number" name="contact" id="contact" />
                        </div>
                              @error('contact')
                        <div class="alert alert-danger" role="alert">
                            <small>
                                <strong>{{ $message }}</strong>
                            </small>
                        </div>
                        @enderror

                        
                    </div>
                </div>
                
                <div class="form-submit">
                    <input type="submit" value="Register" class="submit" id="submit" name="submit" />
                    <input type="submit" value="Forget" class="submit" id="reset" name="reset" />
                </div>
            </form>
        </div>
    </div>
</div>    


<script >
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#district').on('change',function(e) {
            var dist_id = e.target.value;
            $.ajax({
                url:"{{ route('ajax-circle') }}",
                // type:"POST",
                data: {
                    dist_id: dist_id
                },
                success:function (data) {
                    $('#circle').empty();
                    $.each(data.circles[0].circles,function(index,circles){
                        $('#circle').append('<option value="'+circles.id+'">'+circles.circle+'</option>');
                    })

                    $('#division').empty();
                        $.each(data.divisions[0].divisions, function(index, divisions){
                        $('#division').append('<option value="'+divisions.id+'">'+divisions.division+'</option>');
                    })
                    $('#range').empty();
                    $.each(data.ranges[0].ranges, function(index, ranges){
                        $('#range').append('<option value="'+ranges.id+'">'+ranges.ranges+'</option>');
                    })

                    $(document).ready(function (){
                        $('#division').on('change', function(e){
                            var id = e.target.value;
                            $.ajax({
                                url:"{{ route('ajax-ranges') }}",
                                data:{
                                    id: id
                                },
                                success:function(data){
                                    $('#range').empty();
                                    $.each(data.ranges[0].ranges, function(index, ranges){
                                        $('#range').append('<option value="'+ranges.id+'">'+ranges.ranges+'</option>');
                                    })
                                }
                            })
                        })
                    })
    
                    
                        
                        
                    
                }



            })
        });
    });

   
  
</script>


  
@endsection